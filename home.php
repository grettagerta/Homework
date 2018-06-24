<?php
echo "<pre>", print_r($_POST);

$firstname = $_POST['firstname'];
function f_name($firstname){
    if ((ctype_alpha($firstname)) && !empty($_POST["firstname"])){
        return $firstname;
    }else {
        echo "firstname can't be empty or must include only Latin letters";
    }
}
echo "<pre>", f_name($firstname);


$lastname = $_POST['lastname'];
function l_name($lastname){
    if ((ctype_alpha($lastname)) && !empty($_POST["lastname"])){
        return $lastname;
    }else {
        echo "lastname can't be empty or must include only Latin letters";
    }
}
echo "<pre>", l_name($lastname);



$email = $_POST["email"];
function email($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return $email;
    } else {
        echo "You have used illegal characters";
    }
}
echo "<pre>", email($email);

$gender = $_POST["gender"];
function gender($gender){
    if(empty($_POST["gender"])){
        echo "gender Is not choosen";
    }else {
        return $gender;
    }
}
echo '<pre>',gender($gender);

$comment = $_POST["comment"];
function comment($comment){
    if (empty($_POST["comment"])){
        echo "comment is not written";
    } else {
        return $comment;
    }
}
echo "<pre>", comment($comment);



?>