
<?php

$str = "PHP is Fun to learn";
$count = 1;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == " ") {
        $count++;
    }
}
echo "Number of words:" . $count;

?>