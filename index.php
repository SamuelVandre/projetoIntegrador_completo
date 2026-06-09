<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nayara Leal</title>
    <link rel="stylesheet" href="./frontend/css/home.css">
</head>

<body>

    <?php
    // importa e exibe o header
    include_once('./frontend/components/header.php');
    ?>

    <section class="hero">

        <img class="hero-bg"
            src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1974&auto=format&fit=crop">

        <div class="hero-overlay">

            <img class="hero-person" src="./frontend/assets/images/nayarapng.png">

            <div class="hero-text">
                <h1>Nayara Leal</h1>
                <p>Arquitetura e Interiores</p>

                <div class="ornament"></div>

                <button class="hero-btn" onclick="window.location.href='/frontend/pages/orcamentos.php'">Solicitar orçamento</button>
            </div>

        </div>

    </section>

    <section>
        <div class="section-title">
            <div class="line"></div>
            <h2>O que oferecemos</h2>
        </div>

        <div class="servicos__grid">

            <div class="servico-card">
                <div class="servico-card__imagem-wrap">
                    <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=600&q=80" alt="Arquitetura Residencial">
                    <div class="servico-card__icone">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M3 9.5L12 3l9 6.5V20a1 1 0 01-1 1H4a1 1 0 01-1-1V9.5z" />
                            <path d="M9 21V12h6v9" />
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
                            <rect x="3" y="7" width="18" height="13" rx="1" />
                            <path d="M8 7V5a2 2 0 014 0v2" />
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
                            <path d="M3 21h18M5 21V7l7-4 7 4v14" />
                            <path d="M9 21v-6h6v6" />
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
                            <circle cx="12" cy="8" r="4" />
                            <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7" />
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
                            <path d="M14.7 6.3a1 1 0 010 1.4l-8 8a1 1 0 01-.4.2l-3 1 1-3a1 1 0 01.2-.4l8-8a1 1 0 011.4 0z" />
                            <path d="M17 4l3 3" />
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
                            <path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z" />
                            <path d="M3.27 6.96L12 12.01l8.73-5.05M12 22.08V12" />
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

    <section class="container">

        <div class="section-title">
            <div class="line"></div>
            <h2>Redes Sociais</h2>
        </div>

        <div class="social-wrapper">

            <div class="video-box">
                <div class="video-top">@arquitetanayaraleal</div>

                <video paused loop controls>
                    <source src="./frontend/assets/videos/instavideo.mp4" type="video/mp4">
                </video>
            </div>

            <div class="social-side">

                <div class="contact-row">

                    <div class="contact-box">
                        📧 exemplo@email.com
                    </div>

                    <div class="contact-box">
                        📱 (19) 99999-9999
                    </div>

                </div>

                <div class="comments">

                    <div class="comment">
                        <strong>@usuario1</strong>
                        <p>É verdade! Seu imóvel será mais valorizado 👏👏</p>
                    </div>

                    <div class="comment">
                        <strong>@usuario2</strong>
                        <p>Não sabia dessa importância! Amei o conteúdo 😍</p>
                    </div>

                    <div class="comment">
                        <strong>@usuario3</strong>
                        <p>A contratação de um arquiteto faz toda diferença ❤️</p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="about container">
         <div class="section-title">
            <div class="line"></div>
            <h2>Sobre</h2>
        </div>

        <div class="container about-container">

            <div class="about-image">
                <img src="./frontend/assets/images/nayara_fotinha.jpg" alt="Arquiteta">
            </div>

            <div class="about-content">
                <span class="section-subtitle">APRESENTAÇÃO</span>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and
                    typesetting industry. Lorem Ipsum has been the industry's
                    standard dummy text ever since the 1500s, when an unknown
                    printer took a galley of type and scrambled it to make a
                    type specimen book.
                </p>

                <p>
                    It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged.
                    It was popularised in the 1960s.
                </p>
            </div>

        </div>
    </section>

    <?php
    include_once('./frontend/components/footer.php');
    ?>

    <script type="module" src="/frontend/js/home.js"></script>
</body>

</html>