<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Dish;
use App\Form\CategoryType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{

    // Route to display all categories
    #[Route('/category', name: 'category_list')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        // Fetch all categories
        $categories = $entityManager->getRepository(Category::class)->findAll();

        // For each category, fetch the associated dishes
        $categoriesWithDishes = [];
        foreach ($categories as $category) {
            $dishes = $entityManager->getRepository(Dish::class)->findBy(['category' => $category]);
            $categoriesWithDishes[] = [
                'category' => $category,
                'dishes' => $dishes
            ];
        }

        // Pass categories with dishes to the template
        return $this->render('category/list.html.twig', [
            'categoriesWithDishes' => $categoriesWithDishes,
        ]);
    }


    #[Route('/category/create', name: 'category_create')]
    public function create(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Create a new Category object
        $category = new Category();

        // Create the form
        $form = $this->createForm(CategoryType::class, $category);

        // Handle the request
        $form->handleRequest($request);

        // Check if the form is submitted and valid
        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Persist the category
                $entityManager->persist($category);
                $entityManager->flush();

                // Flash success message and redirect
                $this->addFlash('success', 'Category created successfully!');
                return $this->redirectToRoute('category_list');
            } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
                $this->addFlash('error', 'Category name must be unique!');
            }
        }

        // Render the form
        return $this->render('category/create.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // edit route
    #[Route('/category/edit/{id}', name: 'category_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager, int $id): Response
    {
        // Find the category by id
        $category = $entityManager->getRepository(Category::class)->find($id);

        // Check if category exists
        if (!$category) {
            // If the category doesn't exist, throw a 404 error
            throw $this->createNotFoundException('Category not found');
        }

        // Create the form and bind it to the category object and is-edit is grabbed from From/CategoryType.php
        $form = $this->createForm(CategoryType::class, $category, [
            'is_edit' => true, // Set this to true for editing
        ]);

        // Handle the form submission
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Persist the updated category
                $entityManager->flush();

                // Flash success message
                $this->addFlash('success', 'Category updated successfully!');

                // Redirect to a category list or a category details page
                return $this->redirectToRoute('category_list');
            } catch (\Exception $e) {
                // Handle any exceptions that occur during the update
                $this->addFlash('error', 'An error occurred while updating the category.');
            }
        }

        // Render the form view
        return $this->render('category/edit.html.twig', [
            'form' => $form->createView(),
            'category' => $category, // Pass the category for any display or debugging purposes
        ]);
    }

    // Delete route
    #[Route('/category/delete/{id}', name: 'category_delete')]
    public function deleteCategory(int $id, EntityManagerInterface $entityManager): Response
    {
        // Fetch the category by ID
        $category = $entityManager->getRepository(Category::class)->find($id);

        // If category not found, redirect to the list page with an error message
        if (!$category) {
            $this->addFlash('error', 'Category not found.');
            return $this->redirectToRoute('category_list');
        }

        // Get the associated dishes for the category
        $dishes = $entityManager->getRepository(Dish::class)->findBy(['category' => $category]);

        // Delete all associated dishes first (if any)
        foreach ($dishes as $dish) {
            $entityManager->remove($dish);
        }

        // Now, delete the category
        $entityManager->remove($category);

        // Flush the changes to the database
        $entityManager->flush();

        // Redirect to the category list page after successful deletion
        $this->addFlash('success', 'Category and its associated dishes deleted successfully.');
        return $this->redirectToRoute('category_list');
    }
}
