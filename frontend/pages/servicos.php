<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Serviços</title>
  <link rel="stylesheet" href="../css/servicos.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,400&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

  <?php
    include_once('../components/header.php');
  ?>

  <!-- HERO -->
  <section class="hero">
    <div class="hero__overlay"></div>
    <div class="hero__conteudo">
      <p class="hero__subtitulo">NAYARA LEAL ARQUITETURA</p>
      <h1 class="hero__titulo">Serviços</h1>
      <p class="hero__descricao">Transformamos ambientes em experiências sofisticadas, funcionais e atemporais.</p>
      <a href="orcamentos.html" class="hero__botao">SOLICITAR ORÇAMENTO</a>
    </div>
  </section>


  <!-- INTRO -->
  <section class="intro">
    <div class="intro__texto">
      <div class="intro__linha"></div>
      <h2 class="intro__titulo">Projetos pensados para<br>valorizar cada detalhe</h2>
      <p class="intro__descricao">
        Desenvolvemos projetos arquitetônicos e de interiores que unem estética, funcionalidade e personalidade.
        Cada ambiente é planejado de forma exclusiva, respeitando o estilo de vida, as necessidades
        e os objetivos de cada cliente.
      </p>
    </div>
    <div class="intro__imagem">
      <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=700&q=80" alt="Interior sofisticado">
    </div>
  </section>


  <!-- NOSSOS SERVIÇOS -->
  <section class="servicos">
    <p class="servicos__subtitulo">O QUE OFERECEMOS</p>
    <h2 class="servicos__titulo">Nossos serviços</h2>
    <div class="servicos__divisor"></div>

    <div class="servicos__grid">

      <div class="servico-card">
        <div class="servico-card__imagem-wrap">
          <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=600&q=80" alt="Arquitetura Residencial">
          <div class="servico-card__icone">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z"/>
              <path d="M9 21V12h6v9"/>
            </svg>
          </div>
        </div>
        <div class="servico-card__corpo">
          <h3 class="servico-card__nome">Arquitetura Residencial</h3>
          <p class="servico-card__descricao">Projetos residenciais personalizados que unem conforto, sofisticação e funcionalidade. Desenvolvemos ambientes acolhedores e modernos, valorizando iluminação, circulação e aproveitamento inteligente dos espaços.</p>
        </div>
      </div>

      <div class="servico-card">
        <div class="servico-card__imagem-wrap">
          <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=600&q=80" alt="Design de Interiores">
          <div class="servico-card__icone">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <rect x="3" y="7" width="18" height="13" rx="1"/>
              <path d="M8 7V5a2 2 0 014 0v2"/>
            </svg>
          </div>
        </div>
        <div class="servico-card__corpo">
          <h3 class="servico-card__nome">Design de Interiores</h3>
          <p class="servico-card__descricao">Criamos interiores elegantes e funcionais, alinhados ao estilo e à personalidade de cada cliente. Trabalhamos composição de cores, iluminação, mobiliário e decoração para transformar ambientes em experiências únicas.</p>
        </div>
      </div>

      <div class="servico-card">
        <div class="servico-card__imagem-wrap">
          <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=600&q=80" alt="Projetos Comerciais">
          <div class="servico-card__icone">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M3 21h18M5 21V7l7-4 7 4v14"/>
              <path d="M9 21v-6h6v6"/>
            </svg>
          </div>
        </div>
        <div class="servico-card__corpo">
          <h3 class="servico-card__nome">Projetos Comerciais</h3>
          <p class="servico-card__descricao">Desenvolvimento de ambientes comerciais sofisticados e estratégicos, pensados para fortalecer a identidade visual da marca e proporcionar conforto aos clientes e colaboradores.</p>
        </div>
      </div>

      <div class="servico-card">
        <div class="servico-card__imagem-wrap">
          <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?w=600&q=80" alt="Consultoria Arquitetônica">
          <div class="servico-card__icone">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <circle cx="12" cy="8" r="4"/>
              <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
            </svg>
          </div>
        </div>
        <div class="servico-card__corpo">
          <h3 class="servico-card__nome">Consultoria Arquitetônica</h3>
          <p class="servico-card__descricao">Orientação profissional para reformas, decoração, escolha de materiais, paleta de cores e otimização de ambientes, garantindo mais segurança e assertividade nas decisões.</p>
        </div>
      </div>

      <div class="servico-card">
        <div class="servico-card__imagem-wrap">
          <img src="https://images.unsplash.com/photo-1581858726788-75bc0f6a952d?w=600&q=80" alt="Reformas e Remodelações">
          <div class="servico-card__icone">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M14.7 6.3a1 1 0 010 1.4l-8 8a1 1 0 01-.4.2l-3 1 1-3a1 1 0 01.2-.4l8-8a1 1 0 011.4 0z"/>
              <path d="M17 4l3 3"/>
            </svg>
          </div>
        </div>
        <div class="servico-card__corpo">
          <h3 class="servico-card__nome">Reformas e Remodelações</h3>
          <p class="servico-card__descricao">Planejamento completo para renovação de ambientes, trazendo modernidade, valorização estética e melhor aproveitamento dos espaços existentes.</p>
        </div>
      </div>

      <div class="servico-card">
        <div class="servico-card__imagem-wrap">
          <img src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?w=600&q=80" alt="Projeto 3D e Renderização">
          <div class="servico-card__icone">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/>
              <path d="M3.27 6.96L12 12.01l8.73-5.05M12 22.08V12"/>
            </svg>
          </div>
        </div>
        <div class="servico-card__corpo">
          <h3 class="servico-card__nome">Projeto 3D e Renderização</h3>
          <p class="servico-card__descricao">Apresentação realista dos ambientes através de modelagem 3D, permitindo visualizar cada detalhe do projeto antes da execução.</p>
        </div>
      </div>

    </div>
  </section>


  <!-- BANNER DESTAQUE -->
  <section class="banner">
    <div class="banner__imagem">
      <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=700&q=80" alt="Cada projeto é único">
    </div>
    <div class="banner__texto">
      <div class="banner__linha"></div>
      <h3 class="banner__titulo">Cada projeto é único</h3>
      <p class="banner__descricao">Acreditamos que arquitetura vai além da estética. Nosso objetivo é criar ambientes que transmitam conforto, personalidade e bem-estar, através de soluções inteligentes, elegantes e funcionais.</p>
    </div>
  </section>


  <!-- COMO FUNCIONA -->
  <section class="processo">
    <p class="processo__subtitulo">ETAPAS</p>
    <h2 class="processo__titulo">Como funciona o atendimento</h2>
    <div class="processo__divisor"></div>

    <div class="processo__etapas">

      <div class="etapa">
        <div class="etapa__icone">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
          </svg>
        </div>
        <span class="etapa__numero">01</span>
        <p class="etapa__descricao">Briefing e entendimento das necessidades</p>
      </div>

      <div class="etapa__conector"></div>

      <div class="etapa">
        <div class="etapa__icone">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <rect x="3" y="3" width="18" height="18" rx="2"/>
            <path d="M3 9h18M9 21V9"/>
          </svg>
        </div>
        <span class="etapa__numero">02</span>
        <p class="etapa__descricao">Desenvolvimento do conceito e referências</p>
      </div>

      <div class="etapa__conector"></div>

      <div class="etapa">
        <div class="etapa__icone">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M12 20h9M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/>
          </svg>
        </div>
        <span class="etapa__numero">03</span>
        <p class="etapa__descricao">Criação do projeto arquitetônico</p>
      </div>

      <div class="etapa__conector"></div>

      <div class="etapa">
        <div class="etapa__icone">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <rect x="2" y="3" width="20" height="14" rx="2"/>
            <path d="M8 21h8M12 17v4"/>
          </svg>
        </div>
        <span class="etapa__numero">04</span>
        <p class="etapa__descricao">Apresentação em 3D e ajustes</p>
      </div>

      <div class="etapa__conector"></div>

      <div class="etapa">
        <div class="etapa__icone">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M9 11l3 3L22 4"/>
            <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/>
          </svg>
        </div>
        <span class="etapa__numero">05</span>
        <p class="etapa__descricao">Entrega final do projeto</p>
      </div>

    </div>
  </section>


  <!-- CTA -->
  <section class="cta">
    <p class="cta__subtitulo">VAMOS CONVERSAR</p>
    <h2 class="cta__titulo">Pronto para transformar<br>seu espaço?</h2>
    <p class="cta__descricao">Entre em contato e solicite um orçamento personalizado.</p>
    <a href="orcamentos.html" class="cta__botao">SOLICITAR ORÇAMENTO</a>
  </section>


  <!-- RODAPÉ -->
  <footer class="rodape">
    <div class="rodape__conteudo">

      <div class="rodape__contatos">
        <p class="rodape__titulo">Contatos:</p>
        <p>exemplo@email.com</p>
        <p>(19) 1001010101</p>
        <p>(endereço)</p>
      </div>

      <div class="rodape__redes">
        <p class="rodape__titulo">Redes Sociais:</p>
        <div class="rodape__links">
          <a href="https://www.linkedin.com/in/arq-nayaraleal/">LinkedIn</a>
          <a href="https://www.instagram.com/arquitetanayaraleal/">Instagram</a>
        </div>
      </div>

    </div>

    <div class="rodape__base">
      <p>Copyright © 2026 – Nayara Leal Arquitetura – Todos os direitos reservados</p>
      <a href="https://www.gov.br/mdh/pt-br/acesso-a-informacao/politica-de-privacidade">Políticas de Privacidade</a>
    </div>
  </footer>

</body>
</html>