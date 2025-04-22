<!DOCTYPE html>
<html lang="pt-PT">

<?php
include './layouts/head_gallery.php'
?>

<body>
    <?php
    include './layouts/nav.php'
    ?>

    <div class="container my-5">
        <form method="post" action="" class="needs-validation" novalidate>
            <div class="form-card p-4 mb-5 rounded-4">
                <h2 class="mb-4 text-primary" style="text-align: center;">Dados Pessoais</h2>
                <!-- Primeira linha - Nome, Apelido, Data Nascimento -->
                <div class="row mb-4">
                    <div class="col-md-4 mb-3">
                        <label for="primeiroNome" class="form-label fw-bold">Primeiro Nome</label>
                        <input type="text" class="form-control form-control-lg" id="primeiroNome" required pattern="^[A-Za-zÀ-ÖØ-öø-ÿÇç\s]+$" placeholder="Nome">
                        <div class="invalid-feedback">
                            Por favor, insira o seu primeiro nome.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="apelido" class="form-label fw-bold">Apelido</label>
                        <input type="text" class="form-control form-control-lg" id="apelido" required pattern="^[A-Za-zÀ-ÖØ-öø-ÿÇç\s]+$" placeholder="Apelido">
                        <div class="invalid-feedback">
                            Por favor, insira o seu apelido.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="dataNascimento" class="form-label fw-bold">Data de Nascimento</label>
                        <input type="date" class="form-control form-control-lg" id="dataNascimento" required>
                        <div class="invalid-feedback">
                            Por favor, selecione a sua data de nascimento.
                        </div>
                    </div>
                </div>

                <!-- Segunda linha - Email e Telefone -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control form-control-lg" id="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="oseuemail@mail.pt">
                        </div>
                        <div class="invalid-feedback">
                            Por favor, insira o seu email.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="telefone" class="form-label fw-bold">Número de Telefone</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-phone"></i></span>
                            <input type="tel" class="form-control form-control-lg" id="telefone" required pattern="^\+?[0-9]{1,3}?[0-9]{7,15}$" placeholder="+351 912345678">
                        </div>
                        <div class="invalid-feedback">
                            Por favor, insira o seu número de telefone.
                        </div>
                    </div>
                </div>

                <!-- Terceira linha - Turma e T-shirt -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label for="turma" class="form-label fw-bold">Turma</label>
                        <select class="form-select form-select-lg" id="turma" required>
                            <option value="" selected disabled>Escolha sua turma</option>
                            <!-- 7º Ano -->
                            <option value="7A">7ºA</option>
                            <option value="7B">7ºB</option>
                            <option value="7C">7ºC</option>
                            <option value="7D">7ºD</option>
                            <option value="7E">7ºE</option>
                            <option value="7F">7ºF</option>
                            <option value="7G">7ºG</option>
                            <option value="7H">7ºH</option>
                            <option value="7I">7ºI</option>

                            <!-- 8º Ano -->
                            <option value="8A">8ºA</option>
                            <option value="8B">8ºB</option>
                            <option value="8C">8ºC</option>
                            <option value="8D">8ºD</option>
                            <option value="8E">8ºE</option>
                            <option value="8F">8ºF</option>
                            <option value="8G">8ºG</option>
                            <option value="8H">8ºH</option>
                            <option value="8I">8ºI</option>

                            <!-- 9º Ano -->
                            <option value="9A">9ºA</option>
                            <option value="9B">9ºB</option>
                            <option value="9C">9ºC</option>
                            <option value="9D">9ºD</option>
                            <option value="9E">9ºE</option>
                            <option value="9F">9ºF</option>
                            <option value="9G">9ºG</option>
                            <option value="9H">9ºH</option>
                            <option value="9I">9ºI</option>

                            <!-- 10º Ano -->
                            <option value="10AV1">10ºAV1</option>
                            <option value="10AV2">10ºAV2</option>
                            <option value="10AV3">10ºAV3</option>
                            <option value="10CT1">10ºCT1</option>
                            <option value="10CT2">10ºCT2</option>
                            <option value="10CT3">10ºCT3</option>
                            <option value="10CS1">10ºCS1</option>
                            <option value="10CS2">10ºCS2</option>
                            <option value="10CS3">10ºCS3</option>
                            <option value="10LH1">10ºLH1</option>
                            <option value="10LH2">10ºLH2</option>
                            <option value="10LH3">10ºLH3</option>

                            <!-- 11º Ano -->
                            <option value="11AV1">11ºAV1</option>
                            <option value="11AV2">11ºAV2</option>
                            <option value="11AV3">11ºAV3</option>
                            <option value="11CT1">11ºCT1</option>
                            <option value="11CT2">11ºCT2</option>
                            <option value="11CT3">11ºCT3</option>
                            <option value="11CS1">11ºCS1</option>
                            <option value="11CS2">11ºCS2</option>
                            <option value="11CS3">11ºCS3</option>
                            <option value="11LH1">11ºLH1</option>
                            <option value="11LH2">11ºLH2</option>
                            <option value="11LH3">11ºLH3</option>

                            <!-- 12º Ano -->
                            <option value="12AV1">12ºAV1</option>
                            <option value="12AV2">12ºAV2</option>
                            <option value="12AV3">12ºAV3</option>
                            <option value="12CT1">12ºCT1</option>
                            <option value="12CT2">12ºCT2</option>
                            <option value="12CT3">12ºCT3</option>
                            <option value="12CS1">12ºCS1</option>
                            <option value="12CS2">12ºCS2</option>
                            <option value="12CS3">12ºCS3</option>
                            <option value="12LH1">12ºLH1</option>
                            <option value="12LH2">12ºLH2</option>
                            <option value="12LH3">12ºLH3</option>

                            <!-- PSI -->
                            <option value="1PSI">1ºPSI</option>
                            <option value="2PSI">2ºPSI</option>
                            <option value="3PSI">3ºPSI</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, selecione a sua turma.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="tshirt" class="form-label fw-bold">Tamanho da T-shirt</label>
                        <select class="form-select form-select-lg" id="tshirt" required>
                            <option value="" selected disabled>Escolha o tamanho da T-shirt</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, selecione o seu tamanho da T-shirt.
                        </div>
                    </div>
                </div>

                <!-- Quarta linha - Alergias e Autorização -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Alergias Alimentares</label>
                        <div class="btn-group w-100" role="group">
                            <input type="radio" class="btn-check" id="alergiasNao" name="alergias" value="nao">
                            <label class="btn btn-outline-primary" for="alergiasNao">Sim</label>

                            <input type="radio" class="btn-check" id="alergiasSim" name="alergias" value="sim">
                            <label class="btn btn-outline-primary" for="alergiasSim">Não</label>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Tenho autorização de imagem?</label>
                        <div class="btn-group w-100" role="group">
                            <input type="radio" class="btn-check" id="autorizacaoSim" name="autorizacao" value="sim" required>
                            <label class="btn btn-outline-primary" for="autorizacaoSim">Sim</label>

                            <input type="radio" class="btn-check" id="autorizacaoNao" name="autorizacao" value="nao" required>
                            <label class="btn btn-outline-primary" for="autorizacaoNao">Não</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-12 mb-3">
                        <label for="beneficio" class="form-label fw-bold">Se sim, escreve-as aqui por favor.</label>
                        <textarea class="form-control form-control-lg" id="beneficio" rows="3" placeholder="Pó, amêndoins, cajus, nozes..."></textarea>
                    </div>
                </div>

                <!-- Sexta linha - Upload de Foto -->
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="FotodePerfil" class="form-label fw-bold">Foto de Perfil</label>
                        <div class="file-upload-wrapper">
                            <input type="file" class="file-upload-input" id="FotodePerfil" accept="image/*" data-text="Escolha a imagem">
                            <div class="file-upload-display d-flex align-items-center justify-content-center">
                                <div class="file-upload-preview">
                                    <i class="bi bi-camera-fill display-4 text-muted"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center align-items-center" style="gap: 1rem;">
                <button type="submit" class="btn btn-primary btn-lg px-4">Enviar</button>
                <button type="reset" class="btn btn-outline-secondary btn-lg px-4">Limpar</button>
            </div>
        </form>
    </div>
    <!-- Formulário de Inscrição End -->

    <?php
    include './layouts/footer.php'
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    <script>
        // Preview da imagem selecionada
        document.getElementById('FotodePerfil').addEventListener('change', function(e) {
            const preview = document.querySelector('.file-upload-preview');
            if (this.files && this.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.innerHTML = `<img src="${e.target.result}" class="img-thumbnail" alt="Preview">`;
                }

                reader.readAsDataURL(this.files[0]);
            }
        });

        // Validação do formulário
        (function() {
            'use strict';

            var forms = document.querySelectorAll('.needs-validation');

            Array.prototype.slice.call(forms).forEach(function(form) {
                // Validação ao submeter o formulário
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);

                // Validação em tempo real para cada campo
                form.querySelectorAll('input, select, textarea').forEach(function(input) {
                    input.addEventListener('input', function() {
                        if (input.checkValidity()) {
                            input.classList.add('is-valid');
                            input.classList.remove('is-invalid');
                        } else {
                            input.classList.add('is-invalid');
                            input.classList.remove('is-valid');
                        }
                    });
                });
            });
        })();
    </script>
    <?php
    include './layouts/scripts.php'
    ?>
</body>

</html>