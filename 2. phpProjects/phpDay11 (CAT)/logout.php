<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 2/15/19
 * Time: 9:56 AM
 */
// 1.using a tutorial provided as a guide, create a user verification system.
// 2.on the home page, allow CRUD operation for data required to maintain a store i.e Item name,
// Quantity and selling price.
// 3.Using a tutorial provided, create an interactive gallery.
// N/B Style up your system using bootstrap.
// CRUD - Create, Read, Update, Delete
session_start();
session_destroy();
unset($_SESSION{'username'});
echo "loggedout";
header("location: logIn.php")
?>