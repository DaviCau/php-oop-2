<?php

class User {
    public $name;
    public $surname;
    public $mail;
    public $gender;
    public $creditCard;

    function __construct($name, $surname, $mail, $gender) {
        $this->name = $name;
        $this->surname = $surname;
        $this->mail = $mail;
        $this->gender = $gender;
    }

    public function insertCreditCard($owner, $expire, $number) {
        $newCreditCard = [
            "owner" => $owner,
            "expire" => $expire,
            "number" => $number
        ];
        $this->creditCard = $newCreditCard;
    }
}

class PremiumUser extends User {
    public $discount = 20;
}

$user1 = new PremiumUser("Davide", "Cau", "davide.cau@gmail.com", "M");
$user1->insertCreditCard("Davide", "08/22", "123456789012");
var_dump($user1);