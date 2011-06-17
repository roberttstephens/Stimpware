<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<?php
$password = 'password';
echo sha1($password);
?>


<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">

  <title>Site template</title>
  <link rel="stylesheet" href="/css/master.css" type="text/css" media="screen" charset="utf-8">
  <script src="jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="scripts.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
  <div id="wrap">
    <div id="header">
    </div>
    <div id="content">
      <h1 id="heading">Site Template</h1>
      
    </div>
    <h2 id="heading">Form examples</h2>

  <form action="login.php" method="post" accept-charset="utf-8">
    <label>Login</label><input type="text" name="login"><br />
    <label>Password</label><input type="password" name="password"><br />
    <input type="submit" value="Continue &rarr;">
  </form>

  </div>





</body>

</html>
