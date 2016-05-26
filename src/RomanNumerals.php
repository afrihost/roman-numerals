<?php
namespace RomanNumerals;

class RomanNumerals
{
    /**
     * @var array
     */
    private $numerals = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );

    /**
     * @param integer $number
     * @return string
     */
    public function convert($number)
    {
        $solution = '';

        foreach ($this->numerals as $numeral => $value) {
            while ($number >= $value) {
                $solution .= $numeral;
                $number -= $value;
            }
        }

        return $solution;
    }
}