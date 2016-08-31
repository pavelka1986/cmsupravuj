<?php
abstract class Admin_BasePresenter extends BasePresenter
{
    protected function beforeRender()
    {
        $user = Environment::getUser();
        // zde důležité $this->template->user = ($user->isAuthenticated()) ? $user->getIdentity() : NULL;
        $this->template->user = ($user->isLoggedIn()) ? $user->getIdentity() : NULL;
    }
}