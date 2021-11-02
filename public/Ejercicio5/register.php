<?php
require_once ('../../kernel.php');
require_once ('../../bootstrap.php');
use APP\exceptions\CheckFieldException;
use APP\exceptions\PasswordIsNotSame;

$errors = [];
if (isPost() && cfsr()){
    try {
        $name = isRequired('user');
        $email = isRequired('email');
        $password = isRequired('password');
        $password2 = isRequired('password2');
        if ($password != $password2) {
            throw new PasswordIsNotSame($password2);
        }
    } catch ( CheckFieldException $e) {
        $errors[$e->getField()] = $e->getMessage();
    }

    if (!count($errors)){
        $password = password_hash($password,PASSWORD_DEFAULT );
        $query->insert('users1',compact('name','email','password'));
        header('Location: /Ejercicio5/login.php');
    }
}

require_once('register.view.php');