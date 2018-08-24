<?php

namespace App\Models;

use App\Core\App;
use App\Core\Cipher;

class User 
{
    /**
     * User email
     *
     * @var  string
     */
    private $email;
    /**
     * User phone number
     *
     * @var  string
     */
    private $phone;
    /**
     * User encrypted phone number
     * @var  string
     */
    private $cipher;
    /**
     * Object of Cipher class, for decoding / encoding
     * @var  Cipher
     */

    /**
     * Constructor, can set email and / or phone number
     * @param string $email
     * @param string $phone = null
     */
    public function __construct($email, $phone = null) {

        $this->cipher = new Cipher($this->email);

        $this->email = $email;

        if (isset($phone)) {
            $this->phone = $phone;
        }
    }
    /**
     * Encode email with Salt
     *
     * @return string
     */
    private function encodeEmail() {

        $salt = App::get('config')['salt'];

        return sha1($this->email.$salt);
    }
    /**
     * Encode Phone, using open_ssl, Cipher class wrapper,
     * Use e-mail is a key
     * 
     * @return string
     */
    private function encodePhone() {      

        return $this->cipher
                    ->encrypt($this->phone);
        
    }    
    /**
     * Save encoded user information to database
     *     
     */
    public function save() {

        App::get('database')->insert('users',[

            'email' => $this->encodeEmail(),
            'phone' => $this->encodePhone()
            
        ]);
    }
    /**
     * Find user by encoded email, fetch encoded phone, decode and return it.
     *
     * @return string or null, if nothing found
     */
    public function find() {
        
        $query = App::get('database')->find('users',[

            'email' => $this->encodeEmail()

        ]);
        
        return $this->cipher
                    ->decrypt( $query['phone'] );
    }
    /**
     *
     *  Send e-mail
     *
     *  @return bool
     */
    public function sendEmail() {
        
        $headers = 'From: <Phone number retrive service> no-reply@at.all'."\r\n".
            'Reply-To: no-reply@at.all'."\r\n".
            'X-Mailer: Typical Phone retriver: Retrive phone';

        return $result = mail($this->email, 'Your phone','Your phone is: '.$this->phone, $headers);
    }
}
