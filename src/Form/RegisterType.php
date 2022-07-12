<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                "label"=> "Nom",
                'attr' => [
                    'placeholder' => 'Nom'
                ],
                'row_attr' => [
                    'class' => 'form-floating',
                ],
            ])
            ->add('firstname', TextType::class, [
                "label"=> "Prénom",
                'attr' => [
                    'placeholder' => 'Prénom'
                ],
                'row_attr' => [
                    'class' => 'form-floating',
                ],
            ])
            ->add('mail', EmailType::class, [
                "label"=> "Adresse mail",
                'attr' => [
                    'placeholder' => 'Adresse mail'
                ],
                'row_attr' => [
                    'class' => 'form-floating',
                ],
            ])
//            ->add('gain', HiddenType::class, [
//                'row_attr' => ['value' => 'hidden', 'id' => 'mydata', 'name' => 'test'],
//            ])
//            ->add('telephoneNumber', NumberType::class, [
//                "label"=> "Numéro de téléphone",
//                'attr' => [
//                    'placeholder' => 'Numéro de téléphone',
//                    'pattern' => '[0-9]{10}'
//                ],
//                'row_attr' => [
//                    'class' => 'form-floating',
//                ],
//            ])
//            ->add('code')
//            ->add('codeActivated')
//            ->add('creationTime')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
