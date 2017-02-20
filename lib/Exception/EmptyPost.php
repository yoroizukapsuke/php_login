<?php

namespace MyApp\Exception;

class EmptyPost Extends \Exception {
    protected $message = 'Please enter email/password';
}
