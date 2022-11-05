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


        // this is my dis
        public function __destruct(){
            $data = [
                $this->id,
                $this->name,
                $this->email,
                $this->phone,
                $this->getBlance(87542),
                $this->getAccountNo("#YG67GF89GD3TYF11"),
                $this->country,
                $this->city,
                $this->getAccountType("Savings account"),
            ];

            for($i = 0; $i < count($data); $i++){
                $element = $data[$i];
                echo("{$element} \n");
            }
            echo("\n");
        }
    }
    

    //create a instance variable here....
    $habib = new User("#GY5677GF667fH", "Habibor Rahaman", "habibor.rahaman1010@gmail.com", "01768280237", "Bangladesh", "Dhaka");
    $shakil = new User("#GY5677GF667fH", "Shakill Ahmed", "shakil.developer@gmail.com", "01773293834", "Bangladesh", "Dhaka" );
    $habib = new User("#GY5677GF667fH", "Ayan Ahmed", "habibor.rahaman1010@gmail.com", "01768280237", "Bangladesh", "Dhaka");
    $shakil = new User("#GY5677GF667fH", "Tahmid Rafi", "shakil.developer@gmail.com", "01773293834", "Bangladesh", "Dhaka" );
    $habib = new User("#GY5677GF667fH", "Tamim Sahriar Subeen", "habibor.rahaman1010@gmail.com", "01768280237", "Bangladesh", "Dhaka");
    $shakil = new User("#GY5677GF667fH", "Hasin Hayder", "shakil.developer@gmail.com", "01773293834", "Bangladesh", "Dhaka" );
   

?>