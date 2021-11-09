<?php

// Define functions to validate pizza data

function validName($name)
{
    return !empty(trim($name));
}

/* addresses must not be empty and must be 10 or more characters */
function validAddress($address)
{
    return !empty(trim($address)) && strlen($address) >= 10;
}

function validMethod($method)
{
    /*if ($method != "pickup" && $method != "delivery") {
        return false;
    } else {
        return true;
    }*/
    $options = array("pickup", "delivery");
    return in_array($method, $options);
    //return $method == "pickup" || $method == "delivery";
}

function validToppings($selectedToppings)
{
    $validToppings = array("olives", "mushrooms", "pepperoni", "sausage");
    foreach ($selectedToppings as $topping) {
        if (!in_array($topping, $validToppings)) {
            return false;
        }
    }
    return true;
}

function validSize($size)
{
    $validSizes = array("small", "medium", "large");
    return in_array($size, $validSizes);
}