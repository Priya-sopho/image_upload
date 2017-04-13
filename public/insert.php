<?php 
  /***This to insert to db after uploading  ***/
     
 //configuration
 require('../includes/config.php');
 require('upload.php');
 require('edit.php');
 //Insert into item table
      if( mysql_query("INSERT IGNORE INTO Image (original, edited) 
            VALUES ('$orig','$edit')") === false ) 
       {
           die(mysql_error());
          apologize("Image was not stored properly.");
        }
    else
      render("display.php");
 ?>
