<html>

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../../Resources/hmbct.png" />
  <title> Level 2 </title>
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
    <button type="button" name="homeButton" onclick="location.href='../../homepage.html';">Home Page</button>
    <button type="button" name="mainButton" onclick="location.href='fileinc.html';">Main Page</button>
  </div>

  <div align="center" class="btn-div" style="background-color: rgb(236, 161, 161);padding:20px; min-height: 21vh;"><b>
      <h3>This is Level 2</h3>
    </b></div>
  <div align="center">
    <a href=lvl2.php?file=1.php><button>Button</button></a>
    <a href=lvl2.php?file=2.php><button>The Other Button!</button></a>
  </div>

  <?php
  echo "</br></br>";

  if (isset($_GET['file'])) {
    $secure2 = $_GET['file'];

    $secure2 = str_replace(array("..\\", ".\\", " ./", "../"), "", $secure2);
    $secure2 = str_replace(array("http://", "https://"), "", $secure2);

    if (isset($secure2)) {
      @include($secure2);
      echo "<div align='center'><b><h5>" . $secure2 . "</h5></b></div> ";
    }
  }
  ?>
</body>

</html>