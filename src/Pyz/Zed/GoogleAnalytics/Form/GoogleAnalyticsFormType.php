<?php

namespace Pyz\Zed\GoogleAnalytics\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class GoogleAnalyticsFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     * @return void
     */
public function buildForm(FormBuilderInterface $builder, array $options)
{
    parent::buildForm($builder, $options);
    $builder->add('analyticsKey', TextType::class, [
        'label' => 'GA ID/Key',
        'constraints'=>[
            new NotBlank()
        ]

    ]);
}
}
