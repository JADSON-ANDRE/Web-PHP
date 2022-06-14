<!--    Cadastro de Nadadores Por Categoria     -->
<!-- Recebe-se os dados dos nadadores (nome e idade), a partir disso,
o sistema fará a aloção na categoria correspondente, são elas:
    -Infantil: 6 a 12 anos;
    -Adolescente: 13 a 17 anos;
    -Adulto: maiores de 18 anos;

    Ex.: Pedro tem 15 anos.         Saída: Pedro (Adolescente) -->
<?php

$categorias = [];
$categorias[] = 'Infant';
$categorias[] = 'Adolescent';
$categorias[] = 'Adult';

// print_r($categorias);

$name = 'Pedro';
$age = 10;
$msgSuccess = 'REGISTRATION COMPLETED!';
$msgError = 'REGISTRATION ERROR!!! -- Come back in a few years';
echo $name . ' - ' . $age . ' years old.  ';

if ($age > 0 && $age <=5) {
    print_r($msgError);
} else if ($age >= 6 && $age <=12) {
    echo nl2br("Cat.: " . $categorias[0] . ".    \n\n");
    print_r($msgSuccess);
} else if ($age >= 13 && $age <=17) {
    echo nl2br("Cat.: " . $categorias[1] . ".    \n\n");
    print_r($msgSuccess);
} else if ($age >= 18 && $age <=100) {
    echo nl2br("Cat.: " . $categorias[2] . ".    \n\n");
    print_r($msgSuccess);
} else {
    print_r('INVALID VALUE - TRY AGAIN!');
}

?>