<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema Web 2.0</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    </head>

    <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                        <img src="img/bootstrap-solid.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        Sistema Web 2.0
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#" aria-current="page">Cadastro</a>  
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="consulta.php">Consulta</a>  
                                        </li>
                                    </ul>
                                </div>
                    </div>
                </nav>
            </div>    
        </div>    

        <div class="row">
            <div class="col">
                <!-- As a heading -->
                <nav class="navbar bg-light">
                    <div class="container-fluid">
                        <span class="navbar-brand">Cadastro de Usu??rios</span>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col">&nbsp;</div>
        </div>

        <div class="row">
            <div class="col">
                <form class="row g-3" method="post" action="controller/ControllerCadastro.php?funcao=cadastro" id="form" name="form">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="txtEmail" name="txtEmail">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="txtSenha" name="txtSenha">
                    </div>
                    <div class="col-12">
                        <label for="inputAdress" class="form-label">Endere??o</label>
                        <input type="text" class="form-control" id="txtEndereco" name="txtEndereco">
                    </div>
                    <div class="col-6">
                        <label for="inputAddress2" class="form-label">Bairro</label>
                        <input type="text" class="form-control" id="txtBairro" name="txtBairro">
                    </div>
                    <div class="col-6">
                        <label for="inputAddress2" class="form-label">Cep</label>
                        <input type="text" class="form-control" id="txtCep" name="txtCep">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="txtCidade" name="txtCidade">
                    </div>
                    <div class="col-md-6">
                        <label for="cboEstado" class="form-label">Estado</label>
                        <select id="cboEstado" name="cboEstado" class="for-select">
                            <option selected>Escolha...</option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AP</option>
                            <option>AM</option>
                            <option>CE</option>
                            <option>DF</option>
                            <option>ES</option>
                            <option>GO</option>
                            <option>MA</option>
                            <option>MT</option>
                            <option>MS</option>
                            <option>MG</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PR</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>RJ</option>
                            <option>RN</option>
                            <option>RS</option>
                            <option>RO</option>
                            <option>RR</option>
                            <option>SC</option>
                            <option>SP</option>
                            <option>SE</option>
                            <option>TO</option>
                            
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>
                    </div>
                </form>
            </div>    
        </div>       
    </div>
    </body>
</html>