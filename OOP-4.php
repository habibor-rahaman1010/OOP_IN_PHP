<?php
    //inheritance in php program....
    class Account{
        public $id;
        public $name;
        public $email;
        public $phone;
        private $blance;
        protected $accountNo;

        //get blace method....
        public function getBlance(){
            return $this->blance = 45700;
        }

        //get account no method....
        public function getAccountNo(){
            return $this->accountNo = "5099924672";
        }
    }

    //this is my inherit class....
    class User extends Account{
        public $country;
        public $city;
        public $accountType;

        //get account type method....
        public function getAccountType(){
            return $this->accountType = "Savings account";
        }

        //this is my constructor funtion....
       public function __construct($id, $name, $email, $phone, $country, $city){
            $this->id = $id;
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->country = $country;
            $this->city = $city;
        }
    }
    
    //create a instance variable here....
    $habib = new User("#GY5677GF667fH", "Habibor Rahaman", "habibor.rahaman1010@gmail.com", "01768280237", "Bangladesh", "Dhaka");
    echo($habib->getAccountNo());
?>