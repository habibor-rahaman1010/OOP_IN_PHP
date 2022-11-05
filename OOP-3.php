<?php 
    //access modifire in php....
    class Cars{
        public $name = "BMW Seven Series";
        private $model = "#823725";
        protected $price = "$3 million";
        private $tex;

        //my own method to acces for privet or protected property....
        public function getModel(){
            return $this->model;
        }

        //my own method to acces for privet or protected property....
        public function getPrice(){
            return $this->price;
        }
        
        //my own method to acces for privet or protected property....
        public function getTex(){
            return $this->tex = "$14%";
        } 
    }


    $car1 = new Cars();
    echo($car1->name);
    echo("\n{$car1->getModel()} \n");
    echo("{$car1->getPrice()} \n");
    echo("{$car1->getTex()} \n");
?>