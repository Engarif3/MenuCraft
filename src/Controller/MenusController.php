<?php

namespace App\Controller;

// use App\Entity\Category;
// use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class MenusController extends AbstractController
{
    #[Route('/menus', name: 'app_menus')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MenusController.php',
        ]);
    }

    #[Route('/menu/{id}', name: 'app_menu')]
    public function menu($id): Response
    {
        return new Response("The id is $id");
    }
    #[Route('/menus-temp', name: 'app_menu')]

    public function menuTemp(): Response
    {
        return $this->render("index.html.twig");
    }

    // #[Route('/api/category/create', name: 'api_category_create', methods: ['POST'])]
    // public function createCategory(Request $request, EntityManagerInterface $entityManager): JsonResponse
    // {
    //     // Decode JSON data from the request
    //     $data = json_decode($request->getContent(), true);

    //     // Check if 'name' field is provided in the request data
    //     if (empty($data['name'])) {
    //         return new JsonResponse(
    //             ['error' => 'Category name is required'],
    //             Response::HTTP_BAD_REQUEST
    //         );
    //     }

    //     // Create a new Category entity and set the name
    //     $category = new Category();
    //     $category->setCategoryName($data['name']);

    //     // Save the new category to the database
    //     try {
    //         $entityManager->persist($category);
    //         $entityManager->flush();
    //     } catch (\Exception $e) {
    //         // Handle potential database or persistence errors
    //         return new JsonResponse(
    //             ['error' => 'An error occurred while saving the category'],
    //             Response::HTTP_INTERNAL_SERVER_ERROR
    //         );
    //     }

    //     // Return a success response
    //     return new JsonResponse(
    //         ['message' => 'Category created successfully', 'category_id' => $category->getId()],
    //         Response::HTTP_CREATED
    //     );
    // }
}
