<?php
namespace Pyz\Yves\HelloWorld\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;


class SubscriptionFormType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     *
     * @return void
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name',TextType::class,[
            'required'=>true,
            'label'=>'Name',
            'constraints'=>[
                new NotBlank(),
             ]
            ])
            ->add('message',TextType::class,[
                'label'=>'Message',
                'required'=>true,
                'constraints'=>[
                    new NotBlank(),
                ]
            ]);
       }

}
