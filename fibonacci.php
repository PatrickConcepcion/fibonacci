<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <form action="fibonacci.php" method="POST">
        <input type="number" name="number">
        <button name="submit">Submit</button>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $number = $_POST['number'];
            
            $firstNum = 0;
            $secondNum = 1;

            if($number < 1 || $number > 20) {
                echo 'Only numbers within 1 - 20 is allowed.';

                return;
            }

            for($i = 0; $i < $number; $i++) {
                echo ' '.$firstNum;
                $result = $secondNum + $firstNum;
                $firstNum = $secondNum;
                $secondNum = $result;
            }
        }
    ?>
</body>
</html>