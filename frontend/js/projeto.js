const botoes = document.querySelectorAll(".saibaBtn");

botoes.forEach(btn => {
    btn.addEventListener("click", (event) => {
        const projetoTextoDesc = event.target.parentElement.querySelector(".textoDesc");

        projetoTextoDesc.style.display =
            getComputedStyle(projetoTextoDesc).display === "none"
                ? "block"
                : "none";
    });
});