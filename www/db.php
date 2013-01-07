<?php

class DB{
  private $con;
  private $settings;
  function __construct(){
    $this->$settings = parse_ini_file('settings.ini', true);
    $this->$con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD ); //our new PDO Object
  }

  function query($sql){
    $query = $con->prepare("SELECT * FROM Todos");

    $query->setFetchMode(PDO::FETCH_ASSOC);
    $query->execute();

    return $query->fetchAll();
  }
  
}

  