<a href="index.php?page=index">INDEX</a>
<a href="index.php?page=page1">Startsida</a>
<a href="index.php?page=page2">Anteckningar</a>
<a href="index.php?page=page3">Kontakt</a>
<!-- <a href="index.php?page=faq">FAQ</a> -->
</nav></header>

<div id="content">
<?php 

// Place the value from ?page=value in the URL to the variable $page. 
$page = $_GET['page']; 

// Create an array of the only pages allowed. 
$pageArray = array( 
       'index', 
       'page1', 
       'page2', 
       'page3', 
       'faq' 
         ); 

// If there is no page set, include the default main page. 

if (!$page) { 
  include('pages/index.php'); 
} 

// Is $page in the array? 
$inArray = in_array($page, $pageArray); 

// If so, include it, if not, emit error. 
 if ($inArray == true) { 
  include('pages/'. $page .'.php'); 
}else { 
  echo 'Umm tisk tisk. You should not be messing with things.'; 
} 
?> 
</div>