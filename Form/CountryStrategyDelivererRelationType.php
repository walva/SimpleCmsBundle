<?php

namespace Walva\SimpleCmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CountryStrategyDelivererRelationType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('country', 'country')
//            ->add('owner')
            ->add('deliverer')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Walva\SimpleCmsBundle\Entity\CountryStrategyDelivererRelation'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'walva_simplecmsbundle_countrystrategydelivererrelation';
    }
}
