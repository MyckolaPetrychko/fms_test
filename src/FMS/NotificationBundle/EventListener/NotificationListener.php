<?php
namespace FMS\NotificationBundle\EventListener;
use Symfony\Component\DependencyInjection\ContainerInterface;


class NotificationListener
{
    private $mailer;
    private $templating;

    public function __construct(ContainerInterface $container)
    {
        $this->mailer = $container->get('mailer');
        $this->templating = $container->get('templating');
    }

    public function onKernelResponse($event)
    {
        $user = $event->getUser();
        $message = new \Swift_Message('Successfully completed registration!');
        $message->setFrom('petrychko.myckola@gmail.com')
        ->setTo($user->getEmail())
        ->setBody(
            $this->templating->render(
                'FMSNotificationBundle:Default:registration.html.twig',
                array('user' => $user)
            ),
            'text/html'
        );

        $this->mailer->send($message);
    }
}