<?php

class CustomDateTime {

    public static function Validate($param) {
        if ($param instanceof DateTime) {
            return $param;
        } else if (($timestamp = strtotime($param)) !== false) {
            $datetime = new DateTime('@' . $timestamp);
            return $datetime;
        } else {
            return false;
        }
    }
}

class FutureDateTime extends CustomDateTime {

    public static function Validate($param) {
        $inputDate = parent::Validate($param);
        $currentDatetime = new DateTime();
        return ($inputDate > $currentDatetime) ? $inputDate: false;
    }
}

$testDate = CustomDateTime::Validate("21 Sep 2021 09:23:04 +0000");
print_r($testDate);
echo $testDate->format('Y-m-d H:i:s');
echo "\n";
echo "\n";

$testDate2 = FutureDateTime::Validate("21 Sep 2011 09:23:04 +0000");
print_r($testDate2);
echo $testDate2->format('Y-m-d H:i:s');
echo "\n";
echo "\n";
?>