<?php

namespace App\Controller\Dashboard\Type;

use App\Controller\Dashboard\Model\AddMember;
use App\Service\Institusi\GetInstitusi;
use App\Service\Role\GetRole;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddMemberType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'=> AddMember::class,
            'allow_extra_fields'=>true,
        ]);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('namaLengkap', TextType::class)
            ->add('kode', TextType::class)
            ->add('jenisKelamin', ChoiceType::class, [
                'choices'=>['Laki - laki' => 'L', 'Perempuan' => 'P'],
                'multiple'=>false,
                'expanded'=>true,
                'choice_attr'=>[
                    'Laki - laki'=>['class'=>'form-check-input'],
                    'Perempuan'=>['class'=>'form-check-input ml-1'],
                ]
            ])
            ->add('tanggalLahir', DateType::class, [
                'widget'=>'single_text',
                'attr'=> [
                    'class'=>'form-control',
                    'data-inputmask-alias'=>'datetime',
                    'data-inputmask-inputformat'=>'yyyy-mm-dd',
                    'data-mask'=>'',
                ]
            ])
            ->add('role', EntityType::class,[
                'class'=>'App\Entity\MasterRole',
                'choice_label'=>'namaRole',
                'attr'=> [
                    'class'=>'form-control select2',
                ]
            ])
            ->add('asalInstitusi', EntityType::class, [
                'class'=>'App\Entity\MasterInstitusi',
                'choice_label'=>'namaInstitusi',
                'attr'=> [
                    'class'=>'form-control select2',
                ]
            ])
            ->add('level', EntityType::class, [
                'class'=>'App\Entity\MasterLevel',
                'choice_label'=>'namaLevel',
                'attr'=> [
                    'class'=>'form-control select2',
                ]
            ])
        ;
    }


}