<?php
// Task 6
// Create a function that converts amount of Bulgarian levs (BGN) into euro (EUR). The exchange rate is
// 1.9558.

// Part 2
// Add a second argument that allows changing of the result currency to one of the following:
// · USD (exchange rate 1.76)
// · GBP (exchange rate 2.03)
// · CHF (exchange rate 1.69)

// Represent the currencies(along with the exchange rates) with a javascript object.
// Make sure that other currencies do not result in errors.

const CURRENCIES = [
    "BGN" => 1.9558,
    "USD" => 1.75,
    "GBP" => 2.03,
    "CHF" => 1.69,
];

function eurToCurrency(int $eur, $currency)
{
    if(array_key_exists(strtoupper($currency), CURRENCIES) === false) {
        return "unsupported currency";
    }

    return $eur * CURRENCIES[strtoupper($currency)];
    
}

print_r(eurToCurrency(2, "usd"));
