<html>
  <?php
    include('functions.php');
    include('todo.php');
  ?>
  <head>
  </head>
  <body>

  <?php

/*$todos = todo_all();
 
      $items = array();
      foreach($todos as $todo) {
        $items[] = $todo['ID'] . ' ' . $todo['Title'] . ' ' . $todo['Description'] . ' ' . $todo['Priority'];
      }
      print theme_list($items);
*/

$myTodo= new Todo(5);
print $myTodo->renderHtml();

    