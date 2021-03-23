<?php


if(isset($_POST['submit']))
{
$name=$_POST['product-name'];
$des=$_POST['description'];
$price=$_POST['price'];

//validation

$errors=[];

// validation of name
if(empty($name))
{
$errors[]= "name is required";
}elseif(! is_string($name))
{
    $errors[]="you should enter string name";
}elseif( strlen($name) < 5 or strlen($name) > 255 )
{
$errors[]="name min is 5 and max is 255";
}

//validation of description
if(empty($des))
{
    // $errors=[];
}elseif(! is_string($des))
{
    $errors[]="you should enter string des";
}

//validation of price
if(empty($price))
{
    $errors[]=" price is required";
}elseif(! is_numeric($price))
{
    $errors[]="you should enter product price ";
}elseif($price <= 0)
{
    
    $errors[]= " should enter num > 0";
}


print_r($errors);
}
?>
<br>
<ul>
<li><?php echo "name is $name" ?> </li>
<li><?php echo "description is $des" ?></li>
<li><?php
echo "price after discount"; require_once('function.php'); ?></li>
</ul>
