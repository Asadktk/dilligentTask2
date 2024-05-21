<?php


if(isset($_POST['submit'])){
   echo $_POST['name'];
    echo $_POST['age'];
}
?>
<!-- <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Asad">Click</a> -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label>Name:</label>
        <input type="text" name='name'>
    </div>
    <div>
        <label>Age:</label>
        <input type="text" name='age'>
    </div>
    <div>
        <button type="submit" name="submit" value="submit">submit</button>
    </div>
</form>