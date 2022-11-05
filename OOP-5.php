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
        public function getBlance($userBlance){
            return $this->blance = $userBlance;
        }

        //get account no method....
        public function getAccountNo($userAccount){
            return $this->accountNo = $userAccount;
        }
    }

    //this is my inherit class....
    class User extends Account{
        public $country;
        public $city;
        public $accountType;

        //get account type method....
        public function getAccountType($userAcountType){
            return $this->accountType = $userAcountType;
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
        //this is my coustom memthod to return my all public data as array....
        public function publicInfo($userBlance, $userAccount, $userAcountType){
            return[
                $this->id,
                $this->name,
                $this->email,
                $this->phone,
                $this->getBlance($userBlance),
                $this->getAccountNo($userAccount),
                $this->country,
                $this->city,
                $this->getAccountType($userAcountType),
            ];
        }
    }
    
    //create a instance variable here....
    $habib = new User("#GY5677GF667fH", "Habibor Rahaman", "habibor.rahaman1010@gmail.com", "01768280237", "Bangladesh", "Dhaka");
    $shakil = new User("#GY5677GF667fH", "Shakill Ahmed", "shakil.developer@gmail.com", "01773293834", "Bangladesh", "Dhaka" );

    $data = $shakil->publicInfo(68574, "#YG67GF89GD3TYF11", "Savings account");
    
    for($i = 0; $i < count($data); $i++){
        $element = $data[$i];
        echo("{$element} \n");
    }
?>