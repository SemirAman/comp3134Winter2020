<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['username'] == 'root' && $_POST['password'] == 'pass') { 
            $msg = 'Successful Login!';
        }else{
            $msg = 'incorrect Credentials!';
        }
    }
?>

<h1>Login Form</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <label>Username</label>
 <input type="text" name="username">
 <label>Password</label>
 <input type="password" name="password">
 <input type="submit">
 <br/>
 <div><?php echo $msg ?></div>
</form>
