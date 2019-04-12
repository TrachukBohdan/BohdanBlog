<?php

namespace Infrastructure\Presenter\Admin;

use Application\ObjectPresenterInterface;
use Domain\Admin\User;

class ToArrayCreateAdminPresenter implements ObjectPresenterInterface
{
    /**
     * @param $admin
     * @return array
     * @throws \Exception
     */
    public function present($admin)
    {
        if (!($admin instanceof User)) {
            throw new \Exception("expect Admin object");
        }

       return [
            'email' => $admin->email()->toString()
       ];
    }
}