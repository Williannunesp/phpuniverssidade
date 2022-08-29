<?php

if(!empty($_POST["add_post"])){
    require_once("config.php");
    
    $sql = "insert into portifolio (nome, profissao, nascimento, idade, celular, grau_prof, cidade, email, resumo_par, resumo_pro, facebook, instagram, linkedin) 
    values (:nome, :profissao, :nascimento, :idade, :celular, :grau_prof, :cidade, :email, :resumo_par, :resumo_pro, :facebook, :instagram, :linkedin)";
    $pdo_statment = $pdo->prepare($sql);
    $result = $pdo_statment->execute(array(
        ":nome"=>$_POST["name"],
        ":profissao"=>$_POST["profissao"],
        ":nascimento"=>$_POST["datanasc"],
        ":idade"=>$_POST["idade"],
        ":celular"=>$_POST["telefone"],
        ":grau_prof"=>$_POST["nprofissao"],
        ":cidade"=>$_POST["cidade"],
        ":email"=>$_POST["email"],
        ":resumo_par"=>$_POST["resumope"],
        ":resumo_pro"=>$_POST["resumopr"],
        ":facebook"=>$_POST["facebook"],
        ":instagram"=>$_POST["instagram"],
        ":linkedin"=>$_POST["linkedin"]
    ));
    echo $result;
    if(!empty($result)){
        header("location:index.php");
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Add - Portifólio</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="padding: 10px;">
<div class="alert alert-dark" role="alert">
    <h1>Cadastre Seu Portifólio</h1>
</div>
<form action="" method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label"></label>
  <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label"></label>
  <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
</div>
<div class="mb-3">
  <label for="profissao">Profissao*</label>
  <input type="text" name="profissao" class="form-control" id="profissao" required>
</div>
<div class="mb-3">
    <label for="Nivel_prof">Nivel Profissional*</label>
    <input type="text" name="nprofissao" class="form-control" id="nprofissao"  required>
</div>
<div class="mb-3">
    <label for="cidade">Cidade*</label>
    <input type="text" name="cidade" class="form-control" id="cidade" required>
</div>
<div class="mb-3">
    <label for="telefone">Telefone*</label>
    <input type="tel" name="telefone" class="form-control" id="telefone" required>
</div>
<div class="mb-3">
    <label for="datanasc">Data de Nascimento*</label>
    <input type="date" class="form-control" name="datanasc" id="datanasc"  required>
</div>
<div class="mb-3">
    <label for="idade">Idade*</label>
    <input type="number" name="idade" class="form-control" id="idade"  required>
</div>
<div class="mb-3">
    <textarea class="form-control" name="resumope" rows="5" placeholder="Resumo Pessoal" required></textarea>
</div>
<div class="mb-3">
<textarea class="form-control" name="resumopr" rows="5" placeholder="Resumo Profissional" required></textarea>
</div>
<h3>Insira o link de suas redes sociais abaixo. (Opicional)</h3>
<div class="mb-3">
    <label for="facebook">Link Facebook</label>
    <input type="link" name="facebook" class="form-control" id="facebook">
</div>
<div class="mb-3">
    <label for="instagram">Link Instagram</label>
    <input type="text" name="instagram" class="form-control" id="instagram" >
</div>
<div class="mb-3">
    <label for="linkedin">Link Linkedin</label>
    <input type="text" name="linkedin" class="form-control" id="linkedin" >
</div>
<!-- <button type="submit" name="add_post" class="btn btn-primary">Salvar</button> -->
<input class="btn btn-success" type="submit" name="add_post" value="Salvar">
<a class="btn btn-secundary" href="index.php">Cancelar</a>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>