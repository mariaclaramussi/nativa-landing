<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>


<section id="company">
    <img class="image-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/company-top.svg"
        alt="Detalhe de fundo">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    O Brasil è o paìs <br class="mobile">com<br class="desktop">
                    a maior<br class="mobile"> biodiversidade<br class="desktop">
                    do <br class="mobile">mundo
                </h2>
                <p>
                    Os compostos vegetais bioativos apresentam um potencial
                    extraordinário, ainda pouco explorado nas espécies nativas
                    brasileiras.
                    <br>
                    <br>
                    De todos os medicamentos registrados no mundo entre 1981 e 2019,
                    cerca de 50% são provenientes ou inspirados em Produtos Naturais.
                </p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/company-map.svg" alt="Mapa">
            </div>
        </div>
    </div>
    <img class="image-bottom" src="<?php echo get_template_directory_uri(); ?>/assets/images/company-bottom.svg"
        alt="Detalhe de fundo">
</section>

<section id="biomes">
    <div class="container">
        <div class="row">
            <div class="col-md-6 aos-init aos-animate" data-aos="zoom-in-right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/biomes.png" alt="Biomas">
                <div class="circle">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/circle.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <h2>
                    Desenvolvemos soluções para
                    atuar na prevenção e<br>
                    terapia de doenças a partir<br>
                    dos biomas brasileiros
                </h2>
                <p>
                    Nossa missão é transformar os insumos<br class="mobile">
                    vegetais bioativos em <b>produtos inovadores</b>,<br class="mobile">
                    desenvolvendo <br class="desktop">uma
                    <b>cadeia produtiva <br class="mobile">sustentável</b>, levando
                    para o mundo <br class="mobile"><b>saúde e bem-estar</b> e
                    agregar valor a<br class="desktop">
                    <b>floresta em pé.</b>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="solutions">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>
                    Atuamos na otimização da descoberta <br class="mobile">e<br class="desktop">
                    desenvolvimento de <br class="desktop">
                    fitoprodutos inovadores
                </h2>
                <p class="subtitle">
                    A partir da consolidação de parcerias, viabilizamos o<br class="desktop">
                    <i>roadmap</i> tecnológico da bancada ao
                    mercado.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 aos-init aos-animate" data-aos="flip-left">
                <div class="card dark-green">
                    <div class="step-badge">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/screening.svg"
                            alt="Screening">
                    </div>
                    <h3>Screening</h3>
                    <p>
                        Seleção de insumos bioativos e tecnologias, confirmação do
                        potencial biológico e <i>fingerprint</i>
                    </p>
                    <span>1</span>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 aos-init aos-animate" data-aos="flip-left" data-aos-offset="200">
                <div class="card light-green">
                    <div class="step-badge">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/desenvolvimento.svg"
                            alt="Desenvolvimento">
                    </div>
                    <h3>Desenvolvimento</h3>
                    <p>
                        Desenvolvimento e otimização da tecnologia, realização da prova
                        de conceito, estudo da variabilidade fitoquímica e viabilidade
                        produtiva
                    </p>
                    <span>2</span>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 aos-init aos-animate" data-aos="flip-left" data-aos-offset="300">
                <div class="card orange">
                    <div class="step-badge">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pre-clinicos.svg"
                            alt="Estudos pré-clínicos">
                    </div>
                    <h3>Estudos prè-clìnicos</h3>
                    <p>
                        Realização dos ensaios pré-clínicos seguindo o <i>roadmap</i>
                        tecnológico adequado ao processo regulatório
                    </p>
                    <span>3</span>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 aos-init aos-animate" data-aos="flip-left" data-aos-offset="400">
                <div class="card red">
                    <div class="step-badge">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clinicos.svg"
                            alt="Estudos clínicos">
                    </div>
                    <h3>Estudos clìnicos</h3>
                    <p>
                        Realização dos testes clínicos fase I, II e III com parceiros, a
                        fim de confirmar a eficácia e segurança em seres humanos
                    </p>
                    <span>4</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pipeline">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Pipeline NAtiva</h2>
                <p>
                    Atualmente, em nosso <i>pipeline</i>, estamos avançando para a etapa de escalonamento
                    de dois fitomedicamentos de espécies nativas do Brasil, com indicação
                    clínica na terapia e redução de agravos de doenças inflamatórias crônicas.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="https://nativabiotech.com/wp-content/uploads/2022/08/figura-pipeline.png" alt="">

            </div>
        </div>
    </div>
</section>


<section id="aboutus">
    <img class="image-top" src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutus-top.svg"
        alt="Detalhe de fundo">
    <svg fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute">
        <defs>
            <clipPath id="myClip" clipPathUnits="objectBoundingBox">
                <path
                    d="M1,0.397 C1,0.673,0.743,1,0.479,1 C0.214,1,0,0.776,0,0.5 C0,0.224,0.214,0,0.479,0 C0.743,0,1,0.121,1,0.397"
                    fill="black"></path>
            </clipPath>
        </defs>
    </svg>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>
                    Conheça um pouco<br>
                    mais da NAtiva
                </h2>
            </div>
            <div class="col-md-7">
                <p>
                    A NAtiva foi fundada por três pesquisadoras que trabalham juntas
                    há mais de 15 anos na investigação de espécies vegetais bioativas.
                    Impulsionadas pelo anseio de levar suas pesquisas até a
                    comunidade, participaram do Emerge Amazônia e foram selecionadas
                    entre 149 tecnologias. Com marcos pioneiros, as
                    cientistas empreendedoras, Mulheres Inovadoras FINEP 2023, atuam em parceria com empresas
                    referência no Brasil.
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3">
                <div class="profile-container aos-init aos-animate" data-aos="zoom-in" data-aos-offset="100">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutus-circle.png"
                            alt="Detalhe de Fundo" class="circle-image">

                        <div class="person-image"
                            style="background-image: url(https://nativabiotech.com/wp-content/uploads/2022/08/Renata-Mendes-scaled-e1711552524592.jpg)">
                        </div>
                    </div>
                    <h3>Renata Mendes, PhD</h3>
                    <p>Cofundadora e Diretora Científica </p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#persona44">
                        Saiba mais
                    </button>
                </div>
                <div class="modal fade" id="persona44" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="header-content">
                                <div class="image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutus-circle.png"
                                        alt="Detalhe de Fundo" class="circle-image">

                                    <div class="person-image"
                                        style="background-image: url(https://nativabiotech.com/wp-content/uploads/2022/08/Renata-Mendes-scaled-e1711552524592.jpg)">
                                    </div>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3>Renata Mendes, PhD</h3>
                                <p>Cofundadora e Diretora Científica </p>
                                <p class="description">
                                    Farmacêutica (UFJF), Mestre em Ciências Farmacêuticas, PhD em Ciências
                                    Biológicas – Genética e Biotecnologia (UFJF/Sanduíche UMinho - Portugal). Esp.
                                    em Inovação em Medicamentos da Biodiversidade (FIOCRUZ). Atua na descoberta e
                                    desenvolvimento de soluções inovadoras. Atua na prospecção de insumos bioativos
                                    e tecnologias promissoras, na validação das atividades biológicas, na
                                    caracterização química e viabilidade produtiva dos insumos ativos, assim como no
                                    desenvolvimento de um roadmap tecnológico estratégico. </p>

                                <div class="align-social-media">
                                    <a href="mailto: renata.mendes@nativabiotech.com" target="blank"><svg
                                            class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true"
                                            focusable="false" data-prefix="fa" data-icon="envelope" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                            </path>
                                        </svg>
                                        <!-- <i class="fa fa-envelope"></i> Font Awesome fontawesome.com --></a>
                                    <a href="http://www.linkedin.com/in/renatafmendes" target="blank"><svg
                                            class="svg-inline--fa fa-linkedin-in fa-w-14" aria-hidden="true"
                                            focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                            </path>
                                        </svg>
                                        <!-- <i class="fa fa-linkedin"></i> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="profile-container aos-init aos-animate" data-aos="zoom-in" data-aos-offset="200">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutus-circle.png"
                            alt="Detalhe de Fundo" class="circle-image">

                        <div class="person-image"
                            style="background-image: url(https://nativabiotech.com/wp-content/uploads/2022/08/J├йssica-scaled-e1660212916508.jpg)">
                        </div>
                    </div>
                    <h3>Jéssica Leiras, PhD</h3>
                    <p>Cofundadora e Diretora de Desenvolvimento</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#persona51">
                        Saiba mais
                    </button>
                </div>
                <div class="modal fade" id="persona51" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="header-content">
                                <div class="image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutus-circle.png"
                                        alt="Detalhe de Fundo" class="circle-image">

                                    <div class="person-image"
                                        style="background-image: url(https://nativabiotech.com/wp-content/uploads/2022/08/J├йssica-scaled-e1660212916508.jpg)">
                                    </div>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3>Jéssica Leiras, PhD</h3>
                                <p>Cofundadora e Diretora de Desenvolvimento</p>
                                <p class="description">
                                    Farmacêutica (UFJF), Mestre em Ciências Farmacêuticas, PhD. em Ciências
                                    Biológicas – Genética e Biotecnologia (UFJF). Esp. em Inovação em Medicamentos
                                    da Biodiversidade (FIOCRUZ). Atua no escalonamento de soluções inovadoras. Atua
                                    na prospecção, caracterização e padronização analítica de novos ativos, bem como
                                    no desenvolvimento da tecnologia, delineando o roadmap tecnológico alinhado às
                                    agências reguladoras. </p>

                                <div class="align-social-media">
                                    <a href="mailto: jessica.leiras@nativabiotech.com" target="blank"><svg
                                            class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true"
                                            focusable="false" data-prefix="fa" data-icon="envelope" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                            </path>
                                        </svg>
                                        <!-- <i class="fa fa-envelope"></i> Font Awesome fontawesome.com --></a>
                                    <a href="http://www.linkedin.com/in/jessicaleiras" target="blank"><svg
                                            class="svg-inline--fa fa-linkedin-in fa-w-14" aria-hidden="true"
                                            focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                            </path>
                                        </svg>
                                        <!-- <i class="fa fa-linkedin"></i> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="profile-container aos-init aos-animate" data-aos="zoom-in" data-aos-offset="300">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutus-circle.png"
                            alt="Detalhe de Fundo" class="circle-image">

                        <div class="person-image"
                            style="background-image: url(https://nativabiotech.com/wp-content/uploads/2022/08/EDM_2760-scaled-e1711549668487.jpg)">
                        </div>
                    </div>
                    <h3>Cláudia Pavani, PhD</h3>
                    <p>Líder de Funding</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#persona53">
                        Saiba mais
                    </button>
                </div>
                <div class="modal fade" id="persona53" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="header-content">
                                <div class="image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutus-circle.png"
                                        alt="Detalhe de Fundo" class="circle-image">

                                    <div class="person-image"
                                        style="background-image: url(https://nativabiotech.com/wp-content/uploads/2022/08/EDM_2760-scaled-e1711549668487.jpg)">
                                    </div>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3>Cláudia Pavani, PhD</h3>
                                <p>Líder de Funding</p>
                                <p class="description">
                                    Economista (USP), MSc. Engenharia de Produção (UFRJ), PhD. em Admistração -
                                    Gestão da inovação (USP). Atua na elaboração do modelo de negócios, estratégias
                                    de mercado e captação. </p>

                                <div class="align-social-media">
                                    <a href="mailto: claudia.pavani@nativabiotech.com" target="blank"><svg
                                            class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true"
                                            focusable="false" data-prefix="fa" data-icon="envelope" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                            </path>
                                        </svg>
                                        <!-- <i class="fa fa-envelope"></i> Font Awesome fontawesome.com --></a>
                                    <a href="https://www.linkedin.com/in/claudia-pavani/" target="blank"><svg
                                            class="svg-inline--fa fa-linkedin-in fa-w-14" aria-hidden="true"
                                            focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                            </path>
                                        </svg>
                                        <!-- <i class="fa fa-linkedin"></i> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="profile-container aos-init aos-animate" data-aos="zoom-in" data-aos-offset="400">
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutus-circle.png"
                            alt="Detalhe de Fundo" class="circle-image">

                        <div class="person-image"
                            style="background-image: url(https://nativabiotech.com/wp-content/uploads/2022/08/Elita-1.jpg)">
                        </div>
                    </div>
                    <h3>Elita Scio, PhD</h3>
                    <p>Cofundadora e Conselheira Científica</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#persona55">
                        Saiba mais
                    </button>
                </div>
                <div class="modal fade" id="persona55" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="header-content">
                                <div class="image-container">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutus-circle.png"
                                        alt="Detalhe de Fundo" class="circle-image">

                                    <div class="person-image"
                                        style="background-image: url(https://nativabiotech.com/wp-content/uploads/2022/08/Elita-1.jpg)">
                                    </div>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h3>Elita Scio, PhD</h3>
                                <p>Cofundadora e Conselheira Científica</p>
                                <p class="description">
                                    Farmacêutica (UFJF), Mestre em Agroquímica (UFV), PhD em Biologia Celular e
                                    Molecular - Química de Produtos Naturais (CPqRR-FIOCRUZ/ Sanduíche University of
                                    Illinois - EUA). Professora Universitária com ampla experiência na área de
                                    Produtos Naturais, atua como advisor. </p>

                                <div class="align-social-media">
                                    <a href="mailto: " target="blank"><svg class="svg-inline--fa fa-envelope fa-w-16"
                                            aria-hidden="true" focusable="false" data-prefix="fa" data-icon="envelope"
                                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                            </path>
                                        </svg>
                                        <!-- <i class="fa fa-envelope"></i> Font Awesome fontawesome.com --></a>
                                    <a href="https://www.linkedin.com/in/elita-scio-0380ab247/" target="blank"><svg
                                            class="svg-inline--fa fa-linkedin-in fa-w-14" aria-hidden="true"
                                            focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                            </path>
                                        </svg>
                                        <!-- <i class="fa fa-linkedin"></i> Font Awesome fontawesome.com --></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="news" id="news">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Notìcias</h4>
                        <p class="subtitle">Confira nossos últimos conteúdos</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-centered">
                        <div class="container-notice">
                            <img src="https://nativabiotech.com/wp-content/uploads/2024/03/Critt-UFJF-2-1200x675.jpg"
                                alt="Noticia">
                            <h3>NAtiva: conheça a startup fundada por pesquisadoras da UFJF com foco em saúde a
                                partir dos ativos da biodiversidade brasileira</h3>
                            <p>27/03/2024</p>
                            <a href="https://www.linkedin.com/pulse/nativa-conhe%2525C3%2525A7a-startup-fundada-por-pesquisadoras-da-ufjf-com-8y8bf/?trackingId=MuplutxjgkpRHHrJ0DXINA%3D%3D"
                                rel="noopener" target="_blank"
                                aria-label="Leia o artigo completo (opens in a new tab)">Leia o artigo completo <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-centered">
                        <div class="container-notice">
                            <img src="https://nativabiotech.com/wp-content/uploads/2024/03/P1014343-1200x800.jpg"
                                alt="Noticia">
                            <h3>Cientistas mineiras criam startup com ativos da biodiversidade regional</h3>
                            <p>27/03/2024</p>
                            <a href="https://www.em.com.br/app/colunistas/mundo-startup/2023/06/27/noticia-mundo-startup,1512776/cientistas-mineiras-criam-startup-com-ativos-da-biodiversidade-regional.shtml"
                                rel="noopener" target="_blank"
                                aria-label="Leia o artigo completo (opens in a new tab)">Leia o artigo completo <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-centered">
                        <div class="container-notice">
                            <img src="https://nativabiotech.com/wp-content/uploads/2024/04/terra-1.jpg" alt="Noticia">
                            <h3>Startups que Estão Transformando o Meio Ambiente</h3>
                            <p>18/04/2024</p>
                            <a href="https://revistaamazonia.com.br/4-startups-que-estao-transformando-o-meio-ambiente/"
                                rel="noopener" target="_blank"
                                aria-label="Leia o artigo completo (opens in a new tab)">Leia o artigo completo <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-centered">
                        <div class="container-notice">
                            <img src="https://nativabiotech.com/wp-content/uploads/2024/04/terra.jpg" alt="Noticia">
                            <h3>Dia da Terra: confira 4 startups que contribuem com o meio ambiente – NAtiva ativos
                                do Brasil</h3>
                            <p>18/04/2024</p>
                            <a href="https://eco21.eco.br/bioeconomia/dia-da-terra-confira-quatro-startups-que-contribuem-com-o-meio-ambiente/"
                                rel="noopener" target="_blank"
                                aria-label="Leia o artigo completo (opens in a new tab)">Leia o artigo completo <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-centered">
                        <div class="container-notice">
                            <img src="https://nativabiotech.com/wp-content/uploads/2024/03/Foto-1-NAtiva-1200x801.jpg"
                                alt="Noticia">
                            <h3>Pesquisadoras da UFJF transformam pesquisa em negócio</h3>
                            <p>27/03/2024</p>
                            <a href="https://www2.ufjf.br/noticias/2024/03/21/pesquisadoras-da-ufjf-transformam-pesquisa-em-negocio-por-meio-de-startup/?fbclid=PAAabh1VsSgpNnFNBRLfPU-l1U8WEBhBNRr7UBWQEl8CaqFjVRT1LR0-uCCUo"
                                rel="noopener" target="_blank"
                                aria-label="Leia o artigo completo (opens in a new tab)">Leia o artigo completo <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="image-bottom" src="<?php echo get_template_directory_uri(); ?>/assets/images/aboutus-bottom.svg">
</section>

<section id="contact">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Entre em contato</h2>
                <p class="subtitle">
                    Preencha o formulário abaixo para entrar em contato
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container-form">

                    <div class="wpcf7 js" id="wpcf7-f36-o1" lang="pt-BR" dir="ltr">
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form action="/#wpcf7-f36-o1" method="post" class="wpcf7-form init"
                            aria-label="Formulários de contato" novalidate="novalidate" data-status="init">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="36">
                                <input type="hidden" name="_wpcf7_version" value="5.9.3">
                                <input type="hidden" name="_wpcf7_locale" value="pt_BR">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f36-o1">
                                <input type="hidden" name="_wpcf7_container_post" value="0">
                                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                            </div>
                            <div class="input-container">
                                <p><label>NOME</label><br>
                                    <span class="wpcf7-form-control-wrap" data-name="text-514"><input size="40"
                                            class="wpcf7-form-control wpcf7-text" aria-invalid="false"
                                            placeholder="Nome da Organização" value="" type="text"
                                            name="text-514"></span>
                                </p>
                            </div>
                            <div class="input-container">
                                <p><label>E-MAIL</label><br>
                                    <span class="wpcf7-form-control-wrap" data-name="email-173"><input size="40"
                                            class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                            aria-required="true" aria-invalid="false" placeholder="exemplo@email.com"
                                            value="" type="email" name="email-173"></span>
                                </p>
                            </div>
                            <div class="input-container">
                                <p><label>MENSAGEM</label><br>
                                    <span class="wpcf7-form-control-wrap" data-name="textarea-721"><textarea cols="40"
                                            rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                            placeholder="Escreva aqui..." name="textarea-721"></textarea></span>
                                </p>
                            </div>
                            <p><input class="wpcf7-form-control wpcf7-submit has-spinner" type="submit"
                                    value="Enviar"><span class="wpcf7-spinner"></span>
                            </p>
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>