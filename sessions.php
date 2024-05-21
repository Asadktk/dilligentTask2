

<?php
session_start();

if(isset($_POST['submit'])){
   $userrname = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS ) ;

  $password = $_POST['password'];

  if($userrname == 'asad' && $password == 'password'){
    $_SESSION['username'] = $userrname;
    header('Location: /php-dilligent-practice/Extras/dashboard.php');
  }else{
    echo "Incorrect Username or Pssword";
  }
}
?>
<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Asad">Click</a> -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label>User Name:</label>
        <input type="text" name='username'>
    </div>
    <div>
        <label>Password:</label>
        <input type="password" name='password'>
    </div>
    <div>
        <button type="submit" name="submit" value="submit">submit</button>
    </div>
</form>