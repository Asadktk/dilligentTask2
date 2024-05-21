<?php
if (isset($_POST['submit'])) {

    $allowed_ext = array('png', 'jpg', 'jpeg', 'gif', 'pdf');

    if (!empty($_FILES['file']['name'])) {

        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        // $target_dir = "/Extras/uploads/${file_name}";
        $target_dir = "D:/xampp/htdocs/php-dilligent-practice/dilligentTask2/Extras/uploads/${file_name}";


        // Get file ext 
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        // validate file ext 
        if (in_array($file_ext, $allowed_ext)) {
            if ($file_size <= 1000000) {
                move_uploaded_file($file_tmp,$target_dir);
                $message = '<p style="color: green;">Uploaded Successfully!</p>';
            } else {
                $message = '<p style="color: red;">File is too large</p>';
            }
        } else {
            $message = '<p style="color: red;">Invalid file extenssion</p>';
        }
    } else {
        $message = '<p style="color: red;">Please choose a file</p>';
    }
}

?>


<!DOCTYPE html>
<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Center a Div</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            margin: 0;
        }

        .centered-div {
            margin-top: 20px;
            width: 50%;
            background-color: lightblue;
            padding: 20px;
            /* text-align: center;  */
        }
    </style>
</head>

<body>

    <div class="centered-div">

        <?php echo $message ?? null; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            Select image to upload:
            <br>
            <input type="file" name="file" id="fileToUpload"><br>
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>


</body>

</html>