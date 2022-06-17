<!--    Cadastro de Nadadores Por Categoria     -->
<!-- Recebe-se os dados dos nadadores (nome e idade), a partir disso,
o sistema fará a aloção na categoria correspondente, são elas:
    -Infantil: 6 a 12 anos;
    -Adolescente: 13 a 17 anos;
    -Adulto: maiores de 18 anos;

    Ex.: Pedro tem 15 anos.         Saída: Pedro (Adolescente) -->
<?php
session_start();

$categorias = [];
$categorias[] = 'Infant';
$categorias[] = 'Adolescent';
$categorias[] = 'Adult';

// print_r($categorias);

$name = $_POST['name'];
$age = $_POST['age'];
$msgSuccess = 'REGISTRATION COMPLETED!';
$msgError = 'REGISTRATION ERROR!!! -- Come back in a few years';
echo $name . ' - ' . $age . ' years old.  ';

if ($age > 0 && $age <=5) {
    $_SESSION['error message'] = 'REGISTRATION ERROR!!! -- Come back in a few years';
    // print_r($msgError);
    header('location: form.php');
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
    $_SESSION['error message'] = 'INVALID VALUE - TRY AGAIN!';
    // print_r('INVALID VALUE - TRY AGAIN!');
    header('location: form.php');
}

?>