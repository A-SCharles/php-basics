<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php basics</title>
</head>
<body>
        
    <?php

    // php data types
    echo "<h2><u> php Data Types </u></h2><br>";
        $string = "String: Hello World";
        $integer =  5;
        $decimal =  5.2;
        $array = array("array", 5);
        $arraySyntax = "Array Syntax: array('string', 5)";
        
        echo $string ,"<br>";
        echo "Integer: ";
        var_dump($integer); 
        echo "<br>";
        echo "Decimal: ";
        var_dump($decimal); 
        echo "<br>";
        echo $arraySyntax ,"<br>"; 
        var_dump($array);
    
    // php var_dump
    echo '<p>var_dump() is used to show structured information about one or more expressions that includes its type and value. Used for objects, arrays</p>';

    // php Object
    class Game {
        // declaring keys
        public $console;
        public $name;

        // function that passes values to keys
        public function __construct($console, $name) {
            $this->console  = $console ;
            $this->name = $name;
        }

        // function to return object values
        public function message() {
            return "This new game called $this->name is for $this->console. <br>";
        }
    }

    $newGame = new Game("PS4", "God of War");
    echo $newGame -> message();
    var_dump($newGame);
    echo "<br>";

    // php function 
    echo "<h2><u>php Functions </u></h2><br>";

        $functionSyntax = "Function Syntax: function testT('$'bruh, '$'bruh2) {
        echo 'I am '$'bruh and '$'bruh2';
         };
        testT('James', 'Jesse');  
        <br>";
        

        function testT($bruh, $bruh2) {
        echo "I am $bruh and $bruh2 <br>";
        };

        echo $functionSyntax;
        testT("James", "Jesse");

        //  random items from an array 
        $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
        $rand_keys = array_rand($input, 2);
        echo $input[$rand_keys[0]] . "\n";
        echo $input[$rand_keys[1]] . "\n";
    ?>
</body>
</html>