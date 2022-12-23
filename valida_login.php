<?php
    session_start();
    $_SESSION['x'] = 'Oi, sou um valor de sessão!';
    print_r($_SESSION);
    echo '<hr />';

    // variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false;

    //usuários do sistema
    $usuario_app = array(
        array('email' => 'adm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    );
    
    /*
    echo '<pre>';
    print_r($usuario_app);
    echo '</pre>';
    */

    
    foreach($usuario_app as $user) {
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha'])
            $usuario_autenticado = true; 
    }

        
    if($usuario_autenticado) {
        echo 'Usuário autenticado';
    } else {
       header('Location: index.php?login=Erro');
    }
    
           
?>