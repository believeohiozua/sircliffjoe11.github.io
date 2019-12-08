<?php

function formatMobile($mobile)
{
    $stripped = ltrim($mobile, '0');
    $format = '234'.$stripped;

    return $format;
}