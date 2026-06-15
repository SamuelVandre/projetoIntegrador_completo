const form = document.getElementById("formularioContato");

// Momento em que a página foi carregada
const submittedAt = Date.now();

form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const token = document.querySelector(
        'input[name="cf-turnstile-response"]'
    )?.value;

    if (!token) {
        alert("Complete a verificação de segurança.");
        return;
    }

    const body = {
        name: document.getElementById("nome").value.trim(),
        email: document.getElementById("email").value.trim(),
        projectType: document.getElementById("tipoProjeto").value,
        message: document.getElementById("mensagem").value.trim(),
        token,
        submittedAt,
        honeypot: document.querySelector(
            'input[name="honeypot"]'
        ).value
    };

    try {
        const response = await fetch(
            "https://projeto-integrador-nayara-api.vercel.app/api/send-email",
            {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(body)
            }
        );

        const result = await response.json();

        if (response.ok) {
            alert("Solicitação enviada com sucesso!");
            form.reset();

            // Limpa o Turnstile
            if (window.turnstile) {
                turnstile.reset();
            }
        } else {
            alert(result.error || "Erro ao enviar a solicitação.");
        }
    } catch (error) {
        console.error(error);
        alert("Erro ao conectar com o servidor.");
    }
});