<?php
require_once 'Link.php';
?>
	
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1>This is Menu</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 
<?php		
	echo (new Link())->setAttr('href', '/php8/OOP_and_MVC/Classes/Link/1.php')->setText('1.php')->show() . '<br>';
	echo (new Link())->setAttr('href', '/php8/OOP_and_MVC/Classes/Link/2.php')->setText('2.php')->show() . '<br>';
	echo (new Link())->setAttr('href', '/php8/OOP_and_MVC/Classes/Link/3.php')->setText('3.php')->show() . '<br>';
	echo (new Link())->setAttr('href', '/php8/OOP_and_MVC/Classes/Link/4.php')->setText('4.php')->show() . '<br>';
	echo (new Link())->setAttr('href', '/php8/OOP_and_MVC/Classes/Link/5.php')->setText('5.php')->show() . '<br>';
	echo (new Link())->setAttr('href', '/php8/OOP_and_MVC/Classes/Link/index.php')->setText('На главную')->show() . '<br>';
?>

 </body>
</html>