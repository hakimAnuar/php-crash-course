<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/
session_start();
if (isset($_POST['submit'])) {
  
    // filter_input() - Sanitize inputs
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = $_POST['password'];

    if($username == 'john' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location: /php_crashcourse/extras/dashboard.php');
    }else{
        echo 'incorrect login';
    }

      } 
      ?>
  
  <!-- Pass data through a form -->
  <!-- php_self can be used for xss -->
  <form action="<?php echo htmlspecialchars($_SERVER
  ['PHP_SELF']); ?>" method="POST">
  <div>
    <label for="username">Username: </label>
    <input type="text" name="username">
  </div>
  
  <div>
  <label for="password">Password: </label>
    <input type="password" name="password">
  </div>
  <br>
    <input type="submit" name="submit" value="Submit">
  </form>