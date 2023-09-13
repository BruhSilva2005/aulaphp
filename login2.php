<?php




class usuario{

    public $email;
    public $senha;

    public function __construct($email,$senha){

    $this->email = $email;
    $this->senha = $senha;
    }
    public function getEmail(){
        return $this -> email;
    }
    public function getsenha() {
        return $this->senha;
    }
}
$usuario = null;

if($_SERVER['REQUEST_METHOD']==='POST'){

    if(isset($_POST['email'])&& isset($_POST['senha'])){

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuario = new Usuario($email,$senha);
    }

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <h1 class="titulo">Sistema AMTU</h1>
<center><img src="https://st4.depositphotos.com/20858482/38230/v/450/depositphotos_382305020-stock-illustration-bus-icon-vector-black-bus.jpg" width="300px" height="300px"></center>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Cliente</title>

    <style>
            body{
            font-family: Arial, sans-serif;
            margin: 5px;
            padding: 20px;
           
       }

       .form-container {
            max-width: 200px;
            margin: auto;
            padding: 50px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);

            
}
.form-group {
            margin-bottom: 20px;
}
        
.botao{
    width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: #f7f8f9;
}
button {
            background-color: #1e232c;
            width: 100%;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 0 auto;
        }
        .titulo {
            font-family: 'Pacifico', cursive;
            font-size: 36px;
            color: #333;
            text-align: center;
            transition: color 0.3s ease-in-out;
        }

        .titulo:hover {
            color: #ff5733; /* Cor de destaque ao passar o mouse */
        }
       </style>
</head>

<body>
</div>
    <div class = "form-container">
        <h1>Cadastro de Usuario</h1>

        <form method = "post">
        <label for="email"></label><br>
            <input class="botao" type="email" id="email" name="email" required placeholder="Digite seu E-mail"><br>
        <label for="senha"></label><br>
            <input class="botao" type="password" id="senha" name="senha" required placeholder="Digite sua Senha"><br>
<br>
            <button type="submit" id="login">Login</button><br>
            <button type="submit" id="cadastrar" style="background-color: 	#DCDCDC !important">Cadastrar</button>

        </form>

    </div>
    <script>
  document.getElementById("cadastrar").addEventListener("click", function() {
    window.location.href = "cadastrar.php";
  });
  document.getElementById("login").addEventListener("click", function() {
    window.location.href = "futuro_menu.php";
  });
  </script>
 
    <?php if($usuario):?>

    <div class = "form-container">
        <!-- Conteúdo do formulário aqui -->
        <h2>Dados do Cadastrado:</h2>
        <p><strong>email:</strong> <?= $usuario->getEmail() ?></p>
        <p><strong>senha:</strong> <?= $usuario->getsenha() ?></p>
    </div>
    <?php endif; ?>
</body>
</html>