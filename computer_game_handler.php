<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Rock Paper Scissors</h1>
    <hr>
    <?php
        $options = array(
            'Rock',
            'Paper',
            'Scissors'
        );

        $player1 = $_GET["p1c"];
        $Bob = $options[
            array_rand($options)
        ];

        echo "<h1>Player one picked " . $player1 . ".</h1>";
        echo "<h1>Bob picked " . $Bob . ".</h1>";

        $won = null;

        switch ($player1) {
            case 'Rock':
                switch ($Bob) {
                    case 'Rock':
                        $won = 3;
                        break;
                    case 'Paper': 
                        $won = 2;
                        break;
                    case 'Scissors':
                        $won = 1;
                        break;
                    default: 
                        echo('<h1>error 404</h1>');
                        break;
                }
                break;
            case 'Paper': 
                switch ($Bob) {
                    case 'Rock':
                        $won = 1;
                        break;
                    case 'Paper': 
                        $won = 3;
                        break;
                    case 'Scissors':
                        $won = 2;
                        break;
                    default: 
                        echo('<h1>error 404</h1>');
                        break;
                }
                break;
            case 'Scissors':
                switch ($Bob) {
                    case 'Rock':
                        $won = 2;
                        break;
                    case 'Paper': 
                        $won = 1;
                        break;
                    case 'Scissors':
                        $won = 3;
                        break;
                    default: 
                        echo('<h1>error 404</h1>');
                        break;
                }
                break;
            default: 
                echo('<h1>error 404</h1>');
                break;
        }

        switch ($won) {
            case 1:
                echo ("<h1>Player 1 won !</h1>");
                break;
            case 2:
                echo('<h1>Bob won !</h1>');
                break;
            case 3:
                echo('<h1>Draw!</h1>');
                break;
            
            default:
                echo('<h1>error 404</h1>');
                break;
        }
    ?>
</body>
</html>