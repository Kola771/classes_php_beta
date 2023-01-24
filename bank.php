<pre>
<?php
    class Bank {
        private string $name;
        private int $account;
        private string $devise;
        private static $nbWidraw = 0;
        private static $nbDeposit = 0;

        public function __construct($nameBank, $accountBank, $deviseBank) {
            $this->name = $nameBank;
            $this->account = $accountBank;
            $this->devise = $deviseBank;
            self::$nbDeposit = 0;
            self::$nbWidraw = 0;
        }

        public function presentBank() {
            return $this->name . ", cette banque que vous avez choisi est la meilleure.";
        }

        public function deposit($depot) {
            self::$nbDeposit++;
             $this->account = $this->account + $depot;
             return "Vous venez d'ajouter : " . $depot . $this->devise;
        }

        public function widraw($widraw) {
            self::$nbWidraw++;
            if ($this->account !==0) {
                $this->account = $this->account - $widraw;
                return "Vous venez de retirer : " . $widraw . $this->devise;
            } 
            return "Impossible de faire le retrait.";
        }

        public function getAccountInfo() {
            return "Votre solde est de : " . $this->account . $this->devise;
        }

        public function getNbWidraw() {
            echo "Vous avez fait " .self::$nbWidraw ." fois un retrait.";
        }

        public function getNbDeposit() {
            echo "Vous avez fait " .self::$nbDeposit ." fois un depot.";
        }
    }

    class User {
        private string $firstname;
        private string $lastname;
        private string $job;
        private Bank $bank;

        public function __construct($fname, $lname, $job, $acc, $n, $l) {
            $this->firstname = $fname;
            $this->lastname = $lname;
            $this->job = $job;
            $this->bank = new Bank($n, $acc, $l);
        }

        public function getBank() {
            return $this->bank;
        }
    }

    $user = new Bank("UBA", 0, "$");
    echo $user->presentBank() . '<br>';
    echo $user->deposit(1000) . '<br>';
    echo $user->deposit(5000) . '<br>';
    echo $user->widraw(5000) . '<br>';
    echo $user->widraw(1000) . '<br>';
    echo $user->widraw(1000) . '<br>';
    echo $user->getAccountInfo() . '<br>';
    echo $user->getNbWidraw() . '<br>';
    echo $user->getNbDeposit() . '<br>';

    echo "<br>======================================== <br>";
    $user1 = new User("Abd", "kola", "hacker",2000, "Boa", "$");
    echo ($user1->getBank()->getAccountInfo()) . '<br>';
    echo ($user1->getBank()->deposit(2000)) . '<br>';
    echo ($user1->getBank()->deposit(2000)) . '<br>';
    echo ($user1->getBank()->widraw(1500)) . '<br>';
    echo ($user1->getBank()->getAccountInfo()) . '<br>';
    echo ($user1->getBank()->getNbDeposit()) . '<br>';
    echo ($user1->getBank()->getNbWidraw()) . '<br>';
    ?>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe_php</title>
</head>
<body>
    
</body>
</html>