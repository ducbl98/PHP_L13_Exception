<?php

namespace MyException;

use Exception;

class DivideByZero extends Exception
{
    public function __toString()
    {
        return "Can't divide by zero";
    }
}