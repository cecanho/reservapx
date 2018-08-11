<?php
session_start();
$login = addslashes($_POST['login']);
$senha = addslashes($_POST['senha']);

$xml = simplexml_load_file('../data/usuario.xml');

foreach ($xml->usuario as $r) {
    if (strcmp($r->login, $login)==0) {
        if (strcmp($r->senha, $senha)==0) {
            if (strcmp($r->login, 'admin')==0) {
                $_SESSION['id'] = $r['id'];
                $_SESSION['nome'] = $r->nome;
                $_SESSION['login'] = $r->login;
                header("Location: ../view/admin.php");
            } else {
                $_SESSION['id'] = $r['id'];
                $_SESSION['nome'] = $r->nome;
                $_SESSION['login'] = $r->login;
                header("Location: ../view/professor.php");
            }
        }
    }
}

echo "Usuário ou senha inválida";
session_destroy();
exit;


