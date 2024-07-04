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

<body>
    <div class="container">
        <h2 class="py-5 text-center">Atualizar Usuario </i> </h2>


        <form method="POST" action="../controller/update_client.php"> 
            <div class="row g-3">

                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome <i class="bi bi-person"></i> </label>
                    <input type="text" class="form-control" name="nome" required autofocus>
                </div>

                <div class="col-md-6">
                    <label for="email" class="form-label">Email <i class="bi bi-person"></i> </label>
                    <input type="email" class="form-control" name="email" required autofocus>
                </div>

                <div class="col-md-6">
                    <label for="cpf" class="form-label">CPF <i class="bi bi-person"></i> </label>
                    <input type="text" class="form-control" name="cpf" required autofocus>
                </div>

                <div class="col-md-6">
                    <label for="data_nascimento" class="form-label">Data Nascimento <i class="bi bi-person"></i> </label>
                    <input type="date" class="form-control" name="data_nascimento" required autofocus>
                </div>

                <div class="col-md-6">
                    <label for="telefone" class="form-label">Telefone <i class="bi bi-person"></i> </label>
                    <input type="text" class="form-control" name="telefone" required autofocus>
                </div>

                <div class="col-md-6">
                    <label for="endereco" class="form-label">Endereço <i class="bi bi-person"></i> </label>
                    <input type="text" class="form-control" name="endereco" required autofocus>
                </div>

                <hr class="my-4">

                <div class="col-md-12 text-end">
                    <button class="btn btn-primary btn-lg" type="submit">Atualizar</button>
                    <a class="btn btn-success btn-lg" href="../index.php"> Cancelar </a>
                </div>

                </div>
            </div> 
        </form>
    </div>

     <!--JQuery e JQueryMask -->
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

</body>
</html>