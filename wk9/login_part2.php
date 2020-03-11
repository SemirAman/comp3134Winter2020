<h1>Weak Password</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <label>Password</label>
 <input type="hidden" name="username" value="SIMDOG">
 <input type="password" name="passwordpassword">
 <br/>
 <input type="submit">
</form>

<?php
    $pass_check = array("123456", "123456789", "qwerty", "password", "111111",
                        "12345678", "abc123", "1234567", "password1", "12345");
    if (in_array($_POST['password'], $pass_check)) {
        ob_end_clean();
        echo "<h3>Welcome " . $_POST['username']. " to Your Portal</h3>";
    }
?>

