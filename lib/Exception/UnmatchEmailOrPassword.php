<?php

namespace MyApp\Exception;

class UnmatchEmailOrPassword Extends \Exception {
    protected $message = 'Email/Password do not match!';
}
