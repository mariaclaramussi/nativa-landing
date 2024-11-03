<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-side">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="NAtiva">
                    <p class="slogan">NAtiva, ativo do Brasil.</p>
                    <p>
                        Avenida Juscelino Kubitscheck, n. 900, 8ª andar<br>
                        CEP 36081-000, Bairro Industrial, Juiz de Fora, MG, Brasil.
                    </p>
                    <a href="mailto: nativa@nativabiotech.com">nativa@nativabiotech.com</a>
                    <a href="https://www.linkedin.com/company/nativabiotech/" target="blank"><svg
                            class="svg-inline--fa fa-linkedin-in fa-w-14" aria-hidden="true" focusable="false"
                            data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                            </path>
                        </svg><!-- <i class="fa fa-linkedin"></i> Font Awesome fontawesome.com --></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-side">
                    <p>
                        Todos os direitos reservados ©<br>
                        2022 NAtiva Biotech
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bottom-footer">
                    <p>Supported by</p>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/emerge.svg" alt="Emerge">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"
        integrity="sha512-kYfrz7nVdMw6RD9taSlptH1Bulus0J//cp5Y/ns+Otwi9uHJiyriPyuYUU7uWhUAQKWiE9yChj8C5etG0lN4Qg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/19290a9456.js" crossorigin="anonymous"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</footer>


<?php wp_footer(); ?>

</body>

</html>