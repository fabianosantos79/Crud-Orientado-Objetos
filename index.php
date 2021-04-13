<?php

    require_once 'vendor/autoload.php';

    use \classes\Usuarios as Usuarios;
    use \classes\UsuariosDao as UsuariosDao;

    $usuario = new Usuarios();
    //$usuario->setId(4);
    $usuario->setNome('Teste');
    $usuario->setEmail('teste@email.com');

    $usuarioDao = new UsuariosDao();
    //$usuarioDao->create($usuario);

    //$usuarioDao->update($usuario);

    $usuarioDao->delete(5);

    $usuarioDao->read();

    foreach ($usuarioDao->read() as $item) {
        echo "Nome: ".$item['nome'];
        echo "<br>";
        echo "E-mail: ".$item['email'];
        echo "<hr>";
    }
?>