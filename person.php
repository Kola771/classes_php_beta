
<?php
    class Person {
        protected string $name;
        protected int $age;

        public function __construct($namePerson, $agePerson) {
            $this->name = $namePerson;
            $this->age = $agePerson;
        }

        public function getName() {
            return "Je m'appelle " . $this->name ;
        }

        public function getAge() {
            return "J'ai " . $this->age . "ans.";
        }
    }

    class Basketteur extends Person {
        private int $experience;
        private int $paniers;

        public function __construct($n, $a, $exp, $h) {
            parent:: __construct($n, $a);
            $this->experience = $exp;
            $this->paniers = $h;
        }

        public function yearsOfExperience() {
            return "J'ai " . $this->experience . "ans d'expérience.";
        }

        public function homeRuns() {
            return "Et durant toute ma carrière j'ai marqué " . $this->paniers;
        }
    }
    $person = new Person("Koladé ABOUDOU", 00);
    // echo $person->getName() . "<br>";
    // echo $person->getAge() . "<br>";
    $basketteur = new Basketteur("Tony Parker", 42, 8, 52);
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe_php</title>
    <style>
        body {
        background-color: rgb(27, 26, 26);
        color: white;
        margin: 0;
        }
        p {
            text-align: center;
            padding: .5em;
        }
        p:nth-of-type(1),
        p:nth-of-type(4) {
            background-color: rgb(223, 19, 19);
        }
        p:nth-of-type(2),
        p:nth-of-type(3) {
            background-color: rgb(17, 156, 17);
        }
    </style>
</head>
<body>
    <p>
    <?= $basketteur->getName() . "<br>" ?>
    </p>
    <p>
    <?= $basketteur->getAge() . "<br>" ?>
    </p>
    <p>
    <?= $basketteur->yearsOfExperience() . "<br>" ?>
    </p>
    <p>
    <?= $basketteur->homeRuns() . "<br>" ?>
    </p>
</body>
</html>