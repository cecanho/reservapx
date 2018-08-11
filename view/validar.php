<?php
$login = addslashes($_POST['login']);
$senha = addslashes($_POST['senha']);
$xml = simplexml_load_file('../data/usuario.xml');
foreach ($xml->usuario as $r) {
    if (strcmp($r->login, $login)==0) {
        if (strcmp($r->senha, $senha)==0) {
            if (strcmp($r->login, 'admin')==0) {
                setcookie('id_usuario',$r['id']);
                setcookie('nome',$r->nome);
                setcookie('login',$r->login);
                header("Location: ../view/admin.php");
            } else {
                setcookie('id_usuario',$r['id']);
                setcookie('nome',$r->nome);
                setcookie('login',$r->login);
                header("Location: ../view/professor.php");
            }
        }
    }
}
echo "Usuário ou senha inválida";
exit;


