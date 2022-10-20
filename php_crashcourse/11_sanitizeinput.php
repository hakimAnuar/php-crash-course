<?php

//NOT WORKING....
// Forbidden
// You don't have permission to access this resource.
// Apache/2.4.54 (Win64) OpenSSL/1.1.1p PHP/8.1.10 Server at localhost Port 8080



/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if(isset($_POST['submit'])){
echo $_POST['name'];
echo $_POST['age'];
}
?>


<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Jo&age=30">Click</a>

<form action="<<?php echo $_SERVER['PHP_SELF']; ?>"
method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">

</form>