<!DOCTYPE html>
<html lang="pt-PT">

<?php
include 'layouts/UniversalLayouts/head.php'
?>

<body>
    <?php
    include 'layouts/UniversalLayouts/nav.php'
    ?>
    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">Robotics
                        Code
                        Raul</div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight">O clube de róbotica do AERP</h1>
                    <p class="text-white mb-4 animated slideInRight">O Clube de Robótica da escola oferece aos
                        alunos a
                        oportunidade de explorar a ciência e tecnologia, desenvolvendo habilidades práticas em
                        programação e engenharia. Com atividades colaborativas, preparamos os estudantes para os
                        desafios do futuro digital.</p>
                    <a href="https://www.aerp.pt"
                        class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInRight"
                        target="_blank">Saiba
                        Mais</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/HomepageIMG1.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="HP_img2">
                        <img class="img-fluid" src="img/HomepageIMG2.png">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">O Ínicio</div>
                    <h1 class="mb-4">Um começo da robótica no agrupamento</h1>
                    <p class="mb-4">Um dia, o professor Luís Fernandes, da Escola Secundária Raúl Proença, decidiu
                        fundar um clube de robótica para os seus alunos. O objetivo era simples: ensinar programação
                        e
                        construção de robôs. Este espaço rapidamente se tornou um local de aprendizagem e inovação,
                        onde
                        os estudantes não só desenvolvem competências tecnológicas mas também participam em
                        competições
                        de robótica. No clube, a programação e a construção de robôs são o cerne das atividades. Os
                        alunos trabalham juntos, participam em competições e aprendem a importância do trabalho em
                        equipa. Com projetos inspiradores e um ambiente colaborativo, o clube de robótica continua a
                        crescer, preparando os jovens para um futuro tecnológico e promissor. Veja mais em <a
                            href="sobrenos.html">sobre nós</a>.</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-primary feature pt-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Porquê escolher o nosso clube?
                    </div>
                    <h1 class="text-white mb-4">Veja aqui o porquê!</h1>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Desenvolvimento de projetos na àrea</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Realização de workshops temáticos</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Participação em concursos e eventos</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Trabalho em equipa</span>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/HomepageIMG3.png">
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- FAQs Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Questões Frequentes</div>
                <h1 class="mb-4">Veja aqui se, encontra alguma questão que possa ter</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ1">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Como me posso inscrever no clube de robótica?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Basta ser um aluno da escola e inscrever-se através do <a
                                        href="FormularioInsc.html">Formulário de Inscrição</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Quais são os horários do clube?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    O clube de robótica funciona todas as quartas-feiras das 11h50 às 13h20 Sala 35
                                    e,
                                    sextas-feiras das 13h35 às 16h00. Sala-34.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Quais são os tipos de projetos que poderemos desenvolver no clube?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    No clube, podemos trabalhar em uma variedade de projetos, como robôs, carros,
                                    sistemas de automação e competições de robótica. As possibilidades são
                                    ilimitadas!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    É preciso ter materiais para participar no clube?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Não, qualquer material como portáteis, circuitos e afins são fornecidos por nós,
                                    basta trazer a sua vontade de aprender e de se divertir. Claro que, se quiser
                                    trazer
                                    portátil pessoal ou semelhante poderá.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ2">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Que concursos e eventos poderei participar ao estar no clube?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Poderá participar no Festival Nacional da Robótica, Bot0lympics, Roboparty e
                                    Olimpiadas da Robótica. Pode consultar individualmente sobre cada um, no menu <a
                                        href="Concursos.html">Concursos</a>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Quem são os professores responsáveis pelo clube?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Os professores responsáveis pelo clube são, a professora Sónia Rodrigues e o
                                    professor Luís Fernandes. Caso queria saber mais sobre abra o menu <a
                                        href="equipa.html">a nossa equipa</a>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    Posso participar de projetos mesmo que não tenha experiência prévia?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Sim, todos são bem-vindos! Temos membros experientes que estarão disponíveis
                                    para
                                    ajudar e orientar aqueles que estão começando.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    O clube oferece suporte para projetos escolares?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Sim, estamos felizes em ajudar membros que desejam desenvolver projetos
                                    relacionados
                                    à escola ou que precisem de suporte para competições acadêmicas.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


    <!-- Team Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">A Nossa Equipa</div>
                    <h1 class="mb-4">Conhece a Nossa Equipa</h1>
                    <p class="mb-4">O nosso Clube de Robótica é liderado pelo Prof. Luís Fernandes, com vasta
                        experiência em robótica, e organizado pela Prof.ª Sónia Rodrigues, que assegura o sucesso
                        das
                        nossas atividades. Juntos, combinamos criatividade e técnica para enfrentar desafios e
                        explorar
                        novas fronteiras na robótica.</p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/TEMPIMG1.jpg" alt="">
                                        <h5 class="mb-0">Prof. Luís Fernandes</h5>
                                        <small>Fundador do Clube</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1"
                                                href="https://www.linkedin.com/in/lu%C3%ADs-fernandes-15904977/"
                                                target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            <a class="btn btn-square btn-primary m-1"
                                                href="https://www.youtube.com/@luisfernandes6940" target="_blank"><i
                                                    class="fab fa-youtube"></i></a>
                                        </div>
                                        <!--Adicionar youtube dos professores-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/TEMPIMG2.jpg" alt="">
                                        <h5 class="mb-0">Prof.ª Sónia Rodrigues</h5>
                                        <small>Coordenadora</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1"
                                                href="https://www.linkedin.com/in/s%C3%B3nia3rodrigues/"
                                                target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                            <a class="btn btn-square btn-primary m-1"
                                                href="https://www.youtube.com/c/S%C3%B3niaRodrigues" target="_blank"><i
                                                    class="fab fa-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

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