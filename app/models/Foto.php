<?php

class Foto extends BaseModel
{
  protected $table = 'foto';
  //protected $second_table = 'menu';
  
  public function nazevadresare($id)
  {
    $result = dibi::query('SELECT nazev_slozky FROM [foto] where [id] = %i', $id);
    return $result->fetchSingle();
  }
  public function vybrat($id = 0)
  {
   return $this->connection->select('*')->from($this->table)->where('nadrazene_menu = %i', $id)->orderBy('id', dibi::DESC);
  }
  public function vybrat_foto($id)
  {
   return $this->connection->select('*')->from($this->table)->where('nadrazeny_clanek = %i', $id)->orderBy('id', dibi::DESC);
  }
  public function vypsat()
  {
    return dibi::fetchPairs("SELECT nazev_slozky,titulek FROM [foto]");
  }

}