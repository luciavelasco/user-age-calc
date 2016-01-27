<?php

/* Pseudo code an MVC structure to
 * query users from a database, calculate their age, and display as a list
 *
 */

?>

spl_autoload_register( 'autoloadClass' );

function autoloadClass($className) {
include $className . ".php";
}


if (isset($_POST['get_age'])) {
    return Controller(new Model);
} else {
echo 'Please select to return the user ages:' .
    '<input type="radio" value="get_age">' .
    '<input type="submit">';
}

