<?php
function createPassword($pwLength)
{

    $password = '';

    $letters = 'abcdefghilmnopqrstuvwxyz';

    $numbers = '0123456789';

    $specials = '!£$%&/()=?^+*@#\|';

    // create a string in which all characters are present

    $allCharacters = $letters . strtoupper($letters) . $numbers . $specials;

}

?>