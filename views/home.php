<?php include "includes/header.php"; ?>

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


<?php include "includes/footer.php"; ?>