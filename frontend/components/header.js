const body = document.querySelector('body');

body.insertAdjacentHTML('afterbegin', `<header class="cabecalho">

    <div class="cabecalho__logo">
        <img src="/projetoIntegrador_completo/frontend/assets/icons/NayaraLeal.svg" alt="Logo da empresa">
    </div>

    <button class="cabecalho__hamburguer" id="hamburguer">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <div class="cabecalho__menu" id="menu">

        <nav class="cabecalho__nav">
            <a href="/projetoIntegrador_completo/index.html">Home</a>
            <a href="/projetoIntegrador_completo/frontend/pages/projeto.html">Projetos</a>
            <a href="/projetoIntegrador_completo/frontend/pages/servicos.html">Serviços</a>
            <a href="/projetoIntegrador_completo/frontend/pages/sobre.html">Sobre</a>
        </nav>

        <a href="/projetoIntegrador_completo/frontend/pages/orcamentos.html" class="cabecalho__botao">
            Solicitar orçamento
        </a>

    </div>

</header>`);

const hamburguer = document.getElementById("hamburguer");
const menu = document.getElementById("menu");

hamburguer.addEventListener("click", () => {
    menu.classList.toggle("ativo");
});

