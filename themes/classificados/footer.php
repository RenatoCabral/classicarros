<?php if ( !is_page("minha-conta" ) && !is_page("criar-nova-senha") && !is_page("recuperar-senha")) {?>

    <footer class="page-footer footer-classificados">
        <div class="container-fluid">
            <div class="row footer-row">
                <div class="col s12 m4 l4">
                    <div class="card cards_footer">
                        <div class="card-content div-footer">
                            <h5 class="title_footer">Sobre nós</h5>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.
                                Cursus dolore voluptates nullam, vivamus veniam, voluptas asperiores asperiores. Magnis in, tenetur. Ipsum voluptate. In nibh illo, porttitor,</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="card cards_footer">
                        <div class="card-content div-footer">
                            <h5 class="title_footer">Título</h5>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="card cards_footer">
                        <div class="card-content div-footer">
                            <h5 class="title_footer">Título</h5>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                    </div>
                </div>
    <!--            <p>Copyright Renato</p>-->

            </div>
        </div>
    </footer>
<?php } ?>


<script src="<?php bloginfo('template_directory') ?>/js/jquery-3.2.1.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/select2.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/materialize.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/slick.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/jquery.fancybox.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/jquery.mask.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/searchform.js"></script>

<script src="<?php bloginfo('template_directory') ?>/js/app.js"></script>

<?php wp_footer(); ?>

</body>
</html>