<?php

namespace App\Controller;

use App\Entity\Menu;
use App\Entity\Category;
use App\Form\MenuType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Repository\CategoryRepository;

class MenusController extends AbstractController
{
    // Display the list of menus
    #[Route('/menus', name: 'app_menus')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $menus = $entityManager->getRepository(Menu::class)->findAll();

        return $this->render('menu/list.html.twig', [
            'menus' => $menus,
        ]);
    }


    #[Route('/menu/create', name: 'app_menu_create')]
    public function create(Request $request, EntityManagerInterface $entityManager, CategoryRepository $categoryRepository): Response
    {
        $menu = new Menu();
        $form = $this->createForm(MenuType::class, $menu);

        $form->handleRequest($request);
        // Fetch all existing categories
        $categories = $categoryRepository->findAll();

        if ($form->isSubmitted() && $form->isValid()) {

            // Capitalize the first letter of the menu name
            $menuName = $menu->getName();
            $menu->setName(ucfirst(strtolower($menuName))); // Capitalize first letter
            // Persist the new menu
            $entityManager->persist($menu);
            $entityManager->flush();

            // Add success flash message
            $this->addFlash('success', 'Menu created successfully!');

            // Redirect to the menu list page
            return $this->redirectToRoute('app_menus');
        }

        return $this->render('menu/create.html.twig', [
            'form' => $form->createView(),
            'categories' => $categories,
        ]);
    }


    // Display specific menu details by ID
    #[Route('/menu/{id}', name: 'app_menu', requirements: ['id' => '\d+'])]
    public function menu(EntityManagerInterface $entityManager, int $id): Response
    {
        $menu = $entityManager->getRepository(Menu::class)->find($id);

        if (!$menu) {
            throw $this->createNotFoundException('Menu not found');
        }

        return $this->render('menu/show.html.twig', [
            'menu' => $menu,
        ]);
    }

    #[Route('/menu/{id}/edit', name: 'app_menu_edit')]
    // public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    // {
    //     $menu = $entityManager->getRepository(Menu::class)->find($id);

    //     if (!$menu) {
    //         throw $this->createNotFoundException('Menu not found');
    //     }

    //     $form = $this->createForm(MenuType::class, $menu, ['is_edit' => true]);
    //     $form->handleRequest($request);

    //     if ($form->isSubmitted() && $form->isValid()) {
    //         $entityManager->flush();
    //         $this->addFlash('success', 'Menu updated successfully!');
    //         return $this->redirectToRoute('app_menus', ['id' => $menu->getId()]);
    //     }

    //     return $this->render('menu/edit.html.twig', [
    //         'form' => $form->createView(),
    //         'menu' => $menu,
    //     ]);
    // }

    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $menu = $entityManager->getRepository(Menu::class)->find($id);

        if (!$menu) {
            throw $this->createNotFoundException('Menu not found');
        }

        $form = $this->createForm(MenuType::class, $menu, ['is_edit' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();  // Get uploaded file
            $imageUrl = $request->request->get('image_url');  // Get image URL input

            if ($imageFile instanceof UploadedFile) {
                // Handle file upload
                $destination = $this->getParameter('images_directory'); // Path to save images
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                $imageFile->move($destination, $newFilename);
                $menu->setImage('/uploads/images/' . $newFilename);  // Store relative path or URL
            } elseif (!empty($imageUrl)) {
                // Use the provided URL
                $menu->setImage($imageUrl);
            }

            $entityManager->flush();
            $this->addFlash('success', 'Menu updated successfully!');
            return $this->redirectToRoute('app_menus');
        }

        return $this->render('menu/edit.html.twig', [
            'form' => $form->createView(),
            'menu' => $menu,
        ]);
    }


    // Route to delete menu
    #[Route('/menu/{id}/delete', name: 'app_menu_delete')]
    public function delete(int $id, EntityManagerInterface $entityManager): Response
    {
        $menu = $entityManager->getRepository(Menu::class)->find($id);

        if (!$menu) {
            throw $this->createNotFoundException('Menu not found');
        }

        // Remove the menu and flush changes
        $entityManager->remove($menu);
        $entityManager->flush();

        $this->addFlash('success', 'Menu deleted successfully!');
        return $this->redirectToRoute('app_menus');
    }
}
