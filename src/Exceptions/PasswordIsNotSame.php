<?php

namespace App\Exceptions;

class PasswordIsNotSame extends \Exception {
    protected $field;
    /**
     * RequiredField constructor.
     * @param string $message
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        $this->message = $message. " és requirit";
        $this->field = $message;
    }

    public function getField(){
        return $this->field;
    }
}