<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Exmeplo de formulário com validação</h1>
  <span>*Campos obrigatórios.</span> <br><br>
  <form action="index.php" method="POST">
    <label for="nome">NOME:*</label>
    <input type="text" name="nome"><br><br>

    <label for="senha">SENHA:*</label>
    <input type="text" name="senha"><br><br>

    <label for="email">E-MAIL:*</label>
    <input type="text" name="email"><br><br>

    <label for="genero">GÊNERO:*</label>
    <input type="radio" name="genero" value="masculino">Masculino
    <input type="radio" name="genero" value="feminino">Feminino
    <input type="radio" name="genero" value="outro">Outro <br><br>

    <button name="enviado" type="submit">ENVIAR</button>
  </form>

  <?php if (isset($_POST['enviado'])) {

    $genero = "Não informado";
    if (isset($_POST['genero'])) {
      $genero = $_POST['genero'];
    } ?>

  <!-- VALIDAÇÃO DO FORMULÁRIO -->
  <?php if (empty($_POST['nome']) || strlen($_POST['nome']) < 3 || strlen($_POST['nome']) > 100) { ?>
  <p>Por favor insira um nome válido.</p>
  <?php } ?>
  <?php if (empty($_POST['senha']) || strlen($_POST['senha']) < 3 || strlen($_POST['senha']) > 16) { ?>
  <p>Por favor insira uma senha de 3 a 16 caracteres.</p>
  <?php } ?>
  <?php if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) { ?>
  <p>Por favor insira um e-mail válido.</p>
  <?php } ?>
  <?php if ($genero != 'masculino' && $genero != 'feminino' && $genero != 'outro') {
      unset($genero)  ?>
  <p>Por favor selecione um gênero dentre as opções apresentadas.</p>
  <?php } ?>

  <?php if (!empty($_POST['nome']) && !empty($_POST['senha']) && !empty($_POST['email']) && !empty($_POST['genero'])) { ?>
  <ul>
    <li>Nome: <?php echo $_POST['nome'] ?></li>
    <li>Senha: <?php echo $_POST['senha'] ?></li>
    <li>Email: <?php echo $_POST['email'] ?></li>
    <li>Gênero: <?php echo $genero ?></li>
  </ul>

  <?php }
  } ?>
</body>

</html>