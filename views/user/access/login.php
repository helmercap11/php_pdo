<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Entrar</title>

</head>

<body>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" style="top: 10%">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
                                    </div>

                                    <?php
          if (isset($_SESSION['log'])) {
            print($_SESSION['log']);
            unset($_SESSION['log']);
          }

          ?>
                                    <form action="" method="post" class="user">
                                        <div class="form-group">
                                            <input type="name" id="nome" name="email"
                                                class="form-control form-control-user" aria-describedby="emailHelp"
                                                placeholder="Digite o email" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="senha" class="form-control form-control-user"
                                                id="senha" placeholder="Digite a sua senha" required="">
                                        </div>


                                        <button class="btn btn-google btn-user btn-block" type="submit">Entrar</button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#"
                                            onclick="alert('Por favor contacte o Administrador do Sistema')">Esqueceu a
                                            senha? </a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="../access/create_acount.php" onclick="">Criar
                                            Conta</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

</html>