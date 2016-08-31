<?php
final class Admin_MenuPresenter extends Admin_SecuredPresenter
{
  /********************* view default *********************/
  public function renderDefault()
  {
    $this->template->title = "Přehled menu";
    $menu = new Menu;
    $this->template->menu = $menu->findAll()->orderBy('id');
  }
  /********************* views add & edit *********************/
  public function renderAdd()
  {
    $this->template->title = "Přidat novou položku menu";
    $form = $this->getComponent('menuForm');
    $form['save']->caption = 'Přidat';
    $this->template->form = $form;
  }
  public function renderEdit($id = 0)
  {
    $this->template->title = "Upravit položku menu";
    $form = $this->getComponent('menuForm');
    $this->template->form = $form;
    if (!$form->isSubmitted()) {
      $menu = new Menu;
      $row = $menu->find($id)->fetch();
      if (!$row) {
        throw new
        /*Nette\Application\*/
        BadRequestException('Záznam nebyl nalezen');
      }
      $form->setDefaults($row);
    }
  }
  public function menuFormSubmitted(AppForm$form)
  {
    if ($form['save']->isSubmittedBy()) {
      $id = (int) $this->getParam('id');
      $menu = new Menu;
      if ($id > 0) {
        $nazev = $form['nazev']->getValue();
        $nazev_url = String::webalize($nazev);
        $menu->update($id, array(
          "nazev" => $form['nazev']->getValue(),
          "nazev_url" => $nazev_url,
          "obsah" => $form['obsah']->getValue()
          )
        );
        $this->flashMessage('Položka menu byla změněna.');
      }
      else {
        $nazev = $form['nazev']->getValue();
        $nazev_url = String::webalize($nazev);
        $menu->insert( array(
          "nazev" => $form['nazev']->getValue(),
          "nazev_url" => $nazev_url,
          "obsah" => $form['obsah']->getValue()
          )
        );
        $this->flashMessage('Položka menu byla přidána.');
      }
    }
    $this->redirect('default');
  }
  /********************* view delete *********************/
  public function renderDelete($id = 0)
  {
    $this->template->title = "Smazat položku menu";
    $this->template->form = $this->getComponent('deleteForm');
    $menu = new Menu;
    $this->template->menu = $menu->find($id)->fetch();
    if (!$this->template->menu) {
      throw new
      /*Nette\Application\*/
      BadRequestException('Záznam nebyl nalezen.');
    }
  }
  public function deleteFormSubmitted(AppForm$form)
  {
    if ($form['delete']->isSubmittedBy()) {
      $menu = new Menu;
      $menu->delete($this->getParam('id'));
      $this->flashMessage('Položka menu byla vymazána.');
    }
    $this->redirect('default');
  }
  /********************* action logout *********************/
  public function actionLogout()
  {
    Environment::getUser()->signOut();
    $this->flashMessage('Byli jste odhlášeni. Prosím přihlašte se znovu.');
    $this->redirect('Auth:login');
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
      case 'menuForm':
        $id = $this->getParam('id_menu');
        $form = new AppForm($this, $name);
        $form->addText('nazev', 'Název:', 110)->addRule(Form::FILLED, 'Název musí být vyplněný');
        //$form->addText('nazev_url', 'Url:', 110)->addRule(Form::FILLED, 'Url musí být vyplněné');
        $form->addTextarea('obsah', 'Obsah:', 110, 15)->addRule(Form::FILLED, 'Obsah musí být vyplněný');
        $form->addSubmit('cancel', 'Zrušit')->setValidationScope(NULL);
        $form->addSubmit('save', 'Uložit menu a publikovat na webu')->getControlPrototype()->class('default');
        $form->onSubmit[] = array(
          $this,
          'menuFormSubmitted',
        );
        $form->addProtection('Prosím odešlete formulář znovu.');
        return;
      case 'deleteForm':
        $form = new AppForm($this, $name);
        $form->addSubmit('cancel', 'Zrušit');
        $form->addSubmit('delete', 'Nenávratně smazat položku menu')->getControlPrototype()->class('default');
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