<?php
------------------------------------------------------------
============================================================
========= Course PHP From Elzero Web School Channel=========
============================================================
------------------------------------------------------------
/*
--------------------------------
---------- Data Types ----------
--------------------------------

    echo gettype(TRUE);
    echo '<br>';
    echo gettype(False);
    echo '<br>';
    echo gettype(100);
    echo '<br>';
    echo gettype(-300);
    echo '<br>';
    echo gettype('Masare');
    echo '<br>';
    echo gettype(70.30);
    echo '<br>';
    echo gettype(array("Egypt", "kongras emarakan"));
    echo '<br>';
    echo 1 + "2";
    echo '<br>';
    echo gettype(1 + "2");
    echo '<br>';
    echo TRUE;
    echo '<br>';
    echo gettype(TRUE);
    
    echo '<br>';
    echo TRUE + TRUE;
    echo '<br>';
    echo gettype(TRUE + TRUE);
    echo '<br>';
    echo 10 + 25.88;
    echo '<br>';
    echo gettype(10 +25.88);
    echo '<br>';
    echo 10 + (int) "20 lessons";
    echo '<br>';
    echo 10.5 + 10.5; // 21 double
    echo '<br>';
    echo gettype(10.5 + 10.5);
    echo '<br>';
    echo (int) 10.9 + (int) 10.8; // 20 integer
    echo '<br>';
    echo gettype((int) 10.8 + (int) 10.9); // integer
    echo '<br>';
    var_dump((bool) "");
    echo '<br>';
    var_dump((bool) []);
    echo '<br>';
    var_dump((bool) array());
    echo '<br>';
    var_dump((bool) 0);
    echo '<br>';
    var_dump((bool) 1);
    echo '<br>';
    var_dump((bool) "Ahmed");
    echo '<br>';
    var_dump((bool) array(1));
    echo '<br>';
    var_dump((bool) [5]);
    echo '<br>';

---------------------------------------
---------- String & Escaping ----------
---------------------------------------

    echo "hello'PHP'";
    echo '<br>';
    echo 'Hello "PHP"';
    echo '<br>';
    echo 'Hello \'PHP\' ';
    echo '<br>';
    echo nl2br("Hello PHP
    on multile 
    lins");
    echo '<br>';

--------------------------------------
---------- Heredoc & Nowdoc ----------
--------------------------------------

    $name = "Ahmed";
        echo '<br>';
    echo <<<navlinks
    <ul>
        <li>$name</li>
        <li>$name</li>
        <li>$name</li>
        <li>$name</li>
    </ul>
    navlinks;
    echo '<br>';
    echo <<<'ullink'
    <ul>
        <li>$name</li>
        <li>$name</li>
        <li>$name</li>
        <li>$name</li>
    </ul>
    ullink;
    echo '<br>';
    echo "<ul>",
        "<li>" . $name . "</li>",
        "<li>" . $name . "</li>",
        "<li>" . $name . "</li>",
        "<li>" . $name . "</li>",
     "</ul>";
    echo '<br>';

---------------------------
---------- Array ----------
---------------------------

    echo "<pre>";
    print_r([
        "0" => "Ahmed",
        "1" => "Ayaa",
        "2" => "ibrahem",
        "Osama",
        "Names" => [
            "A" => "Ammar",
            "b" => "basem",
            "c" => "camel",
            "AbdElrahman",
        ],
    ]);
    echo "</pre>";
 
-------------------------------
---------- variables ----------
-------------------------------

    $username = "Ahmed";
    $Username = "Ayman";
    echo $username;
    echo "<br>";
    echo $Username;
    echo "<br>";
    echo 'Hello $username';
    echo "<br>";
    echo "Hello $username";
    echo "<br>";
    $a = "Mohamed";
    $b = &$a;
    $a = "Ibrahem";
    echo $a;
    echo "<br>";
    echo "$b";

-------------------------------
---------- constants ----------
-------------------------------

    define ("DB_NAME", "Ahmed");
    define ("MAIN_NUMBER", 16);
    echo DB_NAME;
    echo MAIN_NUMBER;

    => magic constants <=
    __LINE__
    __FILE__
    __DIR__
    __FUNCTION__

    => Pre_defind constants <=
    PHP_VERSION
    PHP_OS_FAMILY
    PHP_INT_MAX

--------------------------------------------
---------- Arithmetic Operators ------------
--------------------------------------------

    $a [+] $b => addition
    $a [-] $b => subtraction
    $a [*] $b => multiplication
    $a [/] $b => division
    $a [%] $b => modulus
    $a [**] $b => exponentiation
    +$a        => Identity
    -$a        => negation
    echo "100";
    echo gettype("100"); //string
    echo +"100";
    echo gettype(+"100"); //integer
    echo -"-100"; //100
    echo gettype(-"-100"); //integer
    $a = 10;
    //$a = $a + 20 = $a += 20
    $a += 20;
    echo $a;

------------------------------------------
---------- Comparison Operators ----------
------------------------------------------

    ==      => Equle / just value
    !=      => Not Equle / just value
    <>      => Not Equle / = !=
    ===     => Indentical / value and Date Type
    !==     => Not Indentical
    <       => larger than
    >       => smaller than
    <=>     => [ Less than => -1 , Equle Than => 0 Or Greater => 1 ]
    <=      => larger than or Equle
    >=      => Smaller than or Equle

    var_dump(100 == 100); //True
    echo "<br>";
    var_dump(100.0 == "100"); //Treu
    echo "<br>";
    var_dump(100 != 100); //false
    echo "<br>";
    var_dump(100.1 != "100"); //True
    echo "<br>";
    echo "======================================";
    echo "<br>";
    var_dump(100 === 100); //True
    echo "<br>";
    var_dump("100" === 100); //False
    echo "<br>";
    var_dump(100 !== 100); //False
    echo "<br>";
    var_dump("100" !== 100.0); //True
    echo "<br>";
    var_dump(100 > 10); //Treu
    echo "<br>";
    var_dump(-100 > "100"); //False
    echo "<br>";
    var_dump(100 <= 100); //Treu
    echo "<br>";
    var_dump(100.1 >= "100"); //True
    echo "<br>";
    var_dump(100 <=> 100); // 0
    echo "<br>";
    var_dump(100 <=> 10); // 1
    echo "<br>";
    var_dump(100 <=> 200); // -1
    echo "<br>";
    $a = 0;

-----------------------------------------------------
---------- Increment & Decrement Operators ----------
-----------------------------------------------------

    $a++;
    $a++;
    $a++;
    $a--;
    $b = 0;
    echo $a;
    echo "<br>";
    echo $b++; // 0 
    echo "<br>";
    echo $b; // 1
    echo "<br>";
    echo ++$b; // 2
    echo "<br>";
    echo $b; // 2
    echo "<br>";
    echo --$b; // 1
    echo "<br>";

-----------------------------------------
---------- logical operators ------------
-----------------------------------------

    and        => Tow Are Treu
    &&         => Tow Are Treu ["&&" Has A Greater Precedens Than "And"]
    or         => One Or Both Is True
    ||         => Tow Are Treu ["||" Has A Greater Precedens Than "Or"]
    xor        => one is true but not both
    !          => Not 

--------------------------------------
---------- string operators ----------
--------------------------------------

    define("lastname", "Samir");
    $a = "Ahmed";
    $b = "Ayman";
    $c = "Mohamed";
    $x = "Abdulrahman ";
    $x .= "Osama ";
    $x .= "Mohammed";
    echo "$a $b $c";
    echo "<br>";
    echo "{$a} {$b} {$c}" .  " " . lastname;
    echo "<br>";
    echo $a . " " . $b . " " . $c . " " . lastname;
    echo "<br>";
    echo $x;

--------------------------------------
---------- Array operators -----------
--------------------------------------

    +       => Union
    ==      => Equle => Same key and value
    !=      => Not Equle
    <>      => Not Equle
    ===     => Identical => Same key and value, Same order and type
    !==     => Not Identical
    $arr1 = [1 => "A", 2 => "B",];
    $arr2 = [3 => "C", 4 => "D"];
    $arr3 = [5 => "E", 6 => "F"];
    $arr4 = ["A" => 10, "B" => 20,];
    $arr5 = ["B" => "20", "A" => "10"];
    $arr6 = ["Ahmed" => 100, "Belal" => 100];
    $arr7 = [ "Ahmed" => 100, "Belal" => 100,];
    echo "<pre>";
    print_r($arr1 + $arr2 + $arr3);
    echo "</pre>";
    echo "<br>";
    var_dump($arr4 == $arr5); // True
    echo "<br>";
    var_dump($arr4 != $arr5); // False
    echo "<br>";
    var_dump($arr6 === $arr7); // True

--------------------------------------------
---------- Error Control Operator ----------
--------------------------------------------

    //variable
    $a = 10;
    $b = @$a or die('Variable not found');
    echo "This is $b";
    echo "<br>";

    // File
    echo "<pre>";
    print_r($f);
    echo "</pre>";

    //include
    (@include("Ahmed.php")) or die('File Not Found');

-------------------------------------------
----------  Operator Precedence -----------
-------------------------------------------

    ["||" Has A Greater Precedens Than "Or"]
    ["&&" Has A Greater Precedens Than "And"]

    echo 2 + 4 * 5; // 22
    echo "<br>";
    echo (2 + 4) * 5; // 30
    echo "<br>";
    echo 10 || False || "" || [] || 0; // 1
    echo "<br>";
    echo true ; // 1
    echo "<br>";
    echo 10 || False; // 1
    echo "<br>";
    var_dump(10 || False || "" || [] || 0); //bool(True)
    echo "<br>";

    $a = 10 || false;
    echo $a; // 1
    echo "<br>";

    $b = 10 or false;
    echo $b; // 10

--------------------------------------
---------- If, Elseif, Else ----------
--------------------------------------

    syntax:
    if (condition) {
        // If condittion is true <= Run me
    } Else {
        // if condition is false <= Run me
    }

    if (5 > 5) {
        echo "Hello";
    } elseif (4 > 5) {
        echo "welcom";
    } else {
        echo "Error";
    }

    $page = "About";
    if ($page == "About") {
        echo "Hello";
    }

    echo "<br>";

    $Title = "";
    if ($Title == "") {
        echo "Unknown page";
    } else {
        echo $Title;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        if ($_POST["lang"] == "ar") {

            echo "مرحبا " . $_POST["username"];

        } elseif ($_POST["lang"] == "en") {

            echo "Hello " . $_POST["username"];

        } elseif ($_POST["lang"] == "sp") {

            echo "Hola " . $_POST["username"];
            
        }
    }

 => Ternary Conditional Operator <=
    $a = 10;
    $result = $a > 8 ? "Good" : "Bad";

    echo "Hello people, I Love PHP because it is a " . $result . " language";
    echo "<br>";
    echo $a > 8 ? "Good" : "Bad";

----------------------------
---------- Switch ----------
----------------------------

syntax:
switch (expression) {
    case 1: 
        //code block 1
        break;
    case 2: 
        // code block 2
        break;
    case 3:
        // code block 3
        break;
    default:
        // Default code block
}

$day = "Sat";
switch($day) {

    case "Sat":
        echo "Hello today is $day we are open from 10AM : 4PM";
        break;
        
    case "Sun":
        echo "Hello today is $day we are open from 4PM : 10PM";
        break;

    case "Mon":
    case "Thu":
        echo "Hello today is $day we are open from 7AM : 1PM";
        break;
    
    default:
        echo "Unknown day";

--------------------------
---------- LOOP ----------
--------------------------

syntax:
===> while <===
while (condition) {

    //block of code;

}

$i = 1;

while ($i <= 1000) {

    echo "$i <br>";

    $i++;

}

===> Do <===
Do {

    //Block of code;

} while (condition)

$Even_numbers = 0;
do {
    echo $Even_numbers . "<br>";
    
    $Even_numbers += 2;
} while ($Even_numbers <= 100)

==> For <==

    for ($i = 1; $i <= 5; $i++) {

        echo "$i <br>";
    }
    
echo "<br>";   

$i = 1;
    
    for (;;) :

        if ($i == 6) {

            break;

        }

        echo "$i <br>";

         $i++;
    endfor;

==> foreach <==

    $countries = ["EG", "SA", "QA", "SY"];

    echo "<pre>";
    print_r ($countries);
    echo "</pre>";

    foreach ($countries as $country) {

        echo "$country <br>";

    }


    $countries_whith_discount = ["EG" => 50, "SA" => 40, "QA" =>30, "SY" => 70];

    echo "<pre>";
    print_r ($countries_whith_discount);
    echo "</pre>";


    foreach ($countries_whith_discount as $country => $discount) {

        echo "Country name is $country and discount is $discount <br>";

    }

---------------------------------------
---------- Include & require ----------
---------------------------------------

    include("Ahmed.php");

    echo @$a;

    echo "<br> Hello"; //The echo was printed because we used the include
    
    require("Ahmed.php");

    echo @$a;

    echo "<br> Hello"; //The echo was not printed because we used the require

==> include_once <==

    include_once("Ahmed.php");

    echo @$a;

    $a = 20;
    
    include_once("Ahmed.php");
    
    echo "<br>";

    echo @$a;

    echo "<br> Hello";

-----------------------------------
------------- function ------------
-----------------------------------

syntax:  function functionName() {
  code to be executed;
}

********************************
*********** Examples ***********
******************************** 

    //Ex: 1
    function say_hello_to($someone, $another_one) {
        echo "Hello MR $someone <br>";
        echo "Hello MR $another_one <br>";
    }

say_hello_to("Ahmed", "Mohammed");
say_hello_to("Osama", "Abdulah");
say_hello_to("Abdulrahman" ,"Islam");

    //Ex: 2
    function Deep_freezer($Item) {
        if ($Item === "water") {

            echo "Make it ice <br>";

        } elseif ($Item === "Coca cola") {

            echo "Make it cold <br>";

        } elseif ($Item === "fruits") {

            echo "Make it fresh <br>";

        } else {

            echo "Unknown Item";

        }
        
    }

    Deep_freezer("water");
    Deep_freezer("Coca cola") ;
    Deep_freezer("fruits");
    Deep_freezer("Tv remote");

    // Ex: 3
    $Prizes = [1 => "PC", "Laptop", "XBOX", "Apple TV", "ipad", "iphone"];

    function get_number($num1, $num2) {
        return $num1 + $num2; 
    }

    echo $Prizes[get_number(1, 2)];

    //Ex: 4
    function calculate() {

    echo "Number of argument : " . func_num_args() . "<br>";
    echo "argument index number 4 is " . func_get_arg(4) . "<br>";
    echo "<pre>";
    print_r(func_get_args());
    echo "</pre>";
    $result = 0;
    foreach (func_get_args() as $arg ) :
        $result += $arg;
    endforeach;
    echo $result;
    }

    function calculate(...$nums) {

    echo "Number of argument : " . func_num_args() . "<br>";
    echo "argument index number 4 is " . $nums[3] . "<br>";
    echo "<pre>";
    print_r($nums);
    echo "</pre>";
    $result = 0;
    foreach ($nums as $num) :
        $result += $num;
    endforeach;
    echo $result;
    }

    calculate(10, 40, 45, 85, 20, 30); // 230     

    //Ex: 5
    function add_five(&$number) {
    $number += 5;
    return $number;
    }
    $n = 15;
    echo add_five($n);
    echo "<br>";
    echo "$n";
    echo "<br>";

    function calculate($n1, $n2) : int {
        return $n1 + $n2;
    }

    echo calculate(20.5, 9.5);
    echo "<br>";

    echo calculate(20.5, 9.5) . "<br>";
    echo gettype(calculate(20.5, 9.5));


    //Ex: 6
    $say_Hello = function() {
    return "Hello";
    };

    echo $say_Hello();

    echo "<br> ################################################# <br>";

    $say_Hola = function($some_one) {
        return "Hello $some_one";
    };

    echo $say_Hola("Ahmed");

    echo "<br> ################################################# <br>";

    $msg = "Hi";
    $say_Hi = function($some_one) use ($msg) {
        return "$msg $some_one";
    };

    echo $say_Hi("Ahmed");

    echo "<br> ################################################# <br>";

    $nums = ["1" => 10, 20, 30 ,40 ,50];

    function add_five($item) {
        return $item + 5;
    }

    $nums_after_adding = array_map("add_five", $nums);

    echo "<pre>";
    print_r ($nums_after_adding);
    echo "</pre>";

    //Ex: 7
    $say_Hello = fn() => "Hello";

    echo $say_Hello();

    echo "<br> ################################################# <br>";

    $say_Hola = fn($some_one) => "Hello $some_one";

    echo $say_Hola("Ahmed");

    echo "<br> ################################################# <br>";

    $msg = "Hi";
    $say_Hi = fn($some_one) => "$msg $some_one";


    echo $say_Hi("Ahmed");

    echo "<br> ################################################# <br>";

    $nums = ["1" => 10, 20, 30 ,40 ,50];

    function add_five($item) {
        return $item + 5;
    }

    $nums_after_adding = array_map("add_five", $nums);

    echo "<pre>";
    print_r ($nums_after_adding);
    echo "</pre>";

********************************
*********** Examples ***********
********************************


-----------------------------------
---------- String function --------
-----------------------------------

    syntax : lcfirst(string[required]) 
    explain: Convert the first character to lowercase 
    Ex: echo lcfirst("Ahmed Ayman MSR"); //ahmed Ayman MSR
    --------------------
    syntax : ucfirst(string[required])
    explain: Convert the first character to uppercase    
    Ex: echo usfirst("ahmed ayman msr);
    --------------------
    syntax : strtolower(String[required])  
    explain: Convert all characters to lowercase  
    Ex: echo strtolower("AHMED AYMAN MSR);
    --------------------
    syntax : strtoupper (String[required]) 
    explain: Convert all characters to uppercase  
    Ex echo strtoupper("ahmed ayman msr");
    --------------------
    syntax : ucwords(String[required], Deimiters[Optional]) 
    explain: Convert the first character of each word to uppercase
    Ex: echo ucwords("elzero webs|school", "|") . "<br>";
    --------------------
    syntax : str_repeat(String[required], count[required])  
    explain: Repeat the string
    Ex: echo str_repeat("Ahmed", 3);
    --------------------
    syntax : implode(separator[Optional], Array[Required], => join() Is Alia) 
    explain: Join array elements with a string
    Ex: echo implode(", ", $friends) . "<br>";
    --------------------
    syntax : explode(separator[required], string[required], limit[optional]) 
    explain: Break a string into an array
    Ex: $str = "Hello world. It's a beautiful day."; print_r (explode(" ",$str));
    --------------------
    syntax : str_shuffle(string[Required]) 
    explain: Randomly shuffle all characters of a string
    Ex: echo str_shuffle("Hello World");
    --------------------
    syntax :  strrev(string[Required]) 
    explain: Reverse the string
    Ex: echo strrev("Hello World!");
    --------------------
    syntax : ltrim(string[Required], charslist[optional])  
    explain: Remove characters from the left side of a string
    Ex: $str = "Hello World!"; echo $str . "<br>"; echo ltrim("$str");
    --------------------
    syntax : chunk_split(string[required], length[Optional], End[Optional]) 
    explain: Split the string after each character and add a "something" after each split
    Ex: cunk_split("AhmedAyman MSR", 5, "|")
    --------------------
    syntax : strlen(string[required]) 
    explain:  Return the length of the string
    Ex: $string = "Ahmed Ayman mohamed"; echo strlen($string);
    --------------------
    syntax : str_split(string[required], length[optional]) 
    explain: Split the string into an array
    Ex: echo "<pre>"; print_r(str_split("Hello  Ahmed Ayman", 6)); echo "</pre>";
    --------------------
    syntax : str_tags(string[required], allowed[optional]) 
    explain: Strip the string from HTML tags
    Ex: echo strip_tags("<h3> Hello <b>Ahmed</b> Ayman </h3> ", "<h3>") . "<br>";
    --------------------
    syntax : nl2br(string[required], XHTML[Optional]) 
    explain: Insert line breaks where newlines (\n) occur in the string
    Ex: echo nl2br("One line.\nAnother line.");
    --------------------
    syntax : strpos(string[required], value[required], start position[optional] ) 
    explain: Find the position of the first occurrence of "" inside the string
    Ex: var_dump(strpos("Ahmed Ayman", "A", "5"));
    --------------------
    syntax : strrpos(string[Required], value[required], start position[optional]) 
    explain: Find the position of the last occurrence of "" inside the string
    Ex: var_dump(strrpos("I love php, I love php too", "php", 11));
    --------------------
    syntax : stripos(string[Required], value[required], start position[optional]) case-insensitive
    explain:
    Ex:
    --------------------
    syntax : strripos(string[Required], value[required], start position[optional]) case-insensitive 
    explain:
    Ex:     
    --------------------       
    syntax : substr_count(string[Required], value[required], start position[optional], length[optional])         
    explain: Count the number of times occurs in the string.  
    Ex: var_dump(substr_count("I love PHP, I love PHP too", "PHP", 2, 21));
    --------------------
    syntax : parse_str(String[Required], Arrray[Required])                                                                                                       
    explain:
    Ex: parse_str("name=Ahmed&age=20&email=ahmed@nn.com", $query); echo "<pre>"; print_r($query); echo "</pre>";
    --------------------
    syntax : quotemeta(string[required])                                                                                                                         //
    explain: It remove everything that might cause a problem in the string
    Ex: echo quotemeta("Hello () [] * ") . "<br>";
    --------------------
    syntax : str_pad(String[Required], length[required], string[oprional], Pad Flag[optional])                                                                   //
    expalin: Pad to the right side or left side or together -As you like- of the string, to a new length of "Any number" characters:
    Ex:echo str_pad("12", 8, 0, STR_PAD_LEFT) . "<br>";
    --------------------
    syntax : strtr(string[Required], From[Required], To[Required])
    explain: Replace the characters "ia" in the string with "eo".
    Ex: echo strtr("Hilla Warld","ia","eo");
    --------------------
    syntax : str_replace(Find[Required], Replace with[Required], Data[Required], Replace count[Optional])
    syntax : str_ireplace(Find[Required], Replace with[Required], Data[Required], Replace count[Optional])
    explain:Replace the characters "one, Tow, Three" in the Array ["One", "Tow", "Three", "one", "one"] with "1, 2"
    Ex: echo "<pre>"; print_r(str_replace(["One", "Tow", "Three"], [1, 2], ["One", "Tow", "Three", "one", "one"])); echo "</pre>";
    --------------------
    syntax : substr_replace(String[Required], Replace with Insert[required], start[Required], Length[Optional])
    explain:
    Ex1: echo substr_replace("Elzero_Web_School", "A", 7, -1); // Elzero Al
    Ex2: echo "<pre>"; print_r(substr_replace(["OneTwo", "ThreeFour"], 1, 0)); echo "</pre>";
    --------------------
    syntax : wordwrap(string[Required], width[optional = 75], break_char[Optional = "/n"], cut_long[Optional = False])
    explain: 
    Ex: $str = "Welcome To Elzero Web School Website"; echo wordwrap($str, 8, "<br>", TRUE);
    --------------------
    syntax : ord(String[required])
    explain:
    Ex: echo ord("a"); //97
    --------------------
    syntax : chr(Int[Required])
    explain:
    Ex: echo chr(97); // a
    --------------------
    similar_text(String_one[required], String_Two[Required], Percent[Optional])
    explain:
    Ex:echo similar_text("Ahmed", "Ahmedd", $pre); echo $pre;
    -------------------
        
------------------------------------
---------- Array function ----------
------------------------------------

    syntax : array_reverse(array[Required], preserve[optional])
    explain: Return an array in the reverse order
    Ex: {    
        $family = ["Ayman", "Ahmed", "Abdulah", "Mohamed", "Belal", "Ibrahem", "Osama", ["Sarah", "Safa"]];
        echo "<pre>";
        print_r($family);
        print_r(array_reverse($family, TRUE));
        echo "</pre>";
    }
    -----------------
    syntax : array_flip(array[Required])
    explain: Flip all keys with their associated values in an array
    Ex: {   
        $countries = ["EG" => "EGYPT", "KSA" => "Sauida Arabia", "SY" => "Syria", "USA" => "United States"];
        echo "<pre>";
        print_r(array_flip($countries));
        echo "</pre>";
    }
    -----------------
    syntax : count(array[Required], mode[optional |  Default = 0])
    explain: Return the number of elements in an array
    Ex: {
        $counting = ["A","B","C",[1,2,3]]; 
        echo count($counting, 1);
    }
    -----------------
    syntax : in_array(search[Required], array[Required], type[optional | Default = False])
    explain: Search for the value "1" in an array and output some text
    Ex: {
        $search_array = ["1", 2, 3, 4];
        if (in_array("1", $search_array, TRUE)) {
            echo "The Elment Is Found";
        }
    }
    -----------------
    syntax : array_key_exists(key[Required], array[Required])
    explain: Check if the key "PHP" exists in an array:
    Ex: {
        $courses = ["HTML" => 60, "CSS" => 65, "Java Script" => 95, "PHP"=> 100, "MySQL" => 40];

        if (array_key_exists("PHP", $courses)) {

            echo "The Course Is Found And The Price Is" . $courses["PHP"];

        }
    }
    -----------------
    syntax : array_keys(array[Required], value[optional], strict[optional])
    explain: Return an array containing the keys:
    Ex: {
        $friends = ["Ahmed", "Ibrahem", "Mohamed", "Abdulah", 1, "1"];
        echo "<pre>";
        print_r(array_keys($friends, 1, TRUE));
        echo "</pre>";
    }
    -----------------
    syntax : array_values(array[Required])
    explain: Return all the values of an array
    Ex: {
        $countries = ["EG" => "EGYPT", "KSA" => "Sauida Arabia", "SY" => "Syria", "USA" => "United States"];
        echo "<pre>";
        print_r(array_values($countries));
        echo "</pre>";
    }
    -----------------
    syntax : array_pad(array[Required], size[Required], value[Required])
    explain: Return 4 elements and insert a value of "X" to the new elements in the array
    Ex: {
        $pad = ["A", "B", "C", "D"];
        echo "<pre>";
        print_r(array_pad($pad, -10, "X"));
        echo "</pre>";
    }
    -----------------
    syntax : array_product(array[Required])
    explain: Calculate and return the product of an array
    Ex: {
        $product = [10, 5, 2, 10];
        echo array_product($product). "<br>";
    }
    -----------------
    syntax : array_sum(array[Required])
    explain: Return the sum of all the values in the array
    Ex: {
        $sum = [10, 5, 2, 10];
        echo array_sum($sum). "<br>"; // 27
    }
    -----------------
    syntax : current(array[Required])
    explain: Output the value of the current element in an array
    Ex: {
        $friends = ["Ahmed", "Ibrahem", "Mohamed", "Abdulah"];
        echo current($friends);
    }
    -----------------
    syntax : next(array[Required])
    explain: Output the value of the current and the next element in the array
    Ex: {
        $friends = ["Ahmed", "Ibrahem", "Mohamed", "Abdulah"];
        echo next($friends);
    }
    -----------------
    syntax : 
    explain: Output the value of the current, next and previous element in the array
    Ex: {
        $friends = ["Ahmed", "Ibrahem", "Mohamed", "Abdulah"];
        echo current($friends);
        echo next($friends);
        echo prev($friends);
    }
    -----------------
    syntax : 
    explain: Output the value of the last element in an array
    Ex: {
        $friends = ["Ahmed", "Ibrahem", "Mohamed", "Abdulah"];
        echo end($friends);
    }
    -----------------
    syntax : array_merge(array1, array2, array3, ...)
    explain: Merge two arrays into one array
    Ex: {
        $mergeOne = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
        $mergeTwo = ["One" => "HTML", "Four" => "Python"];

        echo "<pre>";
        print_r(array_merge($mergeOne, $mergeTwo));
        echo "</pre>";

        $mergeThree = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
        $mergeFour = [40 => "HTML", 10 => "Python"];

        echo "<pre>";
        print_r(array_merge($mergeThree, $mergeFour));
        echo "</pre>";

    }
    -----------------
    syntax : array_replace(array1[required], array2[required], array3[optional], ...)
    explain: Replace the values of the first array with the values from the second array
    Ex: {
        $main = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
        $replace = ["One" => "HTML", "Four" => "Python"];

        echo "<pre>";
        print_r(array_replace($main, $replace));
        echo "</pre>";
    }

    -----------------
    syntax : array_rand(array[required], number[optional])
    explain: Return an array of random keys
    Ex: {
        $nums = [1, 2, 3, 4, 5];

        echo $nums[array_rand($nums)] . "<br>";

        echo "<pre>";
        print_r(array_rand($nums, 3));
        echo "</pre>";

    }
    -----------------
    syntax : shuffle(array[required])
    explain: Randomize the order of the elements in the array
    Ex: {
        $nums = [1, 2, 3, 4, 5];

        shuffle($nums);

        echo "<pre>";
        print_r($nums);
        echo "</pre>";
    }
    -----------------
    syntax :  array_shift(array[Required])
    explain: Remove the first element() from an array, and return the value of the removed element
    Ex:{
        $chars = ["A", "B", "c", "D"];

        $frist = array_shift($chars);

        echo "$frist<br>"; // A

        echo "<pre>";
        print_r($chars);
        echo "</pre>";

    }
    -----------------
    syntax : array_pop(array[Required])
    explain: Delete the last element of an array
    Ex:{
        $chars = ["A", "B", "c", "D"];
        $last = array_pop($chars);

        echo "$last<br>"; // D

        echo "<pre>";
        print_r($chars);
        echo "</pre>";

    }
    -----------------
    syntax : array_push(array[Required], value1[Optional], value2[Optional], ...)
    explain: Insert "Value1" and "Value2" to the end of an array
    Ex: {
        $chars = ["A", "B", "c", "D"];
        array_push($chars, "X", "Y", "Z");

        echo "<pre>";
        print_r($chars);
        echo "</pre>";

        array_push($chars, "1");

        $chars[] = "1"; //if you want insert one Elemet, This method faster than array_push;

        echo "<pre>";
        print_r($chars);
        echo "</pre>";
    }
    -----------------
    syntax : array_unshift(array, value1, value2, value3, ...)
    explain: Insert the element "value1" to the frist of an array
    Ex: {
        $chars = ["A", "B", "c", "D"];
        array_unshift($chars, "One", "Two", "Three");

        echo "<pre>";
        print_r($chars);
        echo "</pre>";
    }
    -----------------
    syntax : array_slice(array[Required], start, length[Optional], preserve[Optional])
    explain: Start the slice from the (start) array element, and return the rest of the elements in the array
    Ex: {
        $chars = ["A", "B", "C", "D", "E", "F", "G", "H"];
        $chars_with_sring_keys = ["A" => 1, "B" => 2, "C" => 3];
        $chars_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];

        echo "<pre>";
        print_r(array_slice($chars, 2));
        print_r(array_slice($chars, -4));
        print_r(array_slice($chars, 2, 3));
        print_r(array_slice($chars, 2, -1));
        echo "</pre>";

        echo "<pre>";
        print_r(array_slice($chars_with_sring_keys, 1, 1));
        print_r(array_slice($chars_with_numeric_keys, 0, 2));
        print_r(array_slice($chars_with_numeric_keys, 0, 2, TRUE));
        echo "</pre>";
    }
    -----------------
    syntax : array_splice(array[Required], start, length, array)
    explain: Remove elements from an array and replace it with new elements
    Ex:{
        $nums = [10, 20, 30, 40, 50, 60, 70];

        echo "<pre>";
        print_r(array_splice($nums, 2, 3, ["Thrte", "fourte", "fifte"]));
        print_r($nums);
        echo "</pre>";

    }
    -----------------
    syntax : sort(array[Required], sorttype[Optional])
    explain: Sort the elements of the array in ascending alphabetical order
    Ex: {
        
    }
    -----------------
    syntax : rsort(array, sorttype)
    explain: Sort the elements of the array in descending alphabetical order
    Ex: {

    }
    -----------------
    syntax : array_map(function[Required], array1[Required], array2[Optional], array3[Optional], ...)
    explain: Send each value of an array to a function
    Ex: <
        function add_title($fname, $lname) :
            return "Hello Mr $fname $lname";
        endfunction

        // echo add_title("Ahmed");

        $frist_names = ["Osama", "Ahmed", "Sayed", "Mohamed", "Sameh"];
        $last_names = ["Ameer", "Samy", "Shady", "Amr", "Mahmod", "Ibrahim"];

        echo "<pre>";
        print_r(array_map("add_title", $frist_names, $last_names));
        print_r(array_map(fn($f, $l) => "Hello Mr $f $l", $frist_names, $last_names));
        echo "</pre>";
    >
    -----------------
    syntax : array_filter(array[Required], function[Optional], flag[Optional])
    explain: Filter the values of an array using a callback function
    Ex: <
        $nums = [1 => 3, 6 => 1, 3 => 2, 4 => 8, 5 => 4];

        function check_nums($n1, $n2) {
            return $n1 > 4 || $n2 > 4;
        }

        echo "<pre>";
        // print_r(array_filter($nums, "Check_nums", ARRAY_FILTER_USE_KEY));
        print_r(array_filter($nums, "Check_nums", ARRAY_FILTER_USE_BOTH));
        echo "</pre>";

    >
    ------------------
    syntax : array_reduce(array, function, initial)
    Ex: <
        function add($carry, $item) {
            echo "$carry <br>";
            echo "$item <br>";
            echo min($carry, $item) . "<br>";
            echo "##############<br>";
            return min($carry, $item);
        }

        $nums = [10, 20, 50, 5, 10]; 

        echo array_reduce($nums, "add", $nums[0]);
    >
    -----------------

-----------------------------------
---------- Math function ----------
-----------------------------------

    echo abs(-2) . "<br>";  //  |-2| قيمة مطلقة للعنصر

    echo rand(10, 30) . "<br>"; // randomly nummber

    echo mt_getrandmax() . "<br>"; //إذا لم تكتب شيًا rand أعلى رقم في 
    echo intdiv(11, 5) . "<br>"; // تقريب ناتج القسمة إلى أقرب رقم صحيح | Data Type = Int
    echo gettype(intdiv(11, 5)) . "<br>";

    echo fmod(11.5, 5)  . "<br>"; //  عدم تقريب خارج القسمة إلى أقرب عدد صحيح | Data Type = Float
    echo gettype(fmod(11.5, 5)) . "<br>";

    echo ceil(5.01) . "<br>"; // تقوم بالتقريب للرقم الأكبر 
    echo floor(5.99) . "<br>"; // تقوم بالتقريب للرقم الأصغر 


    echo round(number[Required], precision[optional], mode[optional])
    echo round(5.99) . "<br>"; // إذا كان النصف أو أكثر يقرب إلى الأعلى
    echo round(5.10) . "<br>"; //  إذا كان أقل من النصف يقرب إلى الأسفل

    echo round(5.99, 1) . "<br>"; // 6
    echo round(5.995, 2) . "<br>"; // 6
    echo round(5.994, 2) . "<br>"; // 5.99
    echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>"; // 6
    echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>"; // 5 | إذا كان النصف أو أقل يقرب إلى الأسفل
    echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>"; // 5 | أقرب عدد زوجي
    echo round(5.50, 0, PHP_ROUND_HALF_ODD) . "<br>"; // 5 | أقرب عدد فردي

    echo sqrt(16); // الجذر

    echo min(10, 20, -40, -30, 50) . "<br>"; // أصغر عدد 
    echo min([10, 20, -40, -30, 50]) . "<br>";

    echo "<pre>";
    print_r(min([1, 3, 5], [1, 2, 6]));
    echo "</pre>";

    echo max(10, 20, -40, -30, 50) . "<br>"; // أكبر عدد
    echo max([10, 20, -40, -30, 50]) . "<br>";

    echo "<pre>";
    print_r(max([1, 3, 5], [1, 2, 6]));
    echo "</pre>";
-----------------------------------

--------------------------------------
---------- Filter Functions ----------
--------------------------------------

    syntax : filter_list()
    explain: Returns A List Of All Supported Filters
    Ex: <
        echo "<pre>";
        print_r(filter_list());
        echo "</pre>";
    >
    -----------------
    syntax : filter_id(Filter_Name[Required])
    Ex: echo filter_id("boolean") . "<br>"; // 258
    -----------------
    syntax : filter_var(Value[Required], Filter[Optional], Options[Optional])
    expalin: Filters A Variable With A Specified Filter
    -----------------
    ==> Validate Filters <==

    FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
    Flag => FILTER_NULL_ON_FAILURE => False For [False, 0, No, Off, ""] Only
    Ex: var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));
    --------------------------
    FILTER_VALIDATE_URL
    -- Flag => FILTER_NULL_ON_FAILURE
    -- Flag => FILTER_FLAG_PATH_REQUIRED
    -- Flag => FILTER_FLAG_QUERY_REQUIRED
    Ex: <
        var_dump(filter_var($url, FILTER_VALIDATE_URL,
        ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));
    >
    --------------------------    
    FILTER_VALIDATE_IP
    -- Flag => FILTER_NULL_ON_FAILURE
    -- Flag => FILTER_FLAG_IPV4
    -- Flag => FILTER_FLAG_IPV6
    Ex: <
        $ip = "192.168.2.1";
        var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));
    >
    --------------------------
    FILTER_VALIDATE_MAC
    -- Flag => FILTER_NULL_ON_FAILURE
    Ex: <
        $mac = "00:00:5e:00d:53:af";
        var_dump(filter_var($mac, FILTER_VALIDATE_MAC));
    >
    --------------------------
    FILTER_VALIDATE_EMAIL
    -- Flag => FILTER_NULL_ON_FAILURE
    Ex: <
        $email = "o@nn.sa";

    var_dump(filter_var(
        $email, 
        FILTER_VALIDATE_EMAIL, 
        FILTER_NULL_ON_FAILURE
    ));
    >
    --------------------------
    FILTER_VALIDATE_INT
    -- Flag => FILTER_NULL_ON_FAILURE
    -- Options => min_range
    -- Options => max_range
    -- Convert To Int On Success
    Ex: <
        $int = "110";

        var_dump(filter_var(
        $int,
        FILTER_VALIDATE_INT, 
        ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
        ));
    >
    --------------------------
    FILTER_VALIDATE_FLOAT
    -- Flag => FILTER_NULL_ON_FAILURE
    -- Options => min_range
    -- Options => max_range
    -- Convert To Float On Success
    Ex: <
        $float = "90.50";

        var_dump(filter_var(
        $float,
        FILTER_VALIDATE_FLOAT, 
        ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
        ));
    >
    --------------------------


    ------------------------------------------------------------------------------
    ==============================================================================
    ******************************* MySQL Database *******************************
    ==============================================================================
    ------------------------------------------------------------------------------

--* DATABASES
-- to create a database:
CREATE DATABASE IF NOT EXISTS dbName;

-- to delete a database:
DROP DATABASE IF EXISTS dbName;

-- to select specific database:
USE dbName;

-- to list extisting databases:
SHOW DATABASES;

-- to search for a database with specific name:
SHOW DATABASES LIKE 'dbname';

------------------------------------------
--* DATATYPES:

--=============
-- 1. Numeric Data Types:
---INT => max characters: 11
---TINYINT => max characters: 4
---SMALLINT => max characters: 6
---MEDIUMINT => max characters: 9
---BIGINT => max characters: 20

---DECIAML
---FLOAT
---DOUBLE

--BOOLEAN

--=============
-- 2. Date & Time:
---DATE => YYYY-MM-DD
---DATETIME => YYYY-MM-DD HH:MI:SS
---TIMESTAMP => YYYY-MM-DD HH:MI:SS
---TIME => HH:MI:SS
---YEAR => YYYY | YY

--=============
-- 3. String:
---CHAR => Have fixed size, faster than VARCHAR
---VARCHAR => variable

---TEXT
---TINYTEXT
---MEDIUMTEXT
---LONGTEXT

---BLOB => Binary Large Object, used for storing images and files

---ENUM => Select only one from some values
---SET => Select one or more value from some values
------------------------------------------
--* TABLES

--> Create Table:
CREATE TABLE IF NOT EXISTS tableName(
	in this form: <fieldName> <dataType>(<size>),
	...
	test INT(11),
	test2 VARCHAR(255)
);

--> To show table structure there are three ways:
DESCRIBE tableName; -- 1
SHOW COLUMNS FROM tableName; -- 2
SHOW FIELDS FROM tableName -- 3

--> To show tables in the database:
SHOW TABLE STATUS;

--> To get the code of creating a table:
SHOW CREATE TABLE tableName;

--> To Delete a table:
DROP TABLE IF EXISTS tableName;

--> To rename a table (2 ways):
RENAME TABLE oldName TO newName /, ... /; -- 1
ALTER TABLE oldName RENAME newName; -- 2


--> Change table storage engin:
ALTER TABLE tableName ENGIN = InnoDB;

--* ALTER COMMAND
-- add column:
ALTER TABLE tableName ADD / <columnName> <dataType>(<size>)/ testColumn VARCHAR(255) / AFTER otherColumnName | FIRS/;

-- delete column:
ALTER TABLE tableName DROP columnName;

-- change column:
ALTER TABLE tableName CHANGE oldColumnName newColumnName /<dataType>(<size>)/ VARCHAR(255) /... Other properties or change orde/

-- modify table
ALTER TABLE tableName MODIFY columnName /<newDataType>(<size>)/ VARCHAR(255);

-- NOTE: MODIFY and CHANGE can be used together separated by commas

-- change char-set of all columns in a table:
ALTER TABLE tableName CONVERT TO CHARACTER SET /<new-char-set>/ utf8;

------------------------------------------
--* Constraints
-- constraints could be added either during the creation of the table or after creating it

-- 1. NOT NULL
ALTER TABLE tableName ADD newColumnName NOT NULL;
ALTER TABLE tableName MODIFY newColumnName INT NOT NULL;

-- 2. Unique
ALTER TABLE tableName ADD UNIQUE(columnName);
ALTER TABLE tableName ADD newColumnName VARCHAR(255) NOT NULL UNIQUE;
ALTER TABLE tableName ADD CONSTRAINT constraintName UNIQUE(columnName);
--> to delete the unique constraint:
ALTER TABLE tableName DROP INDEX columnName;

-- 3. Primary Key: not null, unique and only one primary key is allowed in a table
CREATE TABLE IF NOT EXISTS tableName(id INT PRIMARY KEY);
CREATE TABLE IF NOT EXISTS tableName(
	id INT, 
	PRIMARY KEY(id)
);
ALTER TABLE tableName ADD PRIMARY KEY(columnName);
ALTER TABLE tableName ADD CONSTRAINT constraintName PRIMARY KEY(columnName);
--> to delete the primary key constraint:
ALTER TABLE tableName DROP PRIMARY KEY;

-- 4. Foreign Key: relationship between two tables
CREATE TABLE clients(id INT PRIMARY KEY);
CREATE TABLE orders(
	id INT PRIMARY KEY,
	client_id INT NOT NULL,
	FOREIGN KEY(client_id) REFERENCES clients(id)
);
ALTER TABLE tableName 
ADD CONSTRAINT constraintName 
FOREIGN KEY(columnName) REFERENCES parentTableName(columnName)
ON DELETE CASCADE
ON UPDATE CASCADE;
--> tags that can be used with ON UPDATE and ON DELETE:
--- 1. CASCADE
--- 2. SET NULL
--- 3. NO ACTION
--- 4. RESTRICT: prevent
--> to delete the primary key constraint:
ALTER TABLE tableName DROP FOREIGN KEY columnName;

------------------------------------------
--* String Functions

-- 01. LEFT(string, n): gets first left n characters
SELECT LEFT(columnName, 3) FROM tableName;

-- 02. RIGHT(string, n): same as LEFT but from right.
-- 03. MID(string, p, n): gets some characters from middle of text where p is the start position and n is the length
-- 04. LENGTH(string): gets number of bytes used by a string
-- 05. CHAR_LENGTH(string) = CHARACTER_LENGTH(columnName): gets number of characters in a string
SELECT columnName FROM tableName ORDER BY CHAR_LENGTH(columnName);

-- 06. LCASE(string) = LOWER(columnName): lower all characters.
-- 07. UCASE(string) = UPPER(columnName): upper all characters.
-- 08. REPEATE(string, n): repeats a string n times.
-- 09. REPLACE(string, from, to): replaces all occurences of 'from' to 'to'
-- 10. REVERSE(string)
-- 11. CONCAT(string, string, ...): concatenation
-- 12. CONCAT_WS(separator, string, string, ...): concatenation with separator
-- 13. INSERT(string, position, length, string_to_be_inserted)
-- 14. TRIM(LEADING/TRAILING/BOTH remove_string FROM string): first two parameters is optional and defaults are both ' '
-- 15. LTRIM(string): left trim
-- 16. RTRIM(string): right trim
-- 17. LPAD(string, length, padding_text): left padding, if padding_text is empty, strings whose length is less than the required length will return null 
-- 18. RPAD(string, length, padding_text): right padding, same as LPAD

------------------------------------------
--* Math Functions

-- 1. CEIL(number)
-- 2. FLOOR(number)
-- 3. ROUND(number, num_of_decimals)
-- 4. MOD(dividend, divisor): modulus
-- 5. TRUNCATE(number, num_of_decimals): does not round but deletes decimals after num_of_decimals count
SELECT TRUNCATE(2.4599, 2); -- returns 2.45

-- 6. POW(number, power)

------------------------------------------
--* Date & Time Functions

-- 01. CURTIME()/CURRENT_TIME()/CURRENT_TIME: time in format HH:MM:SS
-- 02. CURDATE()/CURRENT_DATE()/CURRENT_DATE: date in format YYYY-MM-DD
-- 03. NOW()/CURRENT_TIMESTAMP()/CURRENT_TIMESTAMP: date & time in format YYYY-MM-DD HH:MM:SS
-- 04. DAYNAME(date)
-- 05. DAYOFMONTH(date)/DAY(date) 
-- 06. DAYOFWEEK(date)
-- 07. MONTH(date)  
-- 08. MONTHNAME(date)
-- 09. HOUR(datetime)
-- 10. MINUTE(date)
-- 11. DATEDIFF(date1, date2): date difference
-- 12. LAST_DAY(date): date of the last day in a month
-- 13. DATE_ADD(date, INTERVAL expression time_unit): add interval to specific date
SELECT DATE_ADD('2017-2-12', INTERVAL 10 DAY);

-- 14. DATE_SUB(date, INTERVAL expression time_unit): subtract interval to specific date

------------------------------------------
--* Comparison Functions

-- 1. BETWEEN AND, NOT BETWEEN AND
SELECT * FROM tableName WHERE columnName BETWEEN 1 AND 10;
SELECT * FROM tableName WHERE columnName BETWEEN DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND CURDATE();

-- 2. IN, NOT IN
SELECT * FROM tableName WHERE columnName NOT IN (1, 3, 5);

-- 3. LIKE, NOT LIKE
---> the % wildcard represents any number of characters, while _ represents a single character.
SELECT * FROM tableName WHERE columnName LIKE 'abd%'; --> matches 'abdullah' , 'abdelrahman', ..

------------------------------------------
--* Comparison Operators

-- 1. =
-- 2. >, >=, <, <=
-- 3. !=, <>: both means not equal

------------------------------------------
--* Logical Operators

-- 1. AND / &&
-- 2. OR / ||
-- 3. NOT / !
-- 4. XOR 

------------------------------------------
--* Flow Control Functions

-- 1. IF(condition, true, false)
SELECT name, IF(grade > 50, 'Congratulations', 'Nice try!') AS result FROM students;

-- 2. 
-->CASE
---> WHEN expression THEN result
---> WHEN expression2 THEN result2
---> ELSE result3
---> END
SELECT name,
CASE
	WHEN grade >= 97 THEN 'A+'
	WHEN grade >= 93 AND grade < 97 THEN 'A'
	ELSE 'F'
END
AS result
FROM students;

-->CASE variable
---> WHEN value THEN result
---> WHEN value2 THEN result2
---> ELSE result3
---> END
SELECT name,
CASE grade
	WHEN 97 THEN 'A+'
	WHEN 93 THEN 'A'
	ELSE 'Unknown'
END
AS result
FROM students;

------------------------------------------
--* Joins
SELECT * FROM users, langs WHERE users.lang_id = langs.id;

-- 1. INNER JOIN: selects only data that matches from both tables.
SELECT 
	u.name user_name,
	l.name language_name
FROM users u
INNER JOIN languages l
ON u.language_id = l.id;

-- 2. LEFT JOIN: selects all data from left table and only data that matches from right table
-- 3. RIGHT JOIN: selects all data from right table and only data that matches from left table

------------------------------------------

--> ORDER BY
SELECT * FROM tableName ORDER BY columnName, column2Name;

--> GROUP BY: groups data with same value
SELECT * FROM tableName GROUP BY columnName;


    
*/
?>