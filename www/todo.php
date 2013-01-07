<?php

class Todo {
  private $ID;
  public $Title;
  public $Description;
  public $Date;
  public $Priority;
  public $ListID;
  public $UserID;

  function __construct($ID){
    $this->Title = 'foo';
  }

  function renderHtml(){
    return "<p>" . $this->Title . "</p>"; 
  }

}