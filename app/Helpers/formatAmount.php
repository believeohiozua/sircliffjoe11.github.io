<?php

function formatAmount($amount)
{
    $symbol = config('settings.currency_symbol');
    $format = $symbol.number_format($amount);

    return $format;
}