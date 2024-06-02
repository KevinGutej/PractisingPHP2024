<?php
$a = "Hello World";

function appendString(string $input) {
    $input = $input . "!";
    return $input;
}

echo appendString($a) . PHP_EOL;
echo $a;

$numbers = [];
for($i = 0; $i < 10; $i++) {
    $randomNumber = rand();
    if($randomNumber % 2 == 0) {
        $numbers[] = $randomNumber;
    }

}
print_r($numbers);


?>