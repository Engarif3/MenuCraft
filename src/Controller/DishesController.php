<?php

namespace App\Controller;

use App\Entity\Dish;
use App\Entity\Category;
use App\Form\DishType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Repository\CategoryRepository;

class DishesController extends AbstractController
{
    // Display the list of dishes
    #[Route('/dishes', name: 'app_dishes')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $dishes = $entityManager->getRepository(Dish::class)->findAll();

        return $this->render('dish/list.html.twig', [
            'dishes' => $dishes,
        ]);
    }


    #[Route('/dish/create', name: 'app_dish_create')]
    public function create(Request $request, EntityManagerInterface $entityManager, CategoryRepository $categoryRepository): Response
    {
        $dish = new Dish();
        $form = $this->createForm(DishType::class, $dish);

        $form->handleRequest($request);
        // Fetch all existing categories
        $categories = $categoryRepository->findAll();

        if ($form->isSubmitted() && $form->isValid()) {

            // Capitalize the first letter of the dish name
            $dishName = $dish->getName();
            $dish->setName(ucfirst(strtolower($dishName))); // Capitalize first letter
            // Persist the new dish
            $entityManager->persist($dish);
            $entityManager->flush();

            // Add success flash message
            $this->addFlash('success', 'Food item created successfully!');

            // Redirect to the dish list page
            return $this->redirectToRoute('app_dishes');
        }

        return $this->render('dish/create.html.twig', [
            'form' => $form->createView(),
            'categories' => $categories,
        ]);
    }


    // Display specific dish details by ID
    #[Route('/dish/{id}', name: 'app_dish', requirements: ['id' => '\d+'])]
    public function dish(EntityManagerInterface $entityManager, int $id): Response
    {
        $dish = $entityManager->getRepository(Dish::class)->find($id);

        if (!$dish) {
            throw $this->createNotFoundException('Food Item not found');
        }

        return $this->render('dish/show.html.twig', [
            'dish' => $dish,
        ]);
    }

    #[Route('/dish/{id}/edit', name: 'app_dish_edit')]
    public function edit(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $dish = $entityManager->getRepository(Dish::class)->find($id);

        if (!$dish) {
            throw $this->createNotFoundException('dish not found');
        }

        $form = $this->createForm(DishType::class, $dish, ['is_edit' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();  // Get uploaded file
            $imageUrl = $request->request->get('image_url');  // Get image URL input

            if ($imageFile instanceof UploadedFile) {
                // Handle file upload
                $destination = $this->getParameter('images_directory'); // Path to save images
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();

                $imageFile->move($destination, $newFilename);
                $dish->setImage('/uploads/images/' . $newFilename);  // Store relative path or URL
            } elseif (!empty($imageUrl)) {
                // Use the provided URL
                $dish->setImage($imageUrl);
            }

            $entityManager->flush();
            $this->addFlash('success', 'dish updated successfully!');
            return $this->redirectToRoute('app_dishes');
        }

        return $this->render('dish/edit.html.twig', [
            'form' => $form->createView(),
            'dish' => $dish,
        ]);
    }


    // Route to delete dish
    #[Route('/dish/{id}/delete', name: 'app_dish_delete')]
    public function delete(int $id, EntityManagerInterface $entityManager): Response
    {
        $dish = $entityManager->getRepository(Dish::class)->find($id);

        if (!$dish) {
            throw $this->createNotFoundException('dish not found');
        }

        // Remove the dish and flush changes
        $entityManager->remove($dish);
        $entityManager->flush();

        $this->addFlash('success', 'dish deleted successfully!');
        return $this->redirectToRoute('app_dishes');
    }
}
