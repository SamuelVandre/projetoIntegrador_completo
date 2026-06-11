const botoes = document.querySelectorAll(".saibaBtn");

botoes.forEach((botao) => {

    botao.addEventListener("click", () => {

        const descricao =
            botao.parentElement.querySelector(".textoDesc");

        descricao.classList.toggle("ativo");

        if (descricao.classList.contains("ativo")) {
            botao.textContent = "Mostrar Menos";
        } else {
            botao.textContent = "Saiba Mais";
        }

    });

});