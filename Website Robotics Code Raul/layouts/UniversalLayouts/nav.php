<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            <a href="index.php" class="navbar-brand">
                <img src="img/logo.png" alt="Logo" class="img-fluid">
            </a>

            <!-- Botão do menu hambúrguer para mobile -->
            <button class="navbar-toggler open-btn" type="button" onclick="toggleSidebar()">
                ☰
            </button>

            <!-- Navbar normal para desktop -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="index.php" class="nav-item nav-link active">Página Inicial</a>
                    <a href="concursos.php" class="nav-item nav-link">Concursos</a>
                    <a href="galeria.php" class="nav-item nav-link">Galeria</a>
                    <a href="forminsc.php" class="nav-item nav-link">Inscrição</a>
                    <a href="loja.php" class="nav-item nav-link">Loja</a>
                    <a href="patrocinios.php" class="nav-item nav-link">Patrocínios</a>
                    <a href="projetos.php" class="nav-item nav-link">Projetos</a>
                    <a href="sobrenos.php" class="nav-item nav-link">Sobre Nós</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

<!-- Sidebar Menu (mobile) -->
<div id="sidebar" class="sidebar">
    <button class="close-btn" onclick="toggleSidebar()">✖</button>
    <a href="index.php">Página Inicial</a>
    <a href="concursos.php">Concursos</a>
    <a href="galeria.php">Galeria</a>
    <a href="forminsc.php">Inscrição</a>
    <a href="loja.php">Loja</a>
    <a href="patrocinios.php">Patrocínio</a>
    <a href="projetos.php">Projetos</a>
    <a href="sobrenos.php">Sobre Nós</a>
</div>