<?php
abstract class Admin_SecuredPresenter extends Admin_BasePresenter
{
    public function startup()
    {
        parent::startup();
        $user = Environment::getUser();
        if (!$user->isLoggedIn()) {
            if ($user->getSignOutReason() === User::INACTIVITY) {
                $this->flashMessage('Systém vás z bezpečnostních důvodů odhlásil.', 'warning');
            }
            $this->flashMessage('Pro vstup do administrační sekce se musíte přihlásit!', 'warning');
            $backlink = $this->getApplication()->storeRequest();
            $this->redirect('Auth:login', array('backlink' => $backlink));
        }
        else {
            if (!$user->isAllowed($this->reflection->name, $this->getAction())) {
                $this->flashMessage('Pokusili jste se vstoupit do sekce pro kterou nemáte dostatečná oprávnění.', 'warning');
                $this->redirect('Default:');
            }
        }
    }
}