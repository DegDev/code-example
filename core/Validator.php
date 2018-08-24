<?php

namespace App\Core;

use App\Models\User;
use App\Core\Message;

class Validator 
{
    /**
     * All possible validators
     *
     * @var array
     */
    public static $validators = [
        'required',
        'email',
        'unique:users',
    ];
    /**
     * Part of validation, Sanitize input data
     * make all email characters to lower case,
     * remove all non numeric characters from phone number
     *
     */
    private static function sanitizePost() {

        if (!empty($_POST['email'])) {
            $_POST['email'] = strtolower($_POST['email']);
        }

        if (!empty($_POST['phone'])) {
            $_POST['phone'] = preg_replace("/[^0-9-()+]/", '', $_POST['phone']);
        }
    }
    /**
     * Make validation for user parameters: 'required', 'mail'
     *
     * @param array $params
     * 
     * @throws Exception
     */
    public static function make($params) {


        self::sanitizePost();

        // Split parameters, and sub-parameters
        foreach ($params as $name => $value) {

            $validation_criterias = explode('|', $value);

            //Making validation for each parameter and sub-parameter
            foreach ($validation_criterias as $criteria) {

                // If there is Unknown validator, throw exception.
                if (!in_array($criteria, static::$validators)) {
                    throw new \Exception(
                    "{$criteria} does not valid."
                    );
                }
                // Check if not empty
                if ($criteria == 'required') {

                    if (empty($_POST[$name])) {

                        Message::add('error', "{$name} can't be empty");

                        return false;
                    }
                }
                // Check if it's valid e-mail
                if ($criteria == 'email') {
                    //              check if is it e-mail
                    if (!filter_var($_POST[$name], FILTER_VALIDATE_EMAIL)) {

                        Message::add('error', "Please enter valid e-mail");

                        return false;
                    }
                }
                // Check if user record not existed in our table
                if ($criteria == 'unique:users') {

                    $user = new User($_POST['email']);

                    if ($user->find()) {


                        Message::add('error', "The e-mail already exists in our database.<br> No phone overwriting is allowed.");

                        return false;
                    }
                }
            }
        }

        return true;
    }
}
