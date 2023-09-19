<?php
    session_start();
    //Verificação da autenticação de usuário
    $usuario_autenticado = false;
    //Validação dos id
    $usuario_id = null;
    $usuario_perfil_id = null;
    
    $perfis = array(1 => 'Administrativo', 2 => 'Usuário');
    //Usuários do sistema
    $usuarios_app = array(
    array('id' => 'Peter Paz', 'email' => 'adm.corp@genius.com', 'senha' => 'thebest', 'perfil_id' => 1, 'entrou' => 'Janeiro de 2018', 'aniver' => '7 de junho', 'cargo' => 'estagiario 1', 'cel' => '11111111'),
    array('id' => 'Mirian Thammavongsa', 'email' => 'amarketing.corp@genius.com', 'senha' => 'vendotudo', 'perfil_id' => 2, 'entrou' => 'Dezembro de 2022', 'aniver' => '23 de maio', 'cargo' => 'estagiario 2', 'cel' => '222222'),
    array('id' => 'Maitê Carion', 'email' => 'qa.corp@genius.com', 'senha' => 'certificadodequalidade', 'perfil_id' => 2, 'entrou' => 'Setembro de 2019', 'aniver' => '4 de fevereiro', 'cargo' => 'estagiario 3', 'cel' => '33333333'),
    array('id' => 'Eugênia Flores', 'email' => 'backend.corp@genius.com', 'senha' => 'precisodecafe', 'perfil_id' => 2, 'entrou' => 'Janeiro de 2018', 'aniver' => '12 de outubro', 'cargo' => 'estagiario 4', 'cel' => '44444444'),
    array('id' => 'Jacobet Terrie', 'email' => 'estagiario.corp@genius.com', 'senha' => 'sr.faztudo', 'perfil_id' => 2, 'entrou' => 'Dezembro de 2022', 'aniver' => '19 de novembro', 'cargo' => 'estagiario 5', 'cel' => '55555555'));


    foreach($usuarios_app as $user){
       
        //Autenticação do usuário
        if($user['email'] ==  $_POST['email'] &&  $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
     }
     if($usuario_autenticado){
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
     } else{
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');
     }
?> 