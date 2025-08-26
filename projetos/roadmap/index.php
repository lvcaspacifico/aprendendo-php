<?php
    declare(strict_types=1);

    require __DIR__ . '/Test/Test.php';
    use Test\Test;
    // require __DIR__ . '/Utils/Set.php';
    // use Set\Set;
    // $test = new Test("Lucas");

    // print_r = printar readable for humans. Ex:
    // $array = array('apple', 'banana', 'cherry');
    // print_r($array);
    // var_dump($array);
    // saída: Array ( [0] => apple [1] => banana [2] => cherry )

    // Constraints

    // define("__MU__", "lvcaspacifico");
    // echo __MU__ . "<br>";

    // Arrays
    // $arrayzin = array("maçã", "banana" );
    // print_r($arrayzin);
    // Desestruturando um array
    // $numerico = ["maçã", "banana", "laranja"];
    // foreach ($numerico as $id => $name) {
    //     echo $id . $name;
    // }

    // $arr = [10, 20, 30];

    // Desestruturação tradicional com list
    // [,, $c] = $arr;

    // echo count($arr);
    // String functions
    // $str = "Olá, mundo!";
    // echo addslashes($str);
    // echo bin2hex(".")

    // function ola(string $nome = "johncock"): string {
    //     return "Olá, {$nome}!";
    // }

    // echo ola("lvcaspacifico");
    // echo "<br>";
    // echo ola();

    // function menos(int $a, int $b): int {
    //     return $a - $b;
    // }

    // echo menos(b: 10, a: 10);

    // // Funções anonimas

    // $ola = function($name) {
    //     printf("Olá, %s", $name);
    // };

    // $ola("Lucas");
    // Arrow functinos
    //  $x = 1;
    //  $y = 2;   
    // $result = fn($x, $y) => $x + $y;
    // echo $result($x, $y);
    // Recursão
    // function recursiveCount(int $count){
    //     echo $count;
    //     if($count > 0){
    //         recursiveCount($count - 1);
    //     }
    // }

    // recursiveCount(5);
    // Variadic functions
    // function sum(...$numbers){
    //     return array_sum($numbers);
    // }

    // echo sum(1,2,3,34,43,41,41,41);

    // function olaPraTurma(string $textoBase, string ...$nomesDeAlunos){
    //     foreach($nomesDeAlunos as $aluno){
    //         echo $textoBase . " " . $aluno . "!<br>";
    //     }
    // }

    // olaPraTurma("Bem-vindo ao BES, ", "João", "Maria", "Tiago", "Marcelo")

    // $age = "123asd<>";
    // $aged = (integer) $age;
    // echo $aged;
    // $nome = readline("Digite seu nome: ");
    // echo "Olá, $nome!\n";

    // echo "Digite seu nome: ";
    // $input = trim(fgets(STDIN));
    // var_dump($input);

    // Miniprojeto -> CLI soma com spread, func anon
    // $soma = fn(...$args) => array_sum($args);

    // $run = true;
    // $args = [];

    // while($run){
    //     echo "Digite um número para somar: ";
    //     $input = trim(fgets(STDIN));
    //     if($input == 0){
    //         var_dump($args);
    //         $res = $soma(...$args);
    //         $par = $res % 2 == 0 ? "true" : "false";
    //         echo "Total = {$res}\n";
    //         echo "É par = {$par}\n";
    //         break;
    //     } else {
    //         $args[] = $input;
    //     }
    // }

    include "arquivo_que_não_existe.php";
    echo "Deu boa";
    
        // $set = new Set("agua", "agua", "pedra", "lixo", "pedra", "bobo");
    // var_dump($set->all());

?>