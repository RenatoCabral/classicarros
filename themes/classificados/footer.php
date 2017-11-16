<?php if ( !is_page("minha-conta" ) && !is_page("criar-nova-senha") && !is_page("recuperar-senha")) {?>

    <footer class="page-footer footer-classificados">
        <div class="container-fluid">
            <div class="row footer-row">
                <div class="col s12 m4 l4">
                    <div class="card cards_footer">
                        <div class="card-content div-footer">
                            <h5 class="title_footer">Empresa</h5>
                            <p><a href="">Sobre ClassiCarros</a></p>
                            <p><a href="">Entre em Contato</a></p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="card cards_footer">
                        <div class="card-content div-footer">
                            <h5 class="title_footer">Atendimento</h5>
                            <p><a href="">Dúvidas</a></p>
                            <p><a href="">Consulta FIPE</a></p>
                            <p><a href="">Veículos</a></p>
                            <p><a href="">Notícias</a></p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="card cards_footer">
                        <div class="card-content div-footer">
                            <h5 class="title_footer">
                                <img class="responsive-img"src="<?= get_bloginfo('template_url') ?>/img/logo-footer.png" >
                            </h5>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.
                                Unde eveniet excepturi reprehenderit class tincidunt ridiculus vitae penatibus, magna, vestibulum minim, curae, nostrud, vero, animi! Necessitatibus molestiae. Excepteur libero?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2017 Copyright Renato Carvalho Cabral
<!--                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>-->
                </div>
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