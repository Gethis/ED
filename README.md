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

Classes
=======

All classes in the [classes](https://github.com/JacquesMarais/ED/tree/master/classes) folder is created by me, Jacques Marais, is released under the Apache v2 License and is open source.

FAQ
===

1. Why is there an file called `words.txt`?  Answer: It is used to check for valid words with `isvalid("word"`

Social Networks
===============

[On Facebook](https://www.facebook.com/EasyDevop)


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/JacquesMarais/ed/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

