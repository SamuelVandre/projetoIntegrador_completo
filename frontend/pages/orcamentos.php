<!DOCTYPE html> <!-- Define que este documento segue o padrão HTML5 -->
<html lang="pt-br"> <!-- Inicia o documento HTML com o idioma Português do Brasil -->

<head>
  <meta charset="UTF-8"> <!-- Define a codificação de caracteres para suportar acentos e símbolos -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Ajusta a largura do site ao tamanho da tela do dispositivo -->
  <title>Orçamentos | Nayara Leal Arquitetura</title> <!-- Define o título que aparece na aba do navegador -->
  <link rel="stylesheet" href="../css/orcamentos.css"> <!-- Conecta o arquivo CSS externo para dar estilo à página -->
  <link rel="shortcut icon" href="../assets/icons/icone.png" type="image/x-icon"> <!-- Define o ícone (favicon) da aba do navegador -->
</head>

<body>

  <!-- Botão WhatsApp Fixo na Página -->
  <div class="whatsapp-fixo"> <!-- Container que mantém o botão fixo na tela -->
    <a href="https://wa.me/5511981961554?text=Olá! Vim pelo site e gostaria de um orçamento." 
       target="_blank"  <!-- Abre o link em uma nova aba -->
       <link rel="noopener noreferrer"> <!-- Atributo de segurança para links externos -->
      
      <svg viewBox="0 0 32 32" class="whatsapp-icone"> <!-- Inicia o desenho vetorial do ícone -->
        <!-- O 'path' abaixo é o código matemático que desenha o símbolo do WhatsApp -->
        <path d="M16 0c-8.837 0-16 7.163-16 16 0 2.825 0.733 5.476 2.017 7.783l-2.017 7.37 7.54-1.981c2.19 1.18 4.704 1.854 7.377 1.854 8.837 0 16-7.163 16-16s-7.163-16-16-16zM16 29.32c-2.43 0-4.717-0.635-6.7-1.743l-0.48-0.268-4.463 1.17 1.192-4.357-0.295-0.468c-1.22-1.938-1.928-4.24-1.928-6.705 0-7.031 5.716-12.747 12.747-12.747s12.747 5.716 12.747 12.747-5.716 12.747-12.747 12.747zM22.516 19.34c-0.357-0.178-2.109-1.040-2.437-1.16s-0.567-0.178-0.806 0.178c-0.239 0.357-0.925 1.16-1.133 1.398s-0.417 0.268-0.774 0.089c-0.357-0.178-1.506-0.555-2.868-1.771-1.059-0.945-1.775-2.113-1.982-2.47s-0.022-0.551 0.156-0.728c0.161-0.159 0.357-0.417 0.536-0.625s0.239-0.357 0.357-0.595c0.119-0.238 0.059-0.446-0.030-0.625s-0.806-1.942-1.104-2.662c-0.29-0.699-0.585-0.604-0.806-0.615s-0.447-0.013-0.685-0.013c-0.238 0-0.625 0.089-0.953 0.446s-1.251 1.221-1.251 2.978 1.28 3.454 1.459 3.692c0.178 0.238 2.519 3.847 6.103 5.395 0.852 0.368 1.517 0.588 2.036 0.753 0.856 0.272 1.636 0.233 2.251 0.141 0.686-0.102 2.109-0.862 2.407-1.696s0.298-1.547 0.209-1.696c-0.089-0.149-0.327-0.238-0.685-0.417z" fill="white" />
      </svg>
      
      <span class="notificacao-badge">1</span> <!-- Círculo vermelho de notificação -->
    </a>
  </div>

  <?php
    include_once('../components/header.php'); /* Inclui o cabeçalho global do site via PHP, garantindo consistência em todas as páginas */
  ?>
  
  <main class="pagina-principal"> <!-- Área principal de conteúdo da página -->
    <div class="formulario-container"> <!-- Cartão branco que centraliza o conteúdo -->

      <!-- Textos de apresentação -->
      <p class="subtitulo">ENTRE EM CONTATO</p> <!-- Pequeno texto auxiliar em dourado -->
      <h1 class="titulo">Inicie seu Projeto</h1> <!-- Título principal de destaque -->
      <p class="descricao">Preencha o formulário e entraremos em contato em até 24h.</p> <!-- Texto explicativo -->

      <!-- Formulário de contato -->
      <form class="formulario" id="formularioContato"> <!-- Início do bloco de campos -->

        <!-- Linha com Nome e E-mail lado a lado -->
        <div class="formulario__linha"> <!-- Container para organizar campos em linha -->

          <div class="formulario__grupo"> <!-- Agrupa label e input de Nome -->
            <label for="nome">NOME COMPLETO</label> <!-- Rótulo do campo Nome -->
            <input type="text" id="nome" name="nome" placeholder="Seu nome" required> <!-- Campo de texto obrigatório -->
          </div>

          <div class="formulario__grupo"> <!-- Agrupa label e input de E-mail -->
            <label for="email">E-MAIL</label> <!-- Rótulo do campo E-mail -->
            <input type="email" id="email" name="email" placeholder="seu@email.com" required> <!-- Campo de e-mail obrigatório -->
          </div>

        </div>

        <!-- Tipo de projeto: menu suspenso (select) -->
        <div class="formulario__grupo"> <!-- Agrupa label e seletor de projeto -->
          <label for="tipoProjeto">TIPO DE PROJETO</label> <!-- Rótulo do seletor -->
          <div class="formulario__select-wrapper"> <!-- Container para customizar a seta do select -->
            <select id="tipoProjeto" name="tipoProjeto" required> <!-- Menu de opções obrigatório -->
              <option value="" disabled selected>Residencial</option> <!-- Opção padrão desabilitada -->
              <option value="residencial">Residencial</option> <!-- Opção residencial -->
              <option value="interiores">Interiores / Consultoria</option> <!-- Opção interiores -->
              <option value="comercial">Comercial</option> <!-- Opção comercial -->
            </select>
          </div>
        </div>

        <!-- Área de texto para mensagem -->
        <div class="formulario__grupo"> <!-- Agrupa label e campo de mensagem -->
          <label for="mensagem">MENSAGEM</label> <!-- Rótulo da área de texto -->
          <textarea id="mensagem" name="mensagem" rows="6"
            placeholder="Descreva brevemente seu projeto..." required></textarea> <!-- Campo de texto de múltiplas linhas -->
        </div>

        <!-- Botão de envio -->
        <button type="submit" class="formulario__botao">ENVIAR SOLICITAÇÃO</button> <!-- Botão que envia os dados -->

      </form>
    </div>
  </main>

  <?php
    include_once('../components/footer.php'); /* Inclui o rodapé global do site via PHP */
  ?>

</body>
</html>