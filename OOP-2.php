<?php

    class Person{
        public $name;
        public $profession;
        public $email;
        public $address;
        public $phone;

        function __construct($name, $profession, $email, $address, $phone)
        {
            $this->name = $name;
            $this->profession = $profession;
            $this->email = $email;
            $this->address = $address;
            $this->phone = $phone;
        }

        public function __destruct()
        {
            $data = [
                $this->name,
                $this->profession,
                $this->email,
                $this->address,
                $this->phone,
            ];

            for($i = 0; $i < count($data); $i++){
                $element = $data[$i];
                echo("{$element} \n");
            }
            echo("\n");
        }

    }

    $habib = new Person("Habibor Rahaman", "Full-Stack Developer", "habior.rahaman1010@gmail.com", "Dhaka", "01768280237");
    $shakil = new Person("Shakill Ahmed", "PHP Devloper", "shakil.developer@gmail.com", "Dhaka", "01773293834");
    $Aayan = new Person("Aayan Ahamed", "Core PHP Developer", "aayan.ahmed0101@gmail.com", "Dhaka", "01789023834");
    $tahmid = new Person("Tahmid Rafi", "System Developer", "tahmid.rafi23@gmail.com", "Dhaka", "01732832890");


?>