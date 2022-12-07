<?php

class Validation
{

    // Check if Valid Emal
    public function email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) && true;
    }

    // Check password minimum length
    public function password($password, $min=5)
    {
        if (strlen($password) < $min) return false;

        return true;
    }
}
