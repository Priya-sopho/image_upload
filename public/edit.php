<?php
      
   //Set the Content Type
   //   header('Content-type: image/jpeg');

    // Get new sizes
    list($width, $height) = getimagesize($orig);
    $newwidth = $width * 0.5;
    $newheight = $height * 0.5;

   // Load
   $thumb = imagecreatetruecolor($newwidth, $newheight);
    // Create Image From Existing File
      switch($imgType)
      {
            case "jpeg" :$source = imagecreatefromjpeg($orig); break;
            case "jpg" : $source = imagecreatefromjpeg($orig); break;
            case "gif" : $source = imagecreatefromgif($orig); break;
            case "png" : $source = imagecreatefrompng($orig); break;

      }
      
  
 // Resize
 imagecopyresampled($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

      // Allocate A Color For The Text
      $color = imagecolorallocate($thumb, 0, 0, 0);
      
      //Set coordinate
      $x = $newwidth * 0.5;
      $y = $newwidth * 0.5;

      // Set Path to Font File
      $font_path = 'fonts/font.ttf';
      
      // Print Text On Image
     if( imagettftext($thumb, 18, 0, $x, $y, $color, $font_path, $text) == false)
     {
         unlink($orig);
         apologize("Image not edited");
     }
      
      $target_file = $target_dir.basename($_FILES["image"]["name"],'.'.$imgType)."_edit".".".$imgType;
      $f = 0;
      switch($imgType)
      {
           //to store image  
            case "jpeg" :
            case "jpg" :{
                           imagejpeg($thumb,$target_file);
                           $f =1 ;
                          } break;
            case "gif" :{
                           imagegif($thumb,$target_file);
                           $f =1 ;
                          } break;
            case "png" : {
                           imagepng($thumb,$target_file);
                           $f =1 ;
                          } break;
          
      }
      //Destroy image which are of no use now
      imagedestroy($thumb);
      imagedestroy($source);
      if($f)
      {
          $edit = $target_file;
      }
      else
      {
          apologize("Edited file unsuccesfully stored");
      }  

?> 