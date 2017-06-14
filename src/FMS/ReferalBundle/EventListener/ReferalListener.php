<?php

namespace FMS\ReferalBundle\EventListener;

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FMS\UserBundle\Entity\Referal;

class ReferalListener
{
    private $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    public function onKernelController(FilterControllerEvent $event)
    {
        $controller = $event->getController();

        if (!is_array($controller)) {
            return;
        };

        if ($controller[0] instanceof Controller) {
            $ref = $event->getRequest()->query->get('ref');
            if ($ref != "") {
                $this->updateRef($ref);
                $url = $event->getRequest()->getUri();
                $url = substr($url, 0, strpos($url, "?ref"));
                $event->setController(function() use ($url) {
                    return new RedirectResponse($url);
                });
            }
        }
    }

    private function hasRef($ref)
    {
        $query = $this->em->CreateQueryBuilder()->select('u')
        ->from('FMSUserBundle:Referal', 'u')
        ->where('u.ref = ?1')
        ->setParameter(1, $ref)->getQuery();

        try {
            return ($query->getSingleResult()->getRef()) == $ref;
        } catch (\Doctrine\ORM\NoResultException $e) {
           return false;
        }
    }

    private function hasIp($ip)
    {
        $query = $this->em->CreateQueryBuilder()->select('u')
            ->from('FMSUserBundle:Referal', 'u')
            ->where('u.ip = ?1')
            ->setParameter(1, $ip)->getQuery();

        try {
            return ($query->getSingleResult()->getIp()) == $ip;
        } catch (\Doctrine\ORM\NoResultException $e) {
            return false;
        }
    }

    private function saveRef($ref)
    {
        $this->em->merge(new Referal($ref));
        return $this->em->flush();
    }

    private function updateRef($ref)
    {
        if (!$this->hasIp($_SERVER['REMOTE_ADDR'])) {
            if (!$this->hasRef($ref)) {
                return $this->saveRef($ref);
            }
            $qb = $this->em->CreateQueryBuilder();
            $query = $qb
                ->update('FMSUserBundle:Referal', 'u')
                ->set('u.ip', $qb->expr()->literal($_SERVER['REMOTE_ADDR']))
                ->set('u.date', $qb->expr()->literal(date("Y-m-d H:i:s")))
                ->where('u.ref=?1')
                ->setParameter(1, $ref)->getQuery();
            return $query->execute();
        } else {
            $qb = $this->em->CreateQueryBuilder();
            $query = $qb
                ->update('FMSUserBundle:Referal', 'u')
                ->set('u.date', $qb->expr()->literal(date("Y-m-d H:i:s")))
                ->where('u.ip=?1')
                ->setParameter(1, $_SERVER['REMOTE_ADDR'])->getQuery();
            return $query->execute();
        }
        return 1;
    }
}