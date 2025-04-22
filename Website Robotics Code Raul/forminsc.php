<?php
require_once __DIR__ . '/layouts/UniversalLayouts/redirector.php';
?>
<!DOCTYPE html>
<html lang="pt-PT">

<?php
include 'layouts/UniversalLayouts/head_forminsc.php'
?>

<body>
    <?php
    include 'layouts/UniversalLayouts/nav.php'
    ?>

    <div class="container my-5">
        <form method="post" action="" class="needs-validation" novalidate>
            <div class="form-card p-4 mb-5 rounded-4 shadow-sm">
                <h2 class="mb-4 text-primary" style="text-align: center;">Dados Pessoais</h2>

                <!-- Primeira linha - Nome, Apelido, Data Nascimento -->
                <div class="row mb-4">
                    <div class="col-md-4 mb-3">
                        <label for="primeiroNome" class="form-label fw-bold">Primeiro Nome</label>
                        <input type="text" class="form-control form-control-lg" id="primeiroNome" required>
                        <div class="invalid-feedback">
                            Por favor, insira seu primeiro nome.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="apelido" class="form-label fw-bold">Apelido</label>
                        <input type="text" class="form-control form-control-lg" id="apelido" required>
                        <div class="invalid-feedback">
                            Por favor, insira seu apelido.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="dataNascimento" class="form-label fw-bold">Data de Nascimento</label>
                        <input type="date" class="form-control form-control-lg" id="dataNascimento" required>
                        <div class="invalid-feedback">
                            Por favor, selecione sua data de nascimento.
                        </div>
                    </div>
                </div>

                <!-- Segunda linha - Email e Telefone -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control form-control-lg" id="email" required>
                        </div>
                        <div class="invalid-feedback">
                            Por favor, insira um email válido.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="telefone" class="form-label fw-bold">Número de Telefone</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-phone"></i></span>
                            <input type="tel" class="form-control form-control-lg" id="telefone" required>
                        </div>
                        <div class="invalid-feedback">
                            Por favor, insira seu número de telefone.
                        </div>
                    </div>
                </div>

                <!-- Terceira linha - Turma e T-shirt -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label for="turma" class="form-label fw-bold">Turma</label>
                        <select class="form-select form-select-lg" id="turma" required>
                            <option value="" selected disabled>Escolha sua turma</option>
                            <option value="turma1">Turma 1</option>
                            <option value="turma2">Turma 2</option>
                            <option value="turma3">Turma 3</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, selecione sua turma.
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
                            Por favor, selecione o tamanho da T-shirt.
                        </div>
                    </div>
                </div>

                <!-- Quarta linha - Alergias e Autorização -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Alergias Alimentares</label>
                        <div class="btn-group w-100" role="group">
                            <input type="radio" class="btn-check" id="alergiasNao" name="alergias" value="nao" checked>
                            <label class="btn btn-outline-primary" for="alergiasNao">Não</label>

                            <input type="radio" class="btn-check" id="alergiasSim" name="alergias" value="sim">
                            <label class="btn btn-outline-primary" for="alergiasSim">Sim</label>

                            <input type="radio" class="btn-check" id="alergiasOutros" name="alergias" value="outros">
                            <label class="btn btn-outline-primary" for="alergiasOutros">Outros</label>
                        </div>
                        <div id="alergiasOutrosContainer" class="mt-3" style="display: none;">
                            <input type="text" class="form-control form-control-lg" id="alergiasOutrosDescricao" placeholder="Descreva suas alergias alimentares">
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
                        <div class="invalid-feedback d-block">
                            Por favor, selecione uma opção.
                        </div>
                    </div>
                </div>

                <!-- Quinta linha - Observações -->
                <div class="row mb-4">
                    <div class="col-12 mb-3">
                        <label for="beneficio" class="form-label fw-bold">Observações</label>
                        <textarea class="form-control form-control-lg" id="beneficio" rows="3" placeholder="Se necessário, adicione observações aqui..."></textarea>
                    </div>
                </div>

                <!-- Sexta linha - Upload de Foto -->
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="FotodePerfil" class="form-label fw-bold">Foto de Perfil</label>
                        <div class="file-upload-wrapper">
                            <input type="file" class="file-upload-input" id="FotodePerfil" accept="image/*">
                            <div class="file-upload-display d-flex align-items-center justify-content-center">
                                <div class="file-upload-preview">
                                    <i class="bi bi-camera-fill display-4 text-muted"></i>
                                    <p class="mt-2 mb-0">Clique para adicionar foto</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="align-items: center;">
                <button type="submit" class="btn btn-primary btn-lg px-4 me-md-2">Enviar</button>
                <button type="reset" class="btn btn-outline-secondary btn-lg px-4">Limpar</button>
            </div>
        </form>
    </div>
    <!-- Formulário de Inscrição End -->

    <?php
    include 'layouts/UniversalLayouts/footer.php'
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
    <script>
        // Mostrar campo de descrição quando "Outros" for selecionado nas alergias
        document.querySelectorAll('input[name="alergias"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const descricaoContainer = document.getElementById('alergiasOutrosContainer');
                descricaoContainer.style.display = this.value === 'outros' ? 'block' : 'none';
            });
        });

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

            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add('was-validated');
                    }, false);
                });
        })();
    </script>
    <?php
    include 'layouts/UniversalLayouts/scripts.php'
    ?>
</body>

</html>