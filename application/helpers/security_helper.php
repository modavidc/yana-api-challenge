<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('hash_password')) {
    function hash_password(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}

if (!function_exists('compare_password')) {
    function compare_password(string $password, $passwordHashed): string
    {
        return password_verify($password, $passwordHashed);
    }
}
