<?php
final class Admin_AuthPresenter extends Admin_BasePresenter
{
    /** @persistent */
    public $backlink = '';
    protected function createComponentLoginForm($name)
    {
        $form = new AppForm($this, $name);
        $form->addText('login', 'Email:')
             ->addRule(Form::EMAIL, 'Prosím zadajte registrační email.');
        $form->addPassword('password', 'Heslo:')
             ->addRule(Form::FILLED, 'Prosím zadejte heslo.');
        $form->addProtection('Prosím odešlete znova přihlašovací údaje (vypršala platnost).');
        $form->addSubmit('send', 'Přihlásit se');
        $form->onSubmit[] = array($this, 'loginFormSubmitted');
    }
    public function loginFormSubmitted($form)
    {
        try {
            $user = Environment::getUser();
            $user->authenticate($form['login']->value, $form['password']->value);
            $this->getApplication()->restoreRequest($this->backlink);
            $this->redirect('Default:default');
        }
        catch (AuthenticationException $e) {
            $form->addError($e->getMessage());
        }
    }
}