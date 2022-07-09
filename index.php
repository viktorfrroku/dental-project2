<?php 
require_once "Routs.php";


function __autoload($class_name) {
   if(file_exists('./classes/'.$class_name.'.php')) 
   {
      require_once './classes/'.$class_name.'.php';
   }

   elseif(file_exists('./Controllers/'.$class_name.'.php'))
   {
      require_once './Controllers/'.$class_name.'.php';
   }
   
};
//echo $_GET['url'];

//include "./classes/footer.php";
