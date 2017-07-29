<?php

function encode($text)
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE);
}

function decode($text)
{
    return htmlspecialchars_decode($text, ENT_QUOTES);
}
