<?php

namespace LSI\MarketBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MembreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom')
            ->add('prenom')
            ->add('pseudo')
            ->add('fonction')
            ->add('devis')
            ->add('contratAchat')
            ->add('vente')
            ->add('reference')
            ->add('photo_profile', FileType::class)

        ;

        $builder->remove('url')
                ->remove('alt')
                ->remove('mairie')
            ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LSI\MarketBundle\Entity\Membre'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'lsi_marketbundle_membre';
    }


}
