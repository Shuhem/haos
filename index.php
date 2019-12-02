<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="menu">
        <ul>
            <li><?php // require  '/pages/' . $_GET['page'] . '.php'; ?></li>
            <li>пункт меню 2</li>
            <li>пункт меню 3</li>
        </ul>
    </div>
<div id="content">
         <?php
         $page = $_GET['page'];

         /*
         if($page == "poems"){
         include"poems.php";
         }
         elseif($page == "contact"){
         include"contact.php";
         }
         elseif($page == "faq"){
         include"faq.php";
         }
         else{ include"index.php";
         }
         
         
         /*
            $_GET["$page"];
            if($page == "poems"){
              require '/pages/' . $_GET['poems'] . '.php';
              } */
             ?>
    </div>
</body>
</html>
