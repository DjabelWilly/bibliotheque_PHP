<?php

namespace Poo\Project\Kernel;

abstract class Validate
{
    public static function valideName(string $name, string $error_message, string $empty_message)
    {
        $pattern = "/^[\p{L}\p{M} '-]*$/mu";

        if ($name === '') {
            return $empty_message;
        }

        if (!preg_match($pattern, $name)) {
            return $error_message;
        }

        return '';
    }

    public static function validateEmail(string $email, string $error_message, string $empty_message): string
    {
        if ($email === '') {
            return  $empty_message;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return  $error_message;
        }
        return '';
    }

    public static function validatePassword(string $password, string $password_confirmation, int $password_length = 8, bool $uppercase = true, bool $digit = true): string
    {
        $message = '';
        if ($password === '') {
            return  "Le mot de passe est vide";
        }
        if (strlen($password) < $password_length) {
            $message .= "Le mot de passe doit au moins contenir $password_length caractères<br>";
        }
        if ($uppercase && !preg_match('/[A-Z]/', $password)) {
            $message .= "Le mot de passe doit au moins contenir une lettre majuscule<br>";
        }
        if ($digit && !preg_match("/[0-9]/", $password)) {
            $message .= "Le mot de passe doit au moins contenir un chiffre<br>";
        }
        if ($password !== $password_confirmation) {
            $message .= "Les mots de passes ne correspondent pas<br>";
        }
        return $message;
    }

    public static function validateNumber(int $number, string $error_message, string $empty_message)
    {
        $pattern = "/[0-9]/";

        if ($number === '') {
            return $empty_message;
        }

        if (!preg_match($pattern, $number)) {
            return $error_message;
        }

        return '';
    }
}
