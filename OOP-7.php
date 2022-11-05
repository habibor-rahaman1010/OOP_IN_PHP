<?php
    //static method and static properties in php....
    class Students{
        public static  $name = "Habibor Rahaman";
        public static $blance = 176578;
        public static $cost = 22400;
        public static $nitBlance;


        //this is my method which return static proprerty value retuern out of the class....
        public function getBlance(){
            return self::$blance;
        }

        //This is my static method which can access whit out create a objet....
        static public function getCost(){
            return self::$cost;
        }

        //calculate nit blance in methid....
        public static function getNitBlance(){
            return self::$nitBlance = self::$blance - self::$cost;
        }

        //return satatic method in by in this method....
        public function remainBlance(){
            return self::getNitBlance();
        }
    }

    echo(Students::$name);
    echo("\n");

    $data = Students::$name;
    echo "{$data} \n";

    $student = new Students();
    echo($student->getBlance());
    echo "\n";

    echo(Students::getCost());
    echo "\n";

    echo($student->remainBlance());
    echo("\n");
   
?>