<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php foreach ($blogs as $blog) { ?>

    <div>
        <img src="<?php echo $blog['image'] ?>" alt="1" width="300">
        <div>
            <h1><?php echo $blog['title'] ?></h1>
            <p><?php echo $blog['description'] ?></p>
            <a href="#">Read More</a>
        </div>
    </div>
<?php } ?>

<br><br><br>


<!---->
<!--<img src="../assets/img/2.jpg" alt="not found">-->
<!--<img src="./assets/img/2.jpg" alt="ok" width="300" height="200">-->


</body>
</html>