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
        echo "Use count() to get length of array. <br>"; 
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

        $functionSyntax = "Function Syntax: <br> function testT('$'bruh, '$'bruh2) { <br>
        echo 'I am '$'bruh and '$'bruh2'; <br>
         }; <br>
        testT('James', 'Jesse'); <br>  
        ";
        

        function testT($bruh, $bruh2) {
        echo "I am $bruh and $bruh2 <br>";
        };

        echo $functionSyntax;
        testT("James", "Jesse");

        //  random items from an array 
        $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
        $rand_keys = array_rand($input, count($input));
        for ($i = 0; $i < count($input); $i++){
        echo $input[$rand_keys[$i]] . "\n";
        }
        
        
    ?>

           
    <form method="GET" style="padding: 20px;">
    <h2>input</h2>
        <input type="text" name="person" id="person">
        <button>Submit</button>
    </form>

    <?php 
        // input validation    
        // removing an item from the array if a value is given.
        var_dump($input = \array_filter($input , static function ($v){
            // $name = $_GET['person'];
            $name = "Morpheus";
            return $v != $name;
        }));

        // array_values($input);
        print_r($input);
        // var_export($input);
    ?>



</body>
</html>