<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php 
 
 for($i=5;$i>0;$i--)
 
     for($j=0;$j<5;$j++)
     {
         if($j+1<$i)
         {
             echo "&nbsp;&nbsp;";
         }else
         {
             echo "* ";
         }
     }
     echo "<br>";
 
 ?>
    
</body>
</html>
 
