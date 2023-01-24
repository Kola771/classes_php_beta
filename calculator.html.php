<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calculator.css">
    <title>Calculatrice</title>
</head>
<body>
     <form action="calculator.html.php" method="post">
        <h2>My calculator</h2>
        <input type="number" name="number1" id="#" placeholder="Number 1">
        <select name="operator" id="#">
            <option disabled = "disabled">Veuillez choisir l'opérateur</option>
            <option value="Addition">Addition</option>
            <option value="Soustraction">Soustraction</option>
            <option value="Multiplication">Multiplication</option>
            <option value="Division">Division</option>
        </select>
        <input type="number" name="number2" id="#" placeholder="Number 2">
        <button type="submit">Calculer</button>
     </form>
     <p>
        <?php
        require_once("calculer.php");
        ?>
     </p>
     
</body>
</html>