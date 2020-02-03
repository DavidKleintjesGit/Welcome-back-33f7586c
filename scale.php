<?php

$Userinput = Readline();

$input = explode(' ', $Userinput );

if ($input[0] == $input[1])
{
    echo 'In balans';
} else {
    echo 'Niet in balans';
}
