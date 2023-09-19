<?php
 require_once "sistem-acesso.php";

  //Arrray onde apresentará os chamados
 $chamados = [];
 //Abrir o arquivo apenas para leitura (r)
 $arquivo = fopen('arquivo.md', 'r');
 
 //While percorre os itemns enquanto há linhas preenchidas no arquivo
 while(!feof($arquivo)){  //feof --> Testa pelo fim do arquivo
      $registro = fgets($arquivo); //fgets recupera o que está dentro da linha
      $chamados[] = $registro; //Colocando os dados dentro de um array para depois apresentar eles para o usuário
 }
 //Fechando o arquivo aberto
 fclose($arquivo);
 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap 5.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="imgs/accets/favicon.svg" type="image/x-icon"/>
    <link rel="stylesheet" href="scss/media/mediaquerie.css">
    <link rel="stylesheet" href="scss/style.css">
    <link rel="stylesheet" href="scss/navbar/navbar.css">
    <link rel="stylesheet" href="scss/menu-conta/menu-conta.css">
    <link rel="stylesheet" href="scss/dashboard/home/home.css">
    <link rel="stylesheet" href="scss/dashboard/footer/footer.css">
    <link rel="stylesheet" href="scss/dashboard/meuschamados/meuschamados.css">
    <title>Meus chamados</title>
</head>
<body>
    <div class="container">
        <div class="mt-3"><!-- Começo da row -->
            <nav class="navbar navbar-expand-lg p-0 mb-3">
                <div class="container-fluid my-0 py-0">
                    <a class="navbar-brand" href="home.php"><img src="imgs/accets/Logo-pequeno-navbar.svg" alt="" srcset="" class="pe-2 my-0 py-0" style="height:7.3vh;" >Corp Genius</a>
                    <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <div>
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="home.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="meuschamados.php">Meus chamados</a>
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
            <main class="col-lg-8 p-2" id="dashboard"><!-- Começo da dashboard-->
                    <header>
                            <h2>Meus chamados</h2>
                            <p class="hero">Não esqueça de conferir seus chamados</p>
                    </header>
                    <main>
                        <div class="row justify-content-center config-responsivo">
                        <?php foreach($chamados as $chamado){ ?>
                        <?php  $chamado_dados = explode('#', $chamado);
                            if($_SESSION['perfil_id'] == 2) {
                                if($_SESSION['id'] != $chamado_dados[0]){
                                    continue;
                                }
                            }
                            if(count($chamado_dados) < 4){
                                continue;
                            }
                        ?>
                            <div class="col-sm-6 card-meus-chamados">
                                <h5 class="fw-bold mt-1"><?= $chamado_dados[1]?></h5>
                                <span class="badge bg-purple"><?= $chamado_dados[3]?></span>
                                <span class="badge bg-purple"><?= $chamado_dados[2]?></span>
                                <p class="lh-1 mt-1 "><?= $chamado_dados[4]?>
                                </p>
                                <div class="d-flex justify-content-center mb-2">
                                    <button class="button-primario-meus-chamados">Visualizar</button>
                                </div>
                            
                            </div>
                            <?php } ?> </div>
                        <footer class="d-flex justify-content-center mt-3">
                            <button class="d-flex justify-content-center button-primario-meus-chamados-paginacao">1</button>
                            <button class="d-flex justify-content-center button-primario-meus-chamados-paginacao">2</button>
                            <button class="d-flex justify-content-center button-primario-meus-chamados-paginacao">3</button>
                        </footer>
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
                            <h6 class="m-0 p-0">Jacobet Terrie</h6>
                            <p class="m-0 p-0">Estágiario</p>
                        </div>
                        
                    </div>
                </header>
                <main class="d-flex justify-content-center">
                            <div class="container-menu-conta">
                                <div class="col d-flex p-2 col-item">
                                    <div class="icon-button-primario me-2"><i class="fa-solid fa-thumbtack"></i></div>
                                     <p class="p-align-center">Dezembro de 2022</p>
                                </div>
                                <div class="content-menu-conta-line-1"></div>
                                <div class="col d-flex p-2 col-item">
                                    <div class="icon-button-primario me-2"><i class="fa-regular fa-envelope"></i></div>
                                   <p class="p-align-center"> estagiario.corp@genius.com</p>
                                </div>
                                <div class="content-menu-conta-line-2"></div>
                                <div class="col d-flex p-2">
                                    <div class="icon-button-primario me-2"><i class="fa-solid fa-phone"></i></div>
                                     <p class="p-align-center">(12) 3 4567 - 8910</p>
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