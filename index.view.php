<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Php Online Course</title>
</head>
<style>
     body{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
     }
     li{
          list-style: none;
          padding: 0;
          margin: 0;
          font-size: 1.3rem;
          line-height: 1.5rem;
     }
</style>
<body>
        <ul>
                  <?php 
               //    foreach($user1 as $key => $bio): ?>
                         <!-- <li> -->
                              <?=
                               //$key .' = ' .$bio.',<br>'; 
                                   $user1['finishHomeworks'] ? "Complete" : "Not Yet";
                               ?>
                              
                         <!-- </li> -->
                  <?php 
               //    endforeach ?> 
        </ul>
</body>
</html>