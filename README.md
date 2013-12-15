EasyDevop
=========

EasyDevop is a PHP class to easily do things with PHP.


Examples
========

Check if an user inputted email address is valid:

    include('includes/ed.php');
    $ed = new EasyDevop;
    if($ed->isvalid('email', $_POST['email'])){
        header('Location: login.php');
    } else{
        echo "<h3>Please enter a valid email address</h3>";
    }

Excepted values of `isvalid()`:

    isvalid('email', $_POST['email'])
    isvalid('phoneNumber', $_POST['number'])
    isvalid('url', $_POST['website'])
