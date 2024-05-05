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

<input type="datetime-local">
<br>
<textarea></textarea>


<select name="" id="">
    <option>dhaka</option>
    <option>gazipur</option>
    <option>narayangonj</option>
</select>


<input type="radio">Male

<input type="checkbox">Bangla

<ul>
    <li>banana
        <ul>
            <li>Banana one</li>
            <li>Banana two</li>
            <li>Banana three</li>
            <li>Banana four</li>
        </ul>

    </li>
    <li>jackfruit</li>
    <li>apple</li>
</ul>

<ol>
    <li>Banana</li>
    <li>Jackfruit
        <ul>
            <li>Banana one</li>
            <li>Banana two</li>
            <li>Banana three</li>
            <li>Banana four</li>
        </ul>
    </li>
    <li>Apple</li>
</ol>


<a href="http://www.google.com" target="_blank">Click Me</a>

<h1>This is heading</h1>
<h2>This is heading</h2>
<h3>This is heading</h3>
<h4>This is heading</h4>
<h5>This is heading</h5>
<h6>This is heading</h6>

<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Assumenda consectetur culpa distinctio, illo incidunt iste laborum
    laudantium magni minima necessitatibus officia officiis provident quam
    quo ratione rerum sed voluptate voluptates.</p>

<img src="../assets/img/2.jpg" alt="not found">
<img src="./assets/img/2.jpg" alt="ok" width="300" height="200">


</body>
</html>