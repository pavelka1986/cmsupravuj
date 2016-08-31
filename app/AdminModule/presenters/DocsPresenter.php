<?php
final class Admin_DocsPresenter extends Admin_SecuredPresenter
{
    /********************* view default *********************/
  public function renderDefault()
  {
    $this->template->title = "Přehled dokumentů";
    $docs = new Docs;
    $this->template->docs = $docs->findAll()->orderBy('id');
  }
  /********************* views add & edit *********************/
  public function renderAdd()
  {
    $this->template->title = "Přidat dokumenty";
    $form = $this->getComponent('docsForm');
    $form['save']->caption = 'Přidat';
    $this->template->form = $form;
  }
  public function renderEdit($id = 0)
  {
    $this->template->title = "Upravit dokument";
    
    $docs = new Docs;
    $this->template->docs = $docs->find($id);
    
    
    $form = $this->getComponent('editdocsForm');
    $this->template->form = $form;
    if (!$form->isSubmitted()) {
      $docs = new Docs;
      $row = $docs->find($id)->fetch();
      if (!$row) {
        throw new
        /*Nette\Application\*/
        BadRequestException('Záznam nebyl nalezen');
      }
      $form->setDefaults($row);
    }
  }
  public function docsFormSubmitted(AppForm$form)
  {
    if ($form['save']->isSubmittedBy()) {
      $id = (int) $this->getParam('id');
      $docs = new Docs;
      if ($id > 0) {
        
        $docs->update($id, array(
          "vyveseno_od" => $form['vyveseno_od']->getValue(),
          "nadrazene_menu" => $form['nadrazene_menu']->getValue(),
          "nadrazeny_clanek" => $form['nadrazeny_clanek']->getValue(),
          )
        );
        $this->flashMessage('Dokument byl změněn.');
      }
      else {
              
        //$titulek = $form['titulek']->getValue();
        $titulek = $form['titulek']->getValue();
        $titulek2 = String::webalize($titulek);
        $pripona = $form['typ_souboru']->getValue();
        
        $file1 = $form['file1']->getValue();
        $file1->move(WWW_DIR . "/docs/".$titulek2.".".$pripona );
        
        $docs->insert(array(
          "titulek" => $form['titulek']->getValue(),
          "nazev_souboru" => $titulek2,
          "typ_souboru" => $form['typ_souboru']->getValue(),
          "vyveseno_od" => $form['vyveseno_od']->getValue(),
          "nadrazene_menu" => $form['nadrazene_menu']->getValue(),
          "nadrazeny_clanek" => $form['nadrazeny_clanek']->getValue(),
          )
        );
        $this->flashMessage('Dokument byl přidán.');
      }
    }
    $this->redirect('default');
  }
  /********************* view delete *********************/
  public function renderDelete($id = 0)
  {
    $this->template->title = "Smazat dokument";
    $this->template->form = $this->getComponent('deleteForm');
    $docs = new Docs;
    $this->template->docs = $docs->find($id)->fetch();
    
       
    
    if (!$this->template->docs) {
      throw new
      /*Nette\Application\*/
      BadRequestException('Záznam nebyl nalezen.');
    }
  }
  public function deleteFormSubmitted(AppForm$form)
  {
    if ($form['delete']->isSubmittedBy()) {
    
      $docs = new Docs;
      $docs->delete($this->getParam('id'));
      $this->flashMessage('Záznam byl vymazán.');
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
      case 'docsForm':
        $id = $this->getParam('id');
        $form = new AppForm($this, $name);
        $menu = new Menu;
        $form->addSelect('nadrazene_menu','Nadřazené menu', $menu->vypsat())
        ->skipFirst('---- vyberte ----');
        $form['nadrazene_menu']->getControlPrototype()->style = "background-color: #eeeeee; width: 700px";
        $stranky = new Stranky;
        $form->addSelect('nadrazeny_clanek','Nadřazený článek', $stranky->vypsat())
        ->skipFirst('---- vyberte ----');
        $form['nadrazeny_clanek']->getControlPrototype()->style = "background-color: #eeeeee; width: 700px";
        $form->addText('titulek', 'Název souboru:', 110)->addRule(Form::FILLED, 'Název musí být vyplněný');
        $form->addText('vyveseno_od', 'Vyvěšeno dne:', 20);
        $soubor = array(
          'pdf' => 'Adobe Reader (pdf)',
          'doc' => 'Microsof Word 2003 (doc)',
          'docx' => 'Microsof Word 2007 (docx)',
          'xls' => 'Microsoft Excel 2003(xls)',
          'xlsx' => 'Microsoft Excel 2007 (xlsx)'
        );
        $form->addSelect('typ_souboru', 'Typ souboru', $soubor);
        $form->addFile('file1', 'Dokument:'); 
        $form->addSubmit('cancel', 'Zrušit')->setValidationScope(NULL);
        $form->addSubmit('save', 'Uložit aktualitu a publikovat ji na webu')->getControlPrototype()->class('default');
        $form->onSubmit[] = array(
          $this,
          'docsFormSubmitted',
        );
        $form->addProtection('Prosím odešlete formulář znovu.');
        return;
      case 'editdocsForm':
        $id = $this->getParam('id');
        $form = new AppForm($this, $name);
        $menu = new Menu;
        $form->addSelect('nadrazene_menu','Nadřazené menu', $menu->vypsat())
        ->skipFirst('---- vyberte ----');
        $form['nadrazene_menu']->getControlPrototype()->style = "background-color: #eeeeee; width: 700px";
        $stranky = new Stranky;
        $form->addSelect('nadrazeny_clanek','Nadřazený článek', $stranky->vypsat())
        ->skipFirst('---- vyberte ----');
        $form['nadrazeny_clanek']->getControlPrototype()->style = "background-color: #eeeeee; width: 700px";
        ///$form->addText('titulek', 'Název souboru:', 110)->addRule(Form::FILLED, 'Název musí být vyplněný');
        $form->addText('vyveseno_od', 'Vyvěšeno dne:', 20);
        $form->addSubmit('cancel', 'Zrušit')->setValidationScope(NULL);
        $form->addSubmit('save', 'Uložit aktualitu a publikovat ji na webu')->getControlPrototype()->class('default');
        $form->onSubmit[] = array(
          $this,
          'docsFormSubmitted',
        );
        $form->addProtection('Prosím odešlete formulář znovu.');
        return;  
      case 'deleteForm':
        $form = new AppForm($this, $name);
        $form->addSubmit('cancel', 'Zrušit');
        $form->addSubmit('delete', 'Nenávratně smazat dokumenty')->getControlPrototype()->class('default');
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