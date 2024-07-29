<?php

// Assume $country_code and $price values are set
// Simplify by joining / grouping the same country code
// Removing currency_symbol as its not needed

// Define currencies data
$currencies = [
    'uk' => ['code' => 'GBP', 'prefix' => '£', 'suffix' => ''],
    'us' => ['code' => 'USD', 'prefix' => '$', 'suffix' => ''],
    'ae' => ['code' => 'AED', 'prefix' => '', 'suffix' => 'AED']
];

// Get currency data based on country code
$currency = $currencies[$country_code] ?? ['code' => '', 'prefix' => '', 'suffix' => ''];

// Output the formatted price
echo $currency['prefix'] . $price . $currency['suffix'];

?>
