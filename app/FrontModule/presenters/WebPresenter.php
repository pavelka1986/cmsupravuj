<?php

class Front_WebPresenter extends BasePresenter
{
   public function renderDefault($id = 0,$url = "")
   {
      $menu = new Menu;
      $this->template->menu = $menu->findAll();

      $menu_id = new Menu;
      $this->template->menu_id = $menu->find($id);

      //clanky
      $this->getParam('id');
      $stranky = new Stranky;
      $this->template->stranky = $stranky->vybrat($this->getParam('id'));
      //fotogalerie
      $foto = new Foto;
      $this->template->foto = $foto->vybrat($this->getParam('id'));
      
      //dokumenty
      $docs = new Docs;
      $this->template->docs = $docs->vybrat($this->getParam('id'));
      
   }
   public function renderClanky($id = 0,$url = "")
   {
      //$stranky = new Stranky;
      //$this->template->title = "Detail aktuality";

      $menu = new Menu;
      $this->template->menu = $menu->findAll();

      $stranky = new Stranky;
      $this->template->stranky = $stranky->find($id);
      
      //fotogalerie
      $this->getParam('id');
      $foto = new Foto;
      $this->template->foto = $foto->vybrat_foto($this->getParam('id'));
      
      //dokumenty
      $docs = new Docs;
      $this->template->docs = $docs->vybrat_foto($this->getParam('id'));

    }
    public function renderFoto($id = 0,$url = "")
    {
     //$this->template->title = "Detail fotogalerie";
     
     $menu = new Menu;
     $this->template->menu = $menu->findAll();
     
     $foto = new Foto;
     $this->template->foto = $foto->find($id);
     
     
    $adresar = new Foto;
    $this->template->adresar = $adresar->find($id);

    $adresas = 'files/' . $adresar->nazevadresare($id);

    foreach (new DirectoryIterator($adresas) as $file) {
            $this->template->adresas = $adresas;
    }
     
    }

}
