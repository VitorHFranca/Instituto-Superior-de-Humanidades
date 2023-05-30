<?php
require 'conexao.php';

if ($_POST) {
    $nome = $_POST['firstname'];
    $sobrenome = $_POST['lastname'];
    $email = $_POST['email'];
    $telefone = $_POST['number'];

        $insert = "INSERT INTO formulario(nome, sobrenome, email, telefone) VALUES ('$nome','$sobrenome', '$email','$telefone')";
        $result = mysqli_query($conexao, $insert);

        if ($result == TRUE) {
            echo '<script>alert("Cadastrado com sucesso!");</script>';
            echo '<script language="JavaScript">
            location.href="../html/index.html"</script>';
        } else {
            echo 'Não foi possível inserir.';
        }
    } else {
        echo '<script>alert("Erro ao receber post.");</script>';
    }
?>