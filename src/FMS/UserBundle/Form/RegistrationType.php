<?php
namespace FMS\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstname');
        $builder->add('secondname');
        $builder->add('email');
        $builder->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                                  'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                                  'options' => array('translation_domain' => 'FOSUserBundle'),
                                  'first_options' => array('label' => 'form.password'),
                                  'second_options' => array('label' => 'form.password_confirmation'),
                                  'invalid_message' => 'fos_user.password.mismatch',
                              ));

    }

    /**
     * {@inheritdoc}
    */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
          'data_class' => "FMS\UserBundle\Entity\User",
          'csrf_token_id' => 'registration',
            'intention' => 'registration',
         ));
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}