<?php
final class Admin_UserPresenter extends Admin_SecuredPresenter
{
  /********************* view default *********************/
  public function renderDefault()
  {
    $this->template->title = "Seznam uživatelů";
    $users = new Users;
    $this->template->users = $users->findAll()->orderBy('id');
  }
  /********************* views add & edit *********************/
  public function renderAdd()
  {
    $this->template->title = "Přidat nového uživatele";
    $form = $this->getComponent('usersForm');
    
    $form['save']->caption = 'Přidat';
    $this->template->form = $form;
  }
  public function renderEdit($id = 0)
  {
    $this->template->title = "Upravit uživatele";
    $form = $this->getComponent('usersForm');
    $this->template->form = $form;
    if (!$form->isSubmitted()) {
      $users = new Users;
      $row = $users->find($id)->fetch();
      if (!$row) {
        throw new
        /*Nette\Application\*/
        BadRequestException('Záznam nebyl nalezen');
      }
      $form->setDefaults($row);
    }
  }
  public function usersFormSubmitted(AppForm$form)
  {
    if ($form['save']->isSubmittedBy()) {
      $id = (int) $this->getParam('id');
      $users = new Users;
      if ($id > 0) {
        $config = Environment::getConfig('security');
        $heslo = sha1($form['password']->getValue() . $config->salt);
        $users->update($id, array(
          'name' => $form['name']->getValue(),
          'email' => $form['email']->getValue(),
          'password' => $heslo,
          'role' => $form['role']->getValue()
         ));
        $this->flashMessage('Uživatel byl změněn.');
      }
      else {
        $config = Environment::getConfig('security');
        $heslo = sha1($form['password']->getValue() . $config->salt);
        $users->insert(array(
          'name' => $form['name']->getValue(),
          'email' => $form['email']->getValue(),
          'password' => $heslo,
          'role' => $form['role']->getValue()
         )
        );
        //$users->insert($form->getValues());
        $this->flashMessage('Uživatel byl přidán.');
      }
    }
    $this->redirect('default');
  }
  /********************* view delete *********************/
  public function renderDelete($id = 0)
  {
    $this->template->title = "Smazat uživatele";
    $this->template->form = $this->getComponent('deleteForm');
    $users = new Users;
    $this->template->users = $users->find($id)->fetch();
    if (!$this->template->users) {
      throw new
      /*Nette\Application\*/
      BadRequestException('Záznam nebyl nalezen.');
    }
  }
  public function deleteFormSubmitted(AppForm$form)
  {
    if ($form['delete']->isSubmittedBy()) {
      $users = new Users;
      $users->delete($this->getParam('id'));
      $this->flashMessage('Uživatel byl vymazán.');
    }
    $this->redirect('default');
  }
  
  /********************* facilities *********************/
  /**
   * Component factory.
   * @param  string  component name
   * @return void
   */
  protected function createComponent($name)
  {
    switch ($name) {
      case 'usersForm':
        $id = $this->getParam('id');
        $form = new AppForm($this, $name);
        $form->addText('name', 'Jméno a příjmení:', 110)->addRule(Form::FILLED, 'Jméno a příjmení musí být vyplněné');
        $form->addText('email', 'E-mail:', 110)->addRule(Form::FILLED, 'E-mail musí být vyplněný');
        $form->addText('password', 'Heslo:', 110)->addRule(Form::FILLED, 'Heslo musí být vyplněné');
        $role = array('admin' => 'Administrátor',
          'editor' => 'Editor',
          'registered' => 'Host'
        );
        $form->addSelect('role', 'Role:', $role)->addRule(Form::FILLED, 'Role musí být vyplněná');
        $form->addSubmit('cancel', 'Zrušit')->setValidationScope(NULL);
        $form->addSubmit('save', 'Uložit uživatele')->getControlPrototype()->class('default');
        
        $form->onSubmit[] = array(
          $this,
          'usersFormSubmitted',
        );
        $form->addProtection('Prosím odešlete formulář znovu.');
        
        return;
      case 'deleteForm':
        $form = new AppForm($this, $name);
        $form->addSubmit('cancel', 'Zrušit');
        $form->addSubmit('delete', 'Nenávratně smazat uživatele')->getControlPrototype()->class('default');
        $form->onSubmit[] = array(
          $this,
          'deleteFormSubmitted',
        );
        $form->addProtection('Prosím odešlete formulář ještě jednou.');
        return;
      default:
        parent::createComponent($name);
    }
  }
}