<?php

$settings = parse_ini_file('settings.ini', true);

//define some contstant
define( "DB_DSN", "mysql:host=localhost;dbname=todo" );
define( "DB_USERNAME", $settings['database']['user'] );
define( "DB_PASSWORD", $settings['database']['pass'] );

//connect
try {
  $con = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD ); //our new PDO Object
} catch (PDOException $e) {
  echo $e->getMessage(); //catch and show the error
}

/**
 * Retuns html for an unordered list
 *
 * @param array $items
 *   Array of strings to make into a list
 *
 * @return string
 *   String of html representing an unordered list
 */
function theme_list($items){
  $output = '<ul>';
    foreach ($items as $item){
      $output .= '<li>' . $item . '</li>';
    }
  $output .= '</ul>';
  return $output;
}

/**
 *load todos
 *@return array of todos
 *
 */

function todo_all() {
  global $con;
  $query = $con->prepare("SELECT * FROM Todos");

  $query->setFetchMode(PDO::FETCH_ASSOC);
  $query->execute();

  return $query->fetchAll();
}