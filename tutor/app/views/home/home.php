<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?= BASEURL; ?>/home/data" method="post" enctype="multipart/form-data">
        <input type="text" name="judul"><br><br>
        <input type="file" name="image"> <br> <br>
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>