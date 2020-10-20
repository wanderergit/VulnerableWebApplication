<html>

<head>
  <link rel="shortcut icon" href="../Resources/hmbct.png" />
  <title>CommandExec-1</title>
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
    <button type="button" name="mainButton" onclick="location.href='commandexec.html';">Main Page</button>
  </div>
  <div class="btn-div" style="background-color: rgb(236, 161, 161);padding:20px; min-height: 21vh;">
    <h1 align="center">Login as Admin</h1>
    <form align="center" action="CommandExec-1.php" method="$_GET">
      <label align="center">Username:</label><br>
      <input align="center" type="text" name="username" value="Admin"><br>
      <label>Password:</label><br>
      <input align="center" type="password" name="password" value=""><br>
      <input align="center" type="submit" value="Submit">

    </form>
  </div>
  <div style="background-color:#ecf2d0;padding:20px;border-radius:0px 0px 20px 20px" align="center">
    <?php
    if (isset($_GET["username"])) {
      echo shell_exec($_GET["username"]);
      if ($_GET["username"] == "Admin" && $_GET["password"] == "ufoundmypassword")
        echo "WELLDONE";
    }

    ?>
  </div>
</body>

</html>