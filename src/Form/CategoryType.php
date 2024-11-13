<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categoryName', TextType::class, [
                'label' => 'Category Name',
            ]);

        // Dynamically change the button label depending on the context
        if ($options['is_edit']) {
            $builder->add('save', SubmitType::class, [
                'label' => 'Update Category',
            ]);
        } else {
            $builder->add('save', SubmitType::class, [
                'label' => 'Create Category',
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
            'is_edit' => false, // Default to false (i.e., create form)
        ]);
    }
}
