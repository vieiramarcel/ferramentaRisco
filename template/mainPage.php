<?php
  include("cabecalho.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>RM-AGILE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="mainPage.css"/>
  <link rel="shortcut icon" href="../Imagens/favicon.png" type="image/x-png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>

</head>

<body>
    
<div class = "background">
 <div class="container">

  <div class="titulo">
    <h1> Como gerenciar riscos a partir do perfil da sua organização</h1>
  </div>
      <div class="box">
        <a>
          <b>Tamanho da organização</b>
        </a>
        <div class="checkbox"> 
          <label>
            <input type="radio" name="quantity" value="0">Micro (até 9 empregados)</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="radio" name="quantity" value="1">Pequena (10 a 49 empregados)</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="radio" name="quantity" value="2">Média (50 a 99 empregados)</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="radio" name="quantity" value="3">Grande (100+ empregados)</label>
        </div>
      </div>

      <div class="box">
        <a>
          <b>Metodologia ágil utilizada</b>
        </a>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="metodo" value="4">Scrum</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="metodo" value="5">Kanban</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="metodo" value="6">XP</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="metodo" value="7">Outros/Hibrído</label>
        </div>
      </div>

      <div class="box">
        <a>
          <b>Consequência em caso de falha do software</b>
        </a>
        <div class="checkbox">
          <label>
            <input type="radio" name="Segmento" value="8">Catastrófica</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="radio" name="Segmento" value="9">Crítica</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="radio" name="Segmento" value="10">Marginal</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="radio" name="Segmento" value="11">Negligenciável</label>
        </div>
      </div>
      <button class="botao">Confirmar</button>

</div>
  </div>

  <script>

    $(document).ready(function () {
      $("button").click(function (e) {
        e.preventDefault();
        var names = [];
        $('input:checkbox:checked, input:radio:checked').each(function () {
          names.push(this.value);
        });
        sessionStorage.setItem('selectedItems', JSON.stringify(names));
        setTimeout(function(){ document.location.href = 'guias.php' }, 1000);
      });
    });

  </script>

</body>

</html>