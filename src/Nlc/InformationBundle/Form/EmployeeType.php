<?php

namespace Nlc\InformationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmployeeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('age')
            ->add('sex')
            ->add('education')
//            ->add('photo')
//            ->add('file')
            ->add('photofile')
            ->add('jlfile')
//            ->add('categoryid')
            ->add('createtime')
            ->add('updatetime')
            ->add('category')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Nlc\InformationBundle\Entity\Employee'
        ));
    }
}
