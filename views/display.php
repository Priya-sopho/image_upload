<!DOCTYPE html>
<html>
 <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Display</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<h1 class="center">Your all uploads</h1>
<?php 
  require("../includes/config.php");
  $rows = mysql_query("Select * from Image");
?>  
 <div class="container">
    <table style="margin-left:auto; margin-right:auto; color: #333; font-family: Helvetica, Arial, sans-serif; width: 640px; border-collapse:collapse; border-spacing: 0;" >
            <tr>
                <th style="border: 1px solid #CCC; background: #F3F3F3; font-weight: bold; text-align:center;">Original</th>
                <th style="border: 1px solid #CCC; background: #F3F3F3; font-weight: bold; text-align:center;">Edited</th>
            </tr>    
            <?php while ($r = mysql_fetch_assoc($rows)): ?>
            <tr>
                <td style="border: 1px solid #CCC;"><?= "<img src=\"".$r["original"]."\" >" ?> </td>
                <td style="border: 1px solid #CCC;"><?= "<img src=\"".$r["edited"]."\" >" ?> </td>
                </tr>
            <?php endwhile ?>
    </table>
    </div>
     
</body>
</html>