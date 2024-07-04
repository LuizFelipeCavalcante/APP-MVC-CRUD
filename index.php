<?php
include "utilities/Alerts.class.php";
include "model/Manager.class.php";
include "utilities/Alerts.class.php";

$manager = new Manager();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-Udemy</title>

    <!-- Icone na janela da navegador -->
    <link rel="shortcut icon" href="resources/favicon.png" type="image/x-icon">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Icones do Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- GoogleFonts OpenSans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Folha de Estilo (CSS) -->
    <style type="text/css">
    body {
        margin: 20px;
        background-color: #ffffff;
    }
    *{
        font-family: 'Open Sans', sans-serif;
    }
    h2 {
        font-family: 'Open Sans', sans-serif
    }
    
    .thead{
        background-color: #f7f7f7:
    }
    </style>
</head>

<?php
    if(isset($_GET['cod'])){
        switch($_GET['cod']){
            case 1:
                Alertas::success("Cadastro confirmado com sucesso");
                break;
                case 2:
                    Alertas::success("Cadastro excluido com sucesso");
                    break;
                    default:
                        Alertas::success("Nenhuma ação realizada");
                        break
        }
        
    } 
?>
<body>
    <!-- Dentro do container sera criada toda a página -->
    <div class="container">
        <h2 class="text-center"> Lista de Usuarios <i class="bi bi-people-fill"></i></h2>

        <h5 class="text-end"> 
            <a href="view/page_register.php" class="btn btn-primary btn-xs"> 
                <i class="bi bi-person-plus-fill"></i>
            </a>
        </h5>


        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead">
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>E-MAIL</th>
                        <th>CPF</th>
                        <th>DT. DE NASCIMENTO</th>
                        <th>ENDEREÇO</th>
                        <th>TELEFONE</th>
                        <th colspan="3">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($manager->list_client() as $data):?>
                    <tr>
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['name'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['cpf'] ?></td>
                        <td><?= $data['birth'] ?></td>
                        <td><?= $data['address'] ?></td>
                        <td><?= $data['phone'] ?></td>

                        <td>
                            <form method="POST" action="view/page_update.php"> 
                                <input type="hidden" name = "id" value <?= $data['id'] ?>>
                                <button class="btn btn-warning btn-xs"> 
                                <i class="bi bi-pencil-square"></i>
                                </button>
                            </form>
                        </td>

                        <td>
                            <form method="POST" action="controller/delete_client.php" onclick="return confirm('Tem certeza que deseja excluir ?');">
                                <input type="hidden" name="id" value=<?= $data['id']?>>
                                <button class="btn btn-danger btn-xs">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>



                
            </table>
        </div>
    </div>   










    <!--JQuery e JQueryMask -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</body>