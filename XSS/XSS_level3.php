<!DOCTYPE html>
<html>

<head>
   <title>XSS 3</title>
   <link rel="shortcut icon" href="../Resources/hmbct.png" />
   <style>
      button {
         background-color: lightyellow;
         border-radius: 0px;
         font-size: large;
         margin: 5px;
         padding: 5px;
      }
   </style>
</head>

<body bgcolor="lightcoral" style="margin: 0; padding: 0; box-sizing: border-box; ">

   <div style="background-color:lightcoral;padding:15px;">
      <button type="button" name="homeButton" onclick="location.href='../homepage.html';">Home Page</button>
      <button type="button" name="mainButton" onclick="location.href='xssmainpage.html';">Main Page</button>
   </div>
   <div align="center" class="btn-div" style="background-color: rgb(236, 161, 161);padding:20px; min-height: 21vh;">
      <form method="GET" action="" name="form">
         <p>Your name:<input type="text" name="username"></p>
         <input type="submit" name="submit" value="Submit">
      </form>
   </div>
   <?php
   if (isset($_GET["username"])) {
      $user = preg_replace("/<(.*)[S,s](.*)[C,c](.*)[R,r](.*)[I,i](.*)[P,p](.*)[T,t]>/i", "", $_GET["username"]);
      echo "Your name is " . "$user";
   }
   ?>


</body>

</html>