<?php

namespace MyApp\Exception;

class DuplicateEmail Extends \Exception {
    protected $message = 'Duplicate Email!';
}
