<?php
//palindrome program
$input='Nayan';
$ninput=strtolower($input);
$rev=strrev($ninput);
if ($ninput==$rev) {
    echo "$input is Palindrome";
}
else {
    echo "$input is not Palindrome";
}
