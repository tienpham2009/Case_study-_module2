<?php
namespace App;

class User
{
    public mixed $name;
    public mixed $email;
    public mixed $phone;
    public mixed $password;
    public mixed $image;
    public mixed $date_of_birth;
    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->password = $data['password'];
    }

    /**
     * @param mixed $image
     */
    public function setImage(mixed $image): void
    {
        $this->image = $image;
    }

    /**
     * @param mixed $date_of_birth
     */
    public function setDateOfBirth(mixed $date_of_birth): void
    {
        $this->date_of_birth = $date_of_birth;
    }

}