<?php
final class Admin_FotoPresenter extends Admin_SecuredPresenter
{
    /********************* view default *********************/
  public function renderDefault()
  {
    $this->template->title = "Přehled fotogalerií";
    $foto = new Foto;
    $this->template->foto = $foto->findAll()->orderBy('id');
  }
  /********************* views add & edit *********************/
  public function renderNew()
  {
  $this->template->title = "Vytvořit novou fotogalerii";
    $form = $this->getComponent('galleryForm');
    $form['save']->caption = 'Přidat';
    $this->template->form = $form;
  }
  public function renderAdd()
  {
    $this->template->title = "Přidat novou fotogalerii";
    $form = $this->getComponent('fotoForm');
    $form['save']->caption = 'Přidat';
    $this->template->form = $form;
  }
  public function renderEdit($id = 0)
  {
    $this->template->title = "Upravit fotogalerii";
    $adresar = new Foto;
    $this->template->adresar = $adresar->find($id);
    
    $adresas = 'files/' . $adresar->nazevadresare($id);
    foreach (new DirectoryIterator($adresas) as $file) {
         if ($file->isDot()) continue;
         Image::fromFile(WWW_DIR . '/'. $adresas .'/'. $file)
         ->resize(800, 600)
         ->save(WWW_DIR . '/'. $adresas .'/'. $file);
         $this->template->adresas = $adresas;
    }
    $form = $this->getComponent('fotoForm');
    $this->template->form = $form;
    if (!$form->isSubmitted()) {
      $foto = new Foto;
      $row = $foto->find($id)->fetch();
      if (!$row) {
        throw new
        /*Nette\Application\*/
        BadRequestException('Záznam nebyl nalezen');
      }
      $form->setDefaults($row);
    }
  }
  public function galleryFormSubmitted(AppForm $form)
  {
    if ($form['save']->isSubmittedBy()) {
      $id = (int) $this->getParam('id');
      $foto = new Foto;
        $titulek = $form['titulek']->getValue();
        $titulek2 = String::webalize($titulek);
        mkdir(WWW_DIR . "/files/".$titulek2);
        
        $foto->insert(array(
          "titulek" => $form['titulek']->getValue(),
          "nazev_slozky" => $titulek2,
          "nadrazene_menu" => $form['nadrazene_menu']->getValue(),
          "nadrazeny_clanek" => $form['nadrazeny_clanek']->getValue(),
          )
        );
        $this->flashMessage('Fotogalerie byla přidána.');
    }
    $this->redirect('default');
  }
  public function fotoFormSubmitted(AppForm $form)
  {
    if ($form['save']->isSubmittedBy()) {
        $fotogalerie = $form['fotogalerie']->getValue();
        $file1 = $form['file1']->getValue();
        //$file1->move(WWW_DIR . "/files/".$fotogalerie."/". String::webalize($file1->getName()).".jpg" );
         $file1->move(WWW_DIR . "/files/".$fotogalerie."/". date("Ymd-Gis").".jpg" );
        $this->flashMessage('Fotografie byla přidána.');
      }
    $this->redirect('default');
  }
  /********************* view delete *********************/
  public function renderDelete($id = 0)
  {
    $this->template->title = "Smazat fotogalerii";
    $this->template->form = $this->getComponent('deleteForm');
    $foto = new Foto;
    $this->template->foto = $foto->find($id)->fetch();
    
    $adresar = new Foto;
    $this->template->adresar = $adresar->find($id);
    $adresas = 'files/' . $adresar->nazevadresare($id);
    foreach (new DirectoryIterator($adresas) as $file) {
         $this->template->adresas = $adresas;
    }
    
    
    if (!$this->template->foto) {
      throw new
      /*Nette\Application\*/
      BadRequestException('Záznam nebyl nalezen.');
    }
  }
  public function deleteFormSubmitted(AppForm$form)
  {
    if ($form['delete']->isSubmittedBy()) {
    //mazání souboru
    $adresar = new Foto;
    $this->template->adresar = $adresar->find($id);
    $adresas = 'files/' . $adresar->nazevadresare($id);
      foreach (new DirectoryIterator($adresas) as $file) {
         if ($file->isDot()) continue;
         unlink(WWW_DIR . '/'. $adresas .'/'. $file);
    }
      $foto = new Foto;
      $foto->delete($this->getParam('id'));
      $this->flashMessage('Fotogalerie byla vymazána.');
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
      case 'galleryForm':
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
        $form->addText('titulek', 'Titulek:', 110)->addRule(Form::FILLED, 'Titulek musí být vyplněný');
        $form->addSubmit('cancel', 'Zrušit')->setValidationScope(NULL);
        $form->addSubmit('save', 'Uložit aktualitu a publikovat ji na webu')->getControlPrototype()->class('default');
        $form->onSubmit[] = array(
          $this,
          'galleryFormSubmitted',
        );
        $form->addProtection('Prosím odešlete formulář znovu.');
        return;
      case 'fotoForm':
        $id = $this->getParam('id');
        $form = new AppForm($this, $name);
        $foto = new Foto;
        $form->addSelect('fotogalerie','Fotogalerie', $foto->vypsat())
        ->skipFirst('---- vyberte ----');
        $form['fotogalerie']->getControlPrototype()->style = "background-color: #eeeeee; width: 700px";
        $form->addFile('file1', 'Fotografie 1.:');
              //->addRule(Form::MIME_TYPE, 'Povolený formát fotografií je pouze jpg', 'image/jpeg');
        $form->addSubmit('cancel', 'Zrušit')->setValidationScope(NULL);
        $form->addSubmit('save', 'Přidat fotografii')->getControlPrototype()->class('default');
        $form->onSubmit[] = array(
          $this,
          'fotoFormSubmitted',
        );
        $form->addProtection('Prosím odešlete formulář znovu.');
        return;
      case 'deleteForm':
        $form = new AppForm($this, $name);
        $form->addSubmit('cancel', 'Zrušit');
        $form->addSubmit('delete', 'Nenávratně smazat fotogalerii')->getControlPrototype()->class('default');
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