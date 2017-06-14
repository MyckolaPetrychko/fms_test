<?php

namespace FMS\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FMSUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
