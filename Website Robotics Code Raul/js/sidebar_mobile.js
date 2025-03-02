function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("active");

    var sidebar = document.getElementById("sidebar");
    var menuButton = document.querySelector(".open-btn");

    sidebar.classList.toggle("active");

    // Esconde o botão quando o menu está aberto, mas garante que reaparece ao fechar
    setTimeout(() => {
        if (sidebar.classList.contains("active")) {
            menuButton.style.opacity = "0"; // Oculta suavemente
            menuButton.style.pointerEvents = "none"; // Evita cliques no botão oculto
        } else {
            menuButton.style.opacity = "1"; // Reaparece suavemente
            menuButton.style.pointerEvents = "auto"; // Permite cliques novamente
        }
    }, 300); // Pequeno atraso para a animação ser fluida
}



