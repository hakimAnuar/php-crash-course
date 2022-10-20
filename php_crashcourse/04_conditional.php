<?php
/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/


$age = 14;

// if ($age >= 18) {
//     echo "You're old enough to vote";
// }else{
//     echo "You can't vote";
// }

$t = date("h");
// echo $t;

// if ($t < 12) {
//     echo 'Good morning';
// }elseif($t < 17){
//     echo 'Good afternoon';
// }else{
//     echo 'Good evening';
// }


$posts = ['First post'];
// if (!empty($posts)) {
//     echo $posts[0];
// }else{
//     echo 'No post';
// }

// echo !empty($posts) ? $posts[0] : 'No posts';
// $first_post = !empty($posts) ? $posts[0] : 'No post';
// $first_post = !empty($posts) ? $posts[0] : null;

// $first_post = $posts[0] ?? null;

// echo $first_post;

$favcolour = 'onyx';

switch ($favcolour) {
    case 'red':
        echo 'Your favorite colour is red.';
        break;
    case 'blue':
        echo 'Your favorite colour is blue.';
        break;
    case 'green':
        echo 'Your favorite colour is green.';
        break;
    
    default:
        echo 'RGB aint your fav colour';
        break;
}