<?php
 require_once "sistem-acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" integrity="sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap 5.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="imgs/accets/favicon.svg" type="image/x-icon"/>
    <link rel="stylesheet" href="scss/media/mediaquerie.css">
    <link rel="stylesheet" href="scss/style.css">
    <link rel="stylesheet" href="scss/navbar/navbar.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="scss/menu-conta/menu-conta.css">
=======
    <link rel="stylesheet" href="scss/menu-conta/menu-conta-home.css">
>>>>>>> f5d3d5a706015c64e0ad54ec85cee64c0718133a
    <link rel="stylesheet" href="scss/dashboard/home/home.css">
    <link rel="stylesheet" href="scss/dashboard/footer/footer.css">
    <title>Corp Genius</title>
</head>
<body>
    <div class="container">
        <div class="mt-3"><!-- Começo da row -->
            <nav class="navbar navbar-expand-lg navbar-expand- p-0 mb-3">
                <div class="container-fluid my-0 py-0">
                    <a class="navbar-brand" href="home.php"><img src="imgs/accets/Logo-pequeno-navbar.svg" alt="" srcset="" class="pe-2 my-0 py-0" style="height:7.3vh;" >Corp Genius</a>
                    <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <div>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="meuschamados.php">Meus chamados</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="chamadospublicos.php">Chamados públicos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="funcionarios.php">Funcionários</a>
                                </li>
                            </ul>
                        </div> 
                    </div>
                </div>
            </nav><!-- Fim da navbar -->
        </div>  
         
        <div class="config-layout">
          
            <main class="col-lg-8 col-12 py-2 px-3" id="dashboard"><!-- Começo da dashboard-->
                    <header class="mt-1">
                            <h2>Bem vindo Jacobet</h2>
                            <p class="hero">Não esqueça de conferir seus chamados</p>
                    </header>
                    <main>
                        <header class="col-12 col-sm-6">
                                <h6>Abra um novo chamado aqui</h6>
                                <p class="hero lh-1">Antes de abrir novos chamados para problemas anteriores, confira se o mesmo já não foi respondido.</p>
                        </header> 
                        <form action="sistem-registra.php" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Título:</label>
                                        <input type="name" name="titulo" class="form" id="exampleFormControlInput1" maxlength="28" placeholder="Título do chamado">
                                    </div>

                                    <label for="exampleFormControlInput1" class="form-label">Categoria:</label>
                                    <select class="form"  name="categoria" aria-label="Default select example">
                                        <option selected>Hardware</option>
                                        <option value="1">Software</option>
                                        <option value="2">RH</option>
                                        <option value="3">Outro</option>
                                    </select>
                                    <div class="mt-3">
                                    <label for="exampleFormControlInput1" class="form-label">Publicar chamado como:</label>
                                        <div class="d-flex">
                                            <input class="form-check-input me-1" type="radio"  name="pp"  id="publico" value="publico">
                                            <label class="form-check-label label-radio me-5" for="publico">
                                                Público
                                            </label>
                                    
                                            <input class="form-check-input me-1" type="radio"  name="pp"  id="privado" value="privado" checked>
                                            <label class="form-check-label label-radio" for="privado">
                                                Privado
                                            </label>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-12 col-lg-6 mt-4 mt-sm-0">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="">Descreva o chamado:</label>
                                        <p class="hero lh-1 w-100">Lembre-se de quanto mais claro for a descrição, mais rápido o chamado pode ser solucionado.</p>
                                        <textarea class="form"  name="descricao" id="exampleFormControlTextarea1" rows="3" maxlength="180"></textarea>
                                        <div>
                                        <h5 class="text-success fw-bold">Chamado enviado com sucesso.</h5>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <footer class="d-flex justify-content-center">
                                    <button class="button-primario">Enviar</button>
                                </footer>
                            </div>
                        </form>
                    </main>
            </main><!-- Fim da dashboard -->
                
            <aside class="col-lg-3 col-12 p-2" id="menu-conta"><!-- Começo do aside conta -->
                <header class="mt-2 mb-0">
                    <div class="d-flex justify-content-center mb-0">
                        <div class="container-foto-perfil d-flex justify-content-center">
                                <img src="imgs/jacobet-perfil.png" alt="" srcset=""class="foto-perfil">
                        </div>
                    </div>
                    <div class="hero d-flex justify-content-center m-0 p-0">
                        <div class="d-block text-center">
<<<<<<< HEAD
                            <h6 class="m-0 p-0"><?php echo $_SESSION['id']; ?></h6>
=======
                            <h6 class="m-0 p-0">Jacobet Terrie</h6>
>>>>>>> f5d3d5a706015c64e0ad54ec85cee64c0718133a
                            <p class="m-0 p-0">Estágiario</p>
                        </div>
                        
                    </div>
                </header>
                <main class="d-flex justify-content-center m-0 p-0">
                            <div class="container-menu-conta">
                                <div class="col d-flex p-2 col-item">
                                    <div class="icon-button-primario me-2"><i class="fa-solid fa-thumbtack"></i></div>
                                     <p class="p-align-center">Dezembro de 2022</p>
                                </div>
                                <div class="content-menu-conta-line-1"></div>
                                <div class="col d-flex p-2 col-item">
                                    <div class="icon-button-primario me-2"><i class="fa-regular fa-envelope"></i></div>
<<<<<<< HEAD
                                   <p class="p-align-center">estagiario.corp@genius.com</p>
=======
                                   <p class="p-align-center"> estagiario.corp@genius.com</p>
>>>>>>> f5d3d5a706015c64e0ad54ec85cee64c0718133a
                                </div>
                                <div class="content-menu-conta-line-2"></div>
                                <div class="col d-flex p-2 m-0 p-0">
                                    <div class="icon-button-primario me-2 mb-0 pb-0"><i class="pb-0 mb-0 fa-solid fa-phone"></i></div>
<<<<<<< HEAD
                                     <p class="p-align-center">72 9 154873</p>
=======
                                     <p class="p-align-center">(12) 3 4567 - 8910</p>
>>>>>>> f5d3d5a706015c64e0ad54ec85cee64c0718133a
                                </div>
                            </div>
                </main>
                <footer class="d-flex justify-content-center">
                            <a class="btn button-primario" href="sistem-logoff.php">logout</a>
                </footer>
            </aside><!-- Fim do aside conta -->
        </div><!-- Fim do d-flex justify-content-between -->

        <footer class="d-flex justify-content-center mt-1 fter"><!-- Começo do footer -->
                <p>@Corp Genius</p>
        </footer><!-- Fim do footer -->
        
    </div><!-- Fim do container -->


    <!-- Bootstrap 5.0 Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>