<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Request;
use App\Core\Validator;
use App\Core\Message;
use App\Models\User;

class UsersController 
{
    /**
     * POST add-phone form handler
     * 
     * Make inputs validation(phone, email),  Store a new user in the database
     * if validation passed. 
     */
    public function store() {

        $validationIsPassed = Validator::make([
                'phone' => 'required',
                'email' => 'required|email|unique:users',
        ]);

        if ($validationIsPassed) {

            $user = new User($_POST['email'], $_POST['phone']);
            
            $user->save();

            Message::add('success', 'Your phone successfully added.');
        }


        return redirect('');
    }
    /**
     * POST retrive-phone form handler
     * 
     * Make input validation(email), if it's found in database
     * send phone number on e-mail,
     * 
     */
    public function retrive() {

        $validationIsPassed = Validator::make([
                'email' => 'required|email',
        ]);

        if (!$validationIsPassed) {

            return redirect('retrive');
        }

        $user = new User($_POST['email']);

        if (!$user->find()) {

            Message::add('error', "The e-mail doesn't exists in our database.");

            return redirect('retrive');
        }

        if ($user->sendEmail()) {

            Message::add('success',
                'Your phone number has been sent to your email.');

            return redirect('retrive');
        }


        Message::add('error', "Error sending e-mail, try again later...");

            return redirect('retrive');
    }
}
