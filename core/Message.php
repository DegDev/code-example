<?php

namespace App\Core;

class Message 
{
    /**
     *  Adding message to application
     *
     * @param  string $type error or success message type
     * @param string  $message message text
     */
    public static function add($type, $message) {

        switch ($type) {

            case 'error':

                $_SESSION['message']['error'][] = $message;
                break;

            case 'success':

                $_SESSION['message']['success'][] = $message;
                break;

            default:
                
                throw new \Exception(
                "First param type must be 'error' or 'success' only, '{$type}' entered"
                );
            break;
        }
    }
    /**
     * Get Array with errors
     *
     * @return array
     */
    public static function get() {

        if (self::hasErrors()) {

            return $_SESSION['message']['error'];
        }

        return $_SESSION['message']['success'];
    }
    /**
     * Check has errors in message array
     *
     * @return bool
     */
    public static function hasErrors() {

        if (empty($_SESSION['message']['error'])) {

            return false;
        }

        return true;
    }
    /**
     *  Check if error array is empty or not
     *
     * @return bool
     */
    public static function isEmpty() {

        if (!empty($_SESSION['message'])) {

            return false;
        }

        return true;
    }
}
