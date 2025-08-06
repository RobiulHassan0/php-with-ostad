<?php
// Access Modifiers in PHP OOP
// step 1: Public

class User{
    public $name = "Robiul Hassan";

    public function getName() {
        echo $this->name;
    }
}
$user = new user();
echo $user->name . "\n";
$user->getName();

echo "\n";

// step 2: Private
class userBankAccount{
    public $name = "Robin";
    private $balance = 1000;

    public function showBalance(){
        
        return "user name: " . $this->name . " and user balance is: " . $this->balance . "\n";
    }
}
$bankUser = new userBankAccount();
echo "bank user: ". $bankUser->name . "\n"; // output: bank user: Robin
// echo "bank balance: ". $bankUser->balance . "\n"; // output: error
echo "user bank info : ". $bankUser->showBalance() . "\n"; 


echo "\n";

// step 3: access private data with getter and setter

class Name{
    private $name = 'ibn fulan';

    public function setName($n){
        $this->name = $n;
    }

    public function getName(){
        return $this->name;
    }
}
$name = new Name();
$name->setName('robiul hasan');
echo "Name: {$name->getName()} \n";
// this way, the private property remain safe, but we can access it with controls.