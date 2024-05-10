<?php  


class Validator 
{
    public static function string($value, $min = 1, $max = 255)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
    
    public static function phone($value, $min = 11, $max = 50)
{
    $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
}
}