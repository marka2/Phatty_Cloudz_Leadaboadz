<?php include('connect.php'); ?>

<?php

$_SESSION['loginok'] = 0;

if(isset($_POST['Submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE userName = '".$username."' AND password = '".$password."' LIMIT 1 ";

$result = mysql_query($sql, $conn);
if ($row = mysql_fetch_assoc($result)) {
    $id = $row['id'];
    $_SESSION['loginok'] = 1;
    echo "<script type='text/javascript'>  window.location='read.php?id=".$row['id']."'; </script>";
}
}
?>
<html>
<link rel="stylesheet" href="cloudStyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js"></script>
<script>
$('.ui.dropdown')
  .dropdown()
;
</script>

<style type="text/css">

.login-colorblocktop {
  padding-top: 100px;

  -webkit-animation: fadeInLeft 2s;
  animation: fadeInLeft 2s;
}

.login-center.text {
  color: white;
  font-family: 'Questrial', sans-serif;
  text-align: center;
}
  .login-background {
  background: url("https://images.unsplash.com/photo-1512624157605-f71b49e5ef3d?auto=format&fit=crop&w=1650&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D") no-repeat center center fixed;
  background-size: cover;
  min-height: 600px;
  opacity: 0.8;
}

  </style>

  <div class="ui borderless inverted top fixed menu">
    <div class="ui container">
      <a href="index.html" class="item">
        Home
      </a>
    </div>
  </div>

 <body style="padding-top: 56px;">
  <div class="login-background" style="padding-top: 56px;">
    <div class="ui container login-colorblocktop">
      <div class="ui centered grid">
        <div class="column" style="max-width: 450px">
          <h2 class="ui white header">
            <div class="login-center text">
              Login
            </div>
          </h2>
          <form id="create" action="login.php" class="ui large form" method="POST">
            <div class="ui stacked segment">
              <div class="field">
                <div class="ui left icon input">
                  <i class="user icon"></i>
                  <input type="text" id="username" name="username" placeholder="Username">
                </div>
              </div>
              <div class="field">
                <div class="ui left icon input">
                  <i class="lock icon"></i>
                  <input type="text" id="password" name="password" placeholder="Password">
                </div>
              </div>
              <input type="submit" name="Login" style="background-color: #2f3946;">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="developers.html" class="item">Developers</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Phattys Ratingz</a>
          </div>
        </div>
        <div class="seven wide column">
        </div>
      </div>
    </div>
  </div>
</body>
<!--    <form id="create" action="login.php" method="POST">
Username: <input type="text" id="username" name="username"><br>
Password: <input type="text" id="password" name="password"><br>
<input type="submit" name="Login">
</form>
</html>
