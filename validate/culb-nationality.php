<?php
function validate($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
function validatecarater($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    if (preg_match("/^[a-zA-Z-' ]*$/",$input)) {
        return $input;
    } else {
        return "false";
    }
}
function validateurl($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    if (filter_var($input, FILTER_VALIDATE_URL)) {
        return $input;
    } else {
        return "false";
    }
}


?>
