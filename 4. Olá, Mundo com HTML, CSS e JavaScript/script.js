// Pega o botão pelo seu id
const botao = document.getElementById("meu-botao");

// Adiciona um "ouvinte de evento" que espera por um clique
botao.addEventListener("click", function() {
    // Quando clicado, pega o título e muda o texto
    const titulo = document.getElementById("titulo");
    titulo.innerHTML = "Olá, Mundo!";
});
