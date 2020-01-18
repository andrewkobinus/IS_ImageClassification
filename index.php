<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload with PHP</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

</head>

<body>

<div class="container">
    <form action="upload.php" 
    method="post" 
    enctype="multipart/form-data">

        Upload an image file here:<br>
        <input type="file" name="myfile" id="fileToUpload"><br>
        <input type="submit" name="submit" value="Upload File Now" >
    </form>
</div>

</body>
</html>