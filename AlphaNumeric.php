<?php

class AlphaNumeric {

    public string $input;

    public function __construct(string $x) {
        $this->input = $x;
    }

    public function NumbersAsArray() {
        preg_match_all('!\d+!', $this->input, $matches);
        return $matches[0];
    }

    public function SumNumbers() {
        return array_sum($this->NumbersAsArray());
    }
}

$a = new AlphaNumeric('asdcasdc23asdcasdc45asdca2');

print_r($a->NumbersAsArray()); 

echo "\n";

print_r($a->SumNumbers());

echo "\n";

?>