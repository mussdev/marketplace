<?php

namespace LSI\MarketBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class DemarcheType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('docbien', FileType::class, array(
                'constraints' => array(
                    new NotBlank()),
                'label' => 'J\'ai estimé seul ou avec mon interlocuteur CIVILINK les biens que je veux valoriser',
                'data_class' => null,))
            ->add('docbudget', FileType::class, array(
                'constraints' => array(
                    new NotBlank()
                ),
                'label' => 'J\'ai estimé le budget achat associé',
                'data_class' => null,
            ))
            ->add('docdecision', FileType::class, array(
                'constraints' => array( new NotBlank()),
                'label' => 'J\'ai préparé la decision de l\'assemblée délibérante',
                'data_class' => null,
            ))
            ->add('docdecisionbudget', FileType::class, array(
                'constraints' => array( new NotBlank()),
                'label' => 'J\'ai archivé la décision de l\'assemblée déliberante et saisi mon budget achat dans la rubrique Budget',
                'data_class' => null,
            ))
            ->add('conditionlocation', FileType::class, array(
                'constraints' => array( new NotBlank()),
                'label' => 'Definition des conditions de location',
                'data_class' => null,
            ))
            ->add('contratassurance', FileType::class, array(
                'constraints' => array( new NotBlank()),
                'label' => 'Definition du contrat d\'assurance',
                'data_class' => null,
            ))
          /*  ->add('demarcheEtat')
            ->add('mairie')*/
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'LSI\MarketBundle\Entity\Demarche'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'lsi_marketbundle_demarche';
    }


}
