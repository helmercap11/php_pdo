<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Criar Conta</title>
</head>

<body>
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-8 col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" style="top: 10%">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">CRIAR CONTA</h1>
                                    </div>

                                    <?php
  if (isset($_SESSION['log'])) {
    print($_SESSION['log']);
    unset($_SESSION['log']);
  }

  ?>
                                    <form action="" method="post" class="user">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="nome" required placeholder="Nome"
                                                        class="form-control form-control-user">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" name="ultimonome" parsley-trigger="change"
                                                        placeholder="ultimo nome"
                                                        class="form-control form-control-user">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" name="email" required
                                                        placeholder="exemplo@gmail.com"
                                                        class="form-control form-control-user">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="phone" name="contacto" parsley-trigger="change"
                                                        placeholder="999 999 999 999"
                                                        class="form-control form-control-user">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="name" id="nome" name="endereco"
                                                class="form-control form-control-user" aria-describedby="emailHelp"
                                                placeholder="Endereço" required="">


                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="senha" class="form-control form-control-user"
                                                id="senha" placeholder="Digite a sua senha" required="">
                                        </div>


                                        <button class="btn btn-google btn-user btn-block" type="submit">CRIAR
                                            CONTA</button>

                                    </form>
                                    <a href="../../product/create_product..php">produto</a>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="#"
                                            onclick="alert('Por favor contacte o Administrador do Sistema')">Voltar</a>
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