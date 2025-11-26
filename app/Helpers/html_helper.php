<?php
/**
 * Format telephone number form E.162 format to national format for viewing.
 * Return FALSE if the number is invalid
 * @param $number
 * @return string|bool
 */
function format_phone_number($number): string|bool
{
    $length = strlen($number);
    $pieces = [];
    if (str_starts_with($number, '+66')) {
        // Thai number
        $pieces[] = '+66 (0)';
        if (11 == $length) {
            // HOME +6629299876 > +66 (0) 2 929 9876
            $pieces[] = substr($number, 3, 1);
            $pieces[] = substr($number, 4, 3);
            $pieces[] = substr($number, 7, 4);
            return implode(' ', $pieces);
        } else if (12 == $length) {
            // CELL +66897828331 > +66 (0) 8 9782 8331
            $pieces[] = substr($number, 3, 1);
            $pieces[] = substr($number, 4, 4);
            $pieces[] = substr($number, 8, 4);
            return implode(' ', $pieces);
        }
        return FALSE;
    }
    return $number;
}