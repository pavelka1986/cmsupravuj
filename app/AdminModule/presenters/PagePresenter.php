<?php
final class Admin_PagePresenter extends Admin_SecuredPresenter
{
    /********************* view default *********************/
  public function renderDefault()
  {
    $this->template->title = "Přehled aktualit";
    $stranky = new Stranky;
    $this->template->stranky = $stranky->findAll()->orderBy('id');
  }
  /********************* views add & edit *********************/
  public function renderAdd()
  {
    $this->template->title = "Přidat novou aktualitu";
    $form = $this->getComponent('strankyForm');
    $form['save']->caption = 'Přidat';
    $this->template->form = $form;
  }
  public function renderEdit($id = 0)
  {
    $this->template->title = "Upravit aktualitu";
    $form = $this->getComponent('strankyForm');
    $this->template->form = $form;
    if (!$form->isSubmitted()) {
      $stranky = new Stranky;
      $row = $stranky->find($id)->fetch();
      if (!$row) {
        throw new
        /*Nette\Application\*/
        BadRequestException('Záznam nebyl nalezen');
      }
      $form->setDefaults($row);
    }
  }
  public function strankyFormSubmitted(AppForm$form)
  {
    if ($form['save']->isSubmittedBy()) {
      $id = (int) $this->getParam('id');
      $stranky = new Stranky;
      if ($id > 0) {
      $titulek = $form['titulek']->getValue();
      $url = String::webalize($titulek);
      $stranky->update($id, array(
          "clanek" => $form['clanek']->getValue(),
          "titulek" => $form['titulek']->getValue(),
          "url" => $url,
          "text_uvodni_strana" => $form['text_uvodni_strana']->getValue(),
          "text_aktualita" => $form['text_aktualita']->getValue()
          )
        );
      }
      else {
        $titulek = $form['titulek']->getValue();
        $url = String::webalize($titulek);
        $stranky->insert( array(
          "clanek" => $form['clanek']->getValue(),
          "titulek" => $form['titulek']->getValue(),
          "url" => $url,
          "text_uvodni_strana" => $form['text_uvodni_strana']->getValue(),
          "text_aktualita" => $form['text_aktualita']->getValue()
          )
        );
        $this->flashMessage('Aktualita byla přidána.');
      }
    }
    $this->redirect('default');
  }
  /********************* view delete *********************/
  public function renderDelete($id = 0)
  {
    $this->template->title = "Smazat aktualitu";
    $this->template->form = $this->getComponent('deleteForm');
    $stranky = new Stranky;
    $this->template->stranky = $stranky->find($id)->fetch();
    if (!$this->template->stranky) {
      throw new
      /*Nette\Application\*/
      BadRequestException('Záznam nebyl nalezen.');
    }
  }
  public function deleteFormSubmitted(AppForm$form)
  {
    if ($form['delete']->isSubmittedBy()) {
      $stranky = new Stranky;
      $stranky->delete($this->getParam('id'));
      $this->flashMessage('Aktualita byla vymazána.');
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
      case 'strankyForm':
        $id = $this->getParam('id');
        $form = new AppForm($this, $name);
        $model = new Menu;
        $form->addSelect('clanek', 'Nadřazený článek:', $model->vypsat());
        $form['clanek']->getControlPrototype()->style = "background-color: #eeeeee; width: 700px";
        $form->addText('titulek', 'Titulek:', 110)->addRule(Form::FILLED, 'Titulek musí být vyplněný');
        $form->addTextarea('text_uvodni_strana', 'Popis:', 110, 3)->addRule(Form::FILLED, 'Popis musí být vyplněný');
        $form->addTextarea('text_aktualita', 'Text', 110, 30)->addRule(Form::FILLED, 'Text musí být vyplněný');
        $form->addSubmit('cancel', 'Zrušit')->setValidationScope(NULL);
        $form->addSubmit('save', 'Uložit aktualitu a publikovat ji na webu')->getControlPrototype()->class('default');
        $form->onSubmit[] = array(
          $this,
          'strankyFormSubmitted',
        );
        $form->addProtection('Prosím odešlete formulář znovu.');
        return;
      case 'deleteForm':
        $form = new AppForm($this, $name);
        $form->addSubmit('cancel', 'Zrušit');
        $form->addSubmit('delete', 'Nenávratně smazat aktualitu')->getControlPrototype()->class('default');
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