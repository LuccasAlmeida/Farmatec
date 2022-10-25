<?php
    session_start();
    // print_r($_REQUEST);

    $logado = $_SESSION['usuario'];

    if(isset($_POST['submit']) && !empty($_POST['txtnome']) && !empty($_POST['txtsenha']))

    {
        // Acessa
       include_once('../databases/BdturmaConect.php');
       $nome = $_POST['txtnome'];
       $email = $_POST["txtemail"];
       $senha = $_POST['txtsenha'];
        $senhanova = $_POST['txtsenhanova'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $query = "SELECT * FROM tbusuarios WHERE nome = '$nome' and email = '$email' and senha = '$senha'";

        $dbcontroller = new BdturmaConect();

        $rawData = $dbcontroller->executeSelectQuery($query);

            //print_r($query);
            //print_r($rawData);


             if(($rawData) < 1)
             {

                unset($_SESSION ['usuario']);
                unset($_SESSION ['email']);
                unset($_SESSION ['senha']);
                header('Location: ../usuario/trocarsenha.php');
             }
              else
              {

                $query = "UPDATE tbusuarios SET senha='$senhanova' WHERE usuario = '$logado'";

                $dbcontroller = new BdturmaConect();

                $rawData = $dbcontroller->executeQuery($query);

                $query = "UPDATE tbusuarios SET logado=1 WHERE usuario = '$logado'";

                $dbcontroller = new BdturmaConect();

                $rawData = $dbcontroller->executeQuery($query);

                
                unset($_SESSION['usuario']);
                unset($_SESSION['senha']);

                header('Location: ../login.php');

              }

              
        }
        else
    
    {
        // Não acessa
        header('Location: ../login.php');
    }
?>