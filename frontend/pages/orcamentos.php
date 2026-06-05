<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orçamentos</title>
  <link rel="stylesheet" href="../css/orcamentos.css">
  </head>

<body>

  <?php
    include_once('../components/header.php');
  ?>
  

  <main class="pagina-principal">
    <div class="formulario-container">

      <!-- Textos de apresentação -->
      <p class="subtitulo">ENTRE EM CONTATO</p>
      <h1 class="titulo">Inicie seu Projeto</h1>
      <p class="descricao">Preencha o formulário e entraremos em contato em até 24h.</p>

      <!-- Formulário de contato -->
      <form class="formulario" id="formularioContato">

        <!-- Linha com Nome e E-mail lado a lado -->
        <div class="formulario__linha">

          <div class="formulario__grupo">
            <label for="nome">NOME COMPLETO</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
          </div>

          <div class="formulario__grupo">
            <label for="email">E-MAIL</label>
            <input type="email" id="email" name="email" placeholder="seu@email.com" required>
          </div>

        </div>

        <!-- Tipo de projeto: menu suspenso (select) -->
        <div class="formulario__grupo">
          <label for="tipoProjeto">TIPO DE PROJETO</label>
          <div class="formulario__select-wrapper">
            <select id="tipoProjeto" name="tipoProjeto" required>
              <option value="" disabled selected>Residencial</option>
              <option value="residencial">Residencial</option>
              <option value="interiores">Interiores / Consultoria</option>
              <option value="comercial">Comercial</option>
            </select>
          </div>
        </div>

        <!-- Área de texto para mensagem -->
        <div class="formulario__grupo">
          <label for="mensagem">MENSAGEM</label>
          <textarea id="mensagem" name="mensagem" rows="6"
            placeholder="Descreva brevemente seu projeto..." required></textarea>
        </div>

        <!-- Botão de envio -->
        <button type="submit" class="formulario__botao">ENVIAR SOLICITAÇÃO</button>

      </form>
    </div>
  </main>

  <?php
    include_once('../components/footer.php');
  ?>

</body>
</html>