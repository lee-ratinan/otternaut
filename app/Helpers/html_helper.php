<?php

use libphonenumber\PhoneNumberUtil;
use libphonenumber\PhoneNumberFormat;
use libphonenumber\NumberParseException;

/**
 * Formats an E.164 number to its national standard using libphonenumber.
 * Automatically handles complex area codes for JP, MY, TH, SG, TW.
 */
function format_phone_number(string $e164Number): string
{
    $phoneUtil = PhoneNumberUtil::getInstance();

    try {
        // libphonenumber automatically detects the country from the E.164 '+' prefix
        $numberProto = $phoneUtil->parse($e164Number, null);
        if ($phoneUtil->isValidNumber($numberProto)) {
            // NATIONAL format converts +813XXXX -> 03-XXXX-XXXX (handles all 400+ JP codes)
            $countryCode = strtolower($phoneUtil->getRegionCodeForNumber($numberProto));
            return '<span class="fi fi-' . $countryCode . '"></span> ' . $phoneUtil->format($numberProto, PhoneNumberFormat::NATIONAL);
        }
    } catch (NumberParseException $e) {
        // If parsing fails, log it or handle quietly
        log_message('debug', 'Phone parsing failed: ' . $e->getMessage());
    }
    // Fallback to original input if invalid or parsing fails
    return $e164Number;
}

/**
 * Format the price by currency.
 * Return the default format with the same currency code if not supported
 * Current support:
 * - IDR
 * - JPY
 * - MYR
 * - SGD
 * - THB
 * - TWD
 * - USD
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
            'ID' => 'IDR',
            'JP' => 'JPY',
            'MY' => 'MYR',
            'SG' => 'SGD',
            'TH' => 'THB',
            'TW' => 'TWD',
            'US' => 'USD',
        ];
        $currency = $currencies[$currency];
    }
    $decimals = [
        'IDR' => 0,
        'JPY' => 0,
        'MYR' => 2,
        'SGD' => 2,
        'THB' => 2,
        'TWD' => 2,
        'USD' => 2,
    ];
    $use_decimal = $decimals[$currency] ?? 2;
    if (0 <= $decimal_override) {
        $use_decimal = $decimal_override;
    }
    if ('IDR' == $currency) {
        return $negative . 'Rp ' . number_format($price, $use_decimal, ',', '.');
    } else if ('JPY' == $currency) {
        return $negative . number_format($price, $use_decimal) . '円';
    } else if ('MYR' == $currency) {
        return $negative . 'RM' . number_format($price, $use_decimal);
    } else if ('SGD' == $currency) {
        return $negative . 'S$' . number_format($price, $use_decimal);
    } else if ('THB' == $currency) {
        return $negative . '฿' . number_format($price, $use_decimal);
    } else if ('TWD' == $currency) {
        return $negative . 'NT$' . number_format($price, $use_decimal);
    } else if ('USD' == $currency) {
        return $negative . '$' . number_format($price, $use_decimal);
    }
    return $negative . $currency . ' ' . number_format($price, 2);
}

/**
 * Get currency symbol
 * @param string $code Country code or currency code
 * @return string Symbol of the currency
 */
function get_currency_symbol (string $code): string
{
    $symbols = [
        'IDR' => 'Rp',
        'ID'  => 'Rp',
        'JPY' => '円',
        'JP'  => '円',
        'MYR' => 'RM',
        'MY'  => 'RM',
        'SGD' => 'S$',
        'SG'  => 'S$',
        'THB' => '฿',
        'TH'  => '฿',
        'TWD' => 'NT$',
        'TW'  => 'NT$',
        'USD' => '$',
        'US'  => '$',
    ];
    $code = strtoupper($code);
    return $symbols[$code] ?? '$';
}

/**
 * If the link is empty or '#', then return true
 * @param string $link
 * @return bool
 */
function check_link_empty(string $link): bool
{
    return empty($link) || '#' == $link;
}

/**
 * Get social media links
 * @return array Array of social media links
 */
function get_social_list(): array
{
    $social = [];
    $list   = [
        'facebook', 'instagram', 'line', 'whatsapp', 'twitter_x', 'youtube'
    ];
    foreach ($list as $item) {
        $key = 'SOCIAL_' . strtoupper($item);
        if (!check_link_empty(getenv($key))) {
            if ('twitter_x' == $item) { $item = 'twitter-x'; }
            $social[$item] = getenv($key);
        }
    }
    return $social;
}
/**
 * Get locale name
 * @param string $locale Locale code
 * @return string Locale name
 */
function get_locale_name(string $locale): string
{
    $locales = [
        'en-jp' => '<span class="fi fi-jp"></span>&nbsp;Japan (English)',
        'ja-jp' => '<span class="fi fi-jp"></span>&nbsp;日本 (日本語)',
        'en-my' => '<span class="fi fi-my"></span>&nbsp;Malaysia (English)',
        'en-sg' => '<span class="fi fi-sg"></span>&nbsp;Singapore (English)',
        'en-th' => '<span class="fi fi-th"></span>&nbsp;Thailand (English)',
        'th-th' => '<span class="fi fi-th"></span>&nbsp;ประเทศทไย (ภาษาไทย)',
        'en-tw' => '<span class="fi fi-tw"></span>&nbsp;Taiwan (English)',
        'zh-tw' => '<span class="fi fi-tw"></span>&nbsp;台灣 (國語)',
    ];
    return $locales[$locale] ?? $locale;
}