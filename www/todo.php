<?php

class Todo {
  private $ID;
  public $Title;
  public $Description;
  public $Date;
  public $Priority;
  public $ListID;
  public $UserID;

  function __construct($ID=FALSE){
    if($ID !== FALSE){
      $this->load($ID);
    }
  }

  function load($ID){
    
  }
  function save(){
    
  }

  function renderHtml(){
    return "<p>" . $this->Title . "</p>"; 
  }

}