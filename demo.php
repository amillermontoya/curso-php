<?php
$name = "Adams";
$isDev = true;
$age =41;
$newAge = $age . '11';
$output = "Hola $name , con edad de $age";
define('LOGO_URL','https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

const NOMBRE = 'Adams';
is_string($name);is_bool($isDev);var_dump($name);var_dump($isDev);
echo gettype($age);
$outputAge = $isOld ? 'Eres viejo':'Eres joven.Felicidades';
$outputAgeMatch = match($age) {
    0,1,2 => "Eres un bebe, $name",
    3,4,5,6,7,8,9,10 => "Eres un niño, $name",
    11,12,13,14,15,16,17,18,19,20 => "Eres un adolescente, $name",
    default => "Eres un adulto, $name",
};
$outputAgeMatchIf = match(true) {
    $age < 2 => "Eres un bebe, $name",
    $age < 10 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name",
    $age == 18 => "Eres un adulto, $name",
    $age < 40 => "Eres un adulto joven, $name",
    $age >= 40 || $age <65 => "Eres un adulto viejo, $name",
    default => "Eres tercera edad, $name",
};

$bestLanguages = ["PHP", "JAVASCRIPT", "PYHTON"];
$bestLanguages[]= "JAVA";
$bestLanguages[]= "TYPESCRIPT";

$persona = [
    "name"=>"Adams",
    "age" => 32,
    "isDev" => true,
    "languages" => ["PHP","JAVA","JAVASCRIPT","PYTHON"]
];
$persona["name"] = "Leopoldo";
$persona["languages"][] = "java";
?>
<ul>
    <?php foreach ($bestLanguages as $key => $language): ?>
        <li><?= $key . " ". $language ?></li>
    <?php endforeach; ?>
</ul>
<h3>
    El mejor lenguaje es <?= $bestLanguages[3]?>
</h3>
<h2><?= $outputAgeMatch?></h2>
<h2><?= $outputAgeMatchIf?></h2>
<?php if ($isOld) : ?>
    <h2>Eres viejo, lo siento</h2>
    
<?php elseif ($isDev): ?>
    <h2>No eres viejo, pero eres Dev.</h2>    
<?php else: ?>
    <h2>Eres joven, felicidades</h2>
<?php endif; ?>

<h2> <?= $outputAge ?></h2>
<img src="<?=LOGO_URL?>" alt="PHP LOGO" width="200">
<h1>
    <? NOMBRE?>
    <?= $output ?>
</h1>

<style>
    :root {
        color-scheme: dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>