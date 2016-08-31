<?php

class Stranky extends BaseModel
{
  protected $table = 'stranky';
  //protected $second_table = 'menu';
  
  public function vybrat($id = 0)
  {
    return $this->connection->select('*')->from($this->table)->where('clanek=%i', $id)->orderBy('id', dibi::DESC);
  }
  public function vypsat()
  {
    return dibi::fetchPairs("SELECT id, titulek FROM [stranky]");
  }

}