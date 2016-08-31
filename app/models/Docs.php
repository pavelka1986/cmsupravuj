<?php

class Docs extends BaseModel
{
  protected $table = 'docs';
  //protected $second_table = 'menu';
  
  public function vybrat($id = 0)
  {
   return $this->connection->select('*')->from($this->table)->where('nadrazene_menu = %i', $id)->orderBy('id', dibi::DESC);
  }
  public function vybrat_foto($id)
  {
   return $this->connection->select('*')->from($this->table)->where('nadrazeny_clanek = %i', $id)->orderBy('id', dibi::DESC);
  }

}