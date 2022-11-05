<?php

    class Person{
        public $name;
        public $email;
        public $address;
        public $phone;

        function __construct($name, $email, $address, $phone)
        {
            $this->name = $name;
            $this->email = $email;
            $this->address = $address;
            $this->phone = $phone;
        }

        public function show()
        {
            return [
                $this->name,
                $this->email,
                $this->address,
                $this->phone,
            ]; 
        }

    }

    $habib = new Person("Habibor Rahaman", "habior.rahaman1010@gmail.com", "Dhaka", "01768280237");
    $shakil = new Person("Shakill Ahmed", "shakil.developer@gmail.com", "Dhaka", "01773293834");
    $Aayan = new Person("Aayan Ahamed", "aayan.ahmed0101@gmail.com", "Dhaka", "01789023834");
    $tahmid = new Person("Tahmid Rafi", "tahmid.rafi23@gmail.com", "Dhaka", "01732832890");

    $data = $Aayan->show();
    
    for($i = 0; $i < count($data); $i++){
        $element = $data[$i];
        echo("{$element} \n");
    }


?>