<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corp Genius - Login</title>
    <link rel="shortcut icon" href="imgs/accets/favicon.svg" type="image/x-icon"/>
    <link rel="stylesheet" href="scss/login/style-login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
  <div class="container-fluid">
    <img src="imgs/accets/Logo-pequeno.svg" alt="" srcset="" class="mt-3 ms-2 logo-pequeno">
    <main class="mt-4 flex-column justify-content-center">
        <header class="col-lg-2 mt-2 d-flex justify-content-center logo-medio">
            <img src="imgs/accets/Logo-medio.svg" alt="" srcset="" class="logo-medio flex-column mt-4 justify-content-center">
        </header>  
    
        <section class="hero mt-4 flex-column justify-content-center logo-medio pb-2">
            <h4>Login</h4>
            <p>A empresa que gera ideias</p>
        
            <form action="sistem-login.php" method="POST">
                <div class="form-group mt-4">
                    <label for="Email" class="label-login">Email:</label>
                    <input name="email" type="email" class="form-login">
                </div>
                <div class="form-group mt-4">
                    <label for="Senha" class="label-login">Senha:</label>
                    <input name="senha" type="password" class="form-login">
                </div>
                <?php  if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
                    <div class="text-danger fw-bold pt-1">Usuário ou senha inválidos.</div>
                <?php } ?>
                <?php  if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>
                    <div class="text-danger fw-bold pt-1">Faça login antes de tentar acessar.</div>
                <?php } ?>
                <button class="button-login mt-4" type="submit">Login</button>
            </form>
        </section>
        <footer>
            <p class="mt-2 pt-3">@Corp Genius</p>
        </footer>
   
    </main>
  </div>
</body>
</html>