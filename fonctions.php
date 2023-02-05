<?php

function generateToken($lenght)
{
    $alphaNum = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    return substr(str_shuffle(str_repeat($alphaNum,$lenght)),0,$lenght);
}