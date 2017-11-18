<?php get_header();
get_template_part( 'basic-search' );

include 'app/partials/public/monta-dados-veiculos.php';
setPostViews( $post_id );
?>

    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="col s12 m12 l6">
                    <div class=" col s12 m12 l12 description-vehicle">
                        <h1><?php the_title(); ?> </h1>
                        <p class="price-veiculo">R$ <?= number_format( $price, 2, ',', '.' ); ?></p>
                    </div>

                    <?php
                    $categoria  = is_array( $categorias ) ? $categorias[0]->name : '';
                    display_details( $year, $km, $color, $doors, $fuel, $exchange, $conservation, $final_place, $motor, $post_id, $fabricante, $model, $uf, $city, $categoria ); ?>
                </div>
                <div class="col s12 m12 l6">
                    <?php display_gallery($post_id); ?>
                </div>
            </div>
            <!--			--><?php //display_gallery($post_id); ?>
        </div>
    </div>

    <!-- Tabs -->
    <div class="container-fluid container-tabs-form">
        <div class="row">
            <div class="col s12 m12 l6 tabs-home">
                <ul id="tabs-swipe-demo" class="tabs vehicle-details-tabs">
                    <li class="tab col s4"><a class="active link-title-tab" href="#test-swipe-1">Opcionais</a></li>
                    <li class="tab col s4"><a class="link-title-tab" href="#test-swipe-2">Observação</a></li>
                    <li class="tab col s4"><a class="link-title-tab" href="#test-swipe-3">Vendedor</a></li>
                </ul>
                <div id="test-swipe-1" class="col s12 m12 l12">
                    <div class="col s12 m12 l12">

                        <div class="row list-opcionals">
                            <?php display_itens_de_serie( $post_id ) ?>
                        </div>


                    </div>
                </div>

                <div id="test-swipe-2" class="col s12 m12 l12">
                    <div class="row">
                        <div class="col s12 m12 l12 texto-info">
                            <br><br>
                            <!--  nl2br é uma funcao php que faz a quebra de linha do texto-->
                            <?php if ( ! empty( $obs ) ) {
                                echo nl2br( $obs ) ;
                            } else{
                                echo '<p>*** Não há observações sobre o veículo ***</p>';
                            }?>

                        </div>
                    </div>
                </div>
                <div id="test-swipe-3" class="col s12 m12 l12 texto-info">
                    <div class="row div-vendedor">
                        <?php display_author_data( $post_id ); ?>
                    </div>

                </div>
            </div>

            <!--FORM ENVIO PROPOSTA--->


            <div class="col s12 m12 l6">
                <p class="title-proposta">FICOU INTERESSADO?</p>
                <br>
                <form id="single-form">
                    <div class="row">
                        <div class="input-field col s12 m12 l6">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="nome" type="text" class="validate">
                            <label for="nome">Nome Completo: </label>
                        </div>

                        <div class="input-field col s12 m12 l6">
                            <i class="material-icons prefix">markunread</i>
                            <input required id="icon_prefix" name="idx_user_email" type="email" class="validate">
                            <label for="icon_prefix">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m12 l6">
                            <i class="material-icons prefix">phone</i>
                            <input required id="icon_prefix" name="idx_user_phone" type="text" class="validate phone">
                            <label for="icon_prefix">Telefone</label>
                        </div>

                        <div class="input-field col s12 m12 l6">
                            <i class="material-icons prefix">phone_iphone</i>
                            <input required id="icon_prefix" name="idx_user_phone" type="text" class="validate phone">
                            <label for="icon_prefix">Celular</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field col s12 m12 l12">
                            <div class="btn">
                                <span>Arquivo</span>
                                <input type="file" multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Deseja incluir outro veículo no negócio? Anexe fotos.">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea id="msg" class="materialize-textarea"></textarea>
                                <label for="msg">Detalhe sua Proposta</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-field col s12 m12 l12 btn_basic_search">
                        <button class="btn waves-effect waves-light button-send-proposta" type="submit" name="action">Enviar Proposta
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <?php render_outros_veiculos( $post_id, $categorias[0]->slug ) ?>

    </div>


<?php get_footer();