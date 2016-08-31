<?php

class Menu extends BaseModel
{
  protected $table = 'menu';
  protected $second_table = 'stranky';
  
  public function najit($id=0)
  {
    return $this->connection->select('*')->from($this->second_table)->join($this->table)->on('stranky.clanek = menu.id');
  }
  public function vypsat()
  {
    return dibi::fetchPairs("SELECT id,nazev FROM [menu]");
  }
}

