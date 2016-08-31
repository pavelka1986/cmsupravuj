<?php
final class Admin_DefaultPresenter extends Admin_BasePresenter
{
    public function startup()
    {
        parent::startup();
        $user = Environment::getUser();
        if (!$user->isLoggedIn()) {
            if ($user->getSignOutReason() === User::INACTIVITY) {
                $this->flashMessage('Systém vás z bezpečnostních důvodů odhlásil.', 'warning');
            }
            $backlink = $this->getApplication()->storeRequest();
            $this->redirect('Auth:login', array('backlink' => $backlink));
        }
        else {
            if (!$user->isAllowed($this->reflection->name, $this->getAction())) {
                $this->flashMessage('Pro vstup do této sekce nemáte dostatečná oprávnění!', 'warning');
                $this->redirect('Auth:login');
            }
        }
    }
    public function actionLogout()
    {
        Environment::getUser()->signOut();
        $this->flashMessage('Právě jste se odhlásili z administrace.');
        $this->redirect('Auth:login');
    }
}