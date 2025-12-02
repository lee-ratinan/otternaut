<?php
/**
 * Format telephone number form E.164 format to national format for viewing.
 * Return FALSE if the number is invalid
 * Current support:
 * - Thailand +66
 * - Singapore +65
 * @param string $phone_number The phone number in E.164 format
 * @return string|bool
 */
function format_phone_number(string $phone_number): string|bool
{
    $length = strlen($phone_number);
    $pieces = [];
    if (str_starts_with($phone_number, '+66')) {
        // Thai number
        if (11 == $length) {
            // HOME +6629299876 > +66 2 929 9876
            $pieces[] = '+66';
            $pieces[] = substr($phone_number, 3, 1);
            $pieces[] = substr($phone_number, 4, 3);
            $pieces[] = substr($phone_number, 7, 4);
            return implode(' ', $pieces);
        } else if (12 == $length) {
            // CELL +66897828331 > +66 89 782 8331
            $pieces[] = '+66';
            $pieces[] = substr($phone_number, 3, 2);
            $pieces[] = substr($phone_number, 4, 3);
            $pieces[] = substr($phone_number, 8, 4);
            return implode(' ', $pieces);
        }
        return FALSE;
    }
    return $phone_number;
}

/**
 * Format the price by currency.
 * Return the default format with the same currency code if not supported
 * Current support:
 * - THB
 * - SGD
 * - IDR
 * - MYR
 * @param float $price The price to be formatted
 * @param string $currency The currency to be formatted in, country code can be used here instead
 * @param int $decimal_override (optional) Use this decimal point if the value is not negative
 * @return string
 */
function format_price(float $price, string $currency, int $decimal_override = -1): string
{
    $negative = (0 > $price ? '-' : '');
    $price    = abs($price);
    $currency = strtoupper($currency);
    if (2 == strlen($currency)) {
        $currencies = [
            'US' => 'USD',
            'TH' => 'THB',
            'SG' => 'SGD',
            'ID' => 'IDR',
            'MY' => 'MYR',
            'JP' => 'JPY',
        ];
        $currency = $currencies[$currency];
    }
    $decimals = [
        'USD' => 2,
        'THB' => 2,
        'SGD' => 2,
        'IDR' => 0,
        'MYR' => 2,
        'JPY' => 0
    ];
    $use_decimal = $decimals[$currency];
    if (0 <= $decimal_override) {
        $use_decimal = $decimal_override;
    }
    if ('THB' == $currency) {
        return $negative . '฿' . number_format($price, $use_decimal);
    } else if ('SGD' == $currency) {
        return $negative . 'S$' . number_format($price, $use_decimal);
    } else if ('IDR' == $currency) {
        return $negative . 'Rp ' . number_format($price, $use_decimal, ',', '.');
    } else if ('MYR' == $currency) {
        return $negative . 'RM' . number_format($price, $use_decimal);
    } else if ('JPY' == $currency) {
        return $negative . number_format($price, $use_decimal) . '円';
    }
    return $negative . $currency . ' ' . number_format($price, 2);
}

/**
 * Get currency symbol
 * @param string $country Country code
 * @return string Symbol of the currency
 */
function get_currency_symbol (string $country): string
{
    if ('th' == $country) {
        return '฿';
    }
    return '';
}