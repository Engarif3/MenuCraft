<?php

namespace App\Form;

use App\Entity\Dish;
use App\Entity\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DishType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Dish Name',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
            ])
            ->add('price', NumberType::class, [
                'label' => 'Price',
            ])
            ->add('image', FileType::class, [
                'label' => 'Dish Image',
                'mapped' => false, // Handle the file separately
                'required' => false,
            ])
            ->add('category', EntityType::class, [
                'class' => Category::class,
                'choice_label' => 'categoryName',  // Assuming 'categoryName' is the field in Category entity
                'label' => 'Category',
            ]);

        // Dynamically change the button label depending on the context (edit or create)
        if ($options['is_edit']) {
            $builder->add('save', SubmitType::class, [
                'label' => 'Update Dish',
            ]);
        } else {
            $builder->add('save', SubmitType::class, [
                'label' => 'Create Dish',
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Dish::class,
            'is_edit' => false, // Ensure this is lowercase 'is_edit'
        ]);
    }
}
