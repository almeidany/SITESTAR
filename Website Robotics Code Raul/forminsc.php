<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="utf-8">
    <title>Robotics Code Raul</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Logo -->
    <link href="img/favpng.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
    <link href="css/forminsc.css" rel="stylesheet">
</head>

<body>
    <?php
    include 'layouts/nav.php'
    ?>
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
        </div>
    </div>
    <!-- Hero End -->


    <!-- Formulário de Inscrição Start -->
    <!-- Formulário de Inscrição Start -->
    <div class="container my-5">
        <form method="post" action="">
            <h2 class="my-4">Dados Pessoais</h2>
            <div class="row mb-3">
                <div class="col-5">
                    <label for="primeiroNome" class="form-label">Primeiro Nome</label>
                    <input type="text" class="form-control" id="primeiroNome" required>
                </div>
                <div class="col-4">
                    <label for="apelido" class="form-label">Apelido</label>
                    <input type="text" class="form-control" id="apelido" required>
                </div>
                <div class="col-3">
                    <label for="dataNascimento" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="dataNascimento" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="col-6">
                    <label for="telefone" class="form-label">Número de Telefone</label>
                    <input type="tel" class="form-control" id="telefone" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <label for="turma" class="form-label">Turma</label>
                    <select class="form-select" id="turma" required>
                        <option selected disabled>Escolha sua turma</option>
                        <option value="turma1">Turma 1</option>
                        <option value="turma2">Turma 2</option>
                        <option value="turma3">Turma 3</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="tshirt" class="form-label">Tamanho da T-shirt</label>
                    <select class="form-select" id="tshirt" required>
                        <option selected disabled>Escolha o tamanho da T-shirt</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <label>Alergias Alimentares</label>
                    <div class="d-flex align-items-center">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" id="alergiasSim" name="alergias" value="sim">
                            <label class="form-check-label" for="alergiasSim">Sim</label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" id="alergiasNao" name="alergias" value="nao"
                                checked>
                            <label class="form-check-label" for="alergiasNao">Não</label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" id="alergiasOutros" name="alergias"
                                value="outros">
                            <label class="form-check-label" for="alergiasOutros">Outros</label>
                        </div>
                    </div>
                    <input type="text" class="form-control mt-2" id="alergiasOutrosDescricao"
                        placeholder="Descreva suas alergias alimentares" style="display: none;">
                </div>
                <div class="col-6">
                    <label>Tenho autorização de imagem?</label>
                    <div class="d-flex align-items-center">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" id="autorizacaoSim" name="autorizacao"
                                value="sim" required>
                            <label class="form-check-label" for="autorizacaoSim">Sim</label>
                        </div>
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" id="autorizacaoNao" name="autorizacao"
                                value="nao" required>
                            <label class="form-check-label" for="autorizacaoNao">Não</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="beneficio" class="form-label">Se selecionou "outros", por favor indique-as aqui:</label>
                    <textarea class="form-control" id="beneficio" rows="3"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <label for="FotodePerfil">Selecione uma foto</label>
                    <input type="file" class="form-control-file" id="FotodePerfil">
                </div>
            </div>
        </form>
    </div>
    <!-- Formulário de Inscrição End -->

    <?php
    include 'layouts/footer.php'
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

    <?php
    include 'layouts/scripts.php'
    ?>
</body>

</html>