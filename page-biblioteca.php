<?php
/*
/ Template Name: Biblioteca de conteúdos
*/
?>

<?php get_header(); ?>


<main id="lp-biblioteca">

    <!-- Início - Seção Banner -->
    <section class="fibrasil-banner fibrasil-wrapper">
        <div class="container h-100">
            <div class="row align-items-center text-center text-xl-left h-100">
                <div class="col-xl-5">
                    <h1>
                        <?php the_field('biblioteca_banner_titulo'); ?>
                    </h1>
                    <p class="fibrasil-feature-subtitle">
                        <span>
                            <?php the_field('biblioteca_banner_subtitulo'); ?>
                        </span>
                    </p>
                    <div class="fibrasil-banner-content">
                        <p>
                            <?php the_field('biblioteca_banner_texto'); ?>
                        </p>
                        <p>
                            <strong>
                                <?php the_field('biblioteca_banner_textoNegrito'); ?>
                            </strong>
                        </p>
                    </div>
                </div>

                <div class="col">
                    <picture>
                        <source media="(min-width: 1024px)"
                            srcset="<?php the_field('biblioteca_banner_imagem_desktop'); ?>">
                        <img src="<?php the_field('biblioteca_banner_imagem_mobile'); ?>" alt="Fibrasil Carrocerias"
                            class="fibrasil-img-absolute">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <!-- Fim - Seção Banner -->

    <!-- Início - Seção Conteúdos -->
    <section class="fibrasil-wrapper--margin">
        <div class="container text-center">
            <h2>
                <?php the_field('biblioteca_conteudos_titulo'); ?>
            </h2>
            <p class="mt-3 mb-5 fibrasil-subheading">
                <?php the_field('biblioteca_conteudos_subtitulo'); ?>
            </p>

            <!-- Início - Carrossel de conteúdos -->
            <div class="row justify-content-center">

                <div class="col-lg-10">
                    <div class="content-carousel">
                        <?php if (have_rows('biblioteca_ebooks')): ?>

                            <?php while (have_rows('biblioteca_ebooks')):
                                the_row(); ?>
                                <div class="col-lg-3 fibrasil-card">

                                    <article class="fibrasil-card-content">
                                        <div class="fibrasil-card-content-asset">
                                            <a href="<?php the_sub_field('biblioteca_ebook_link'); ?>" target="_blank">
                                                <img src="<?php the_sub_field('biblioteca_ebook_imagem'); ?>" alt="" width="246"
                                                    height="350">
                                            </a>
                                        </div>

                                        <div class="fibrasil-card-content-link">
                                            <a href="<?php the_sub_field('biblioteca_ebook_link'); ?>" target="_blank"
                                                class="fibrasil-button">
                                                Baixe aqui
                                            </a>
                                        </div>
                                    </article>
                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <!-- Fim - Carrossel de conteúdos -->
        </div>
    </section>
    <!-- Fim - Seção Conteúdos -->

    <!-- Início - Seção Blog -->
    <section class="fibrasil-wrapper">
        <div class="container">
            <div class="text-center mb-4">
                <h3>Blog</h3>
                <p class="fibrasil-subheading">Acompanhe o nosso blog para manter a sua frota sempre atualizada!</p>
            </div>

            <div class="row">
                <div class="col-12 col-md-4">
                    <article class="fibrasil-card-blog">
                        <div class="fibrasil-card-blog-asset">
                            <a href="https://fibrasilcarrocerias.com.br/blog/artigo/como-funciona-o-transporte-de-cargas-congeladas/"
                                target="_blank">
                                <img src="<?php echo get_template_directory_uri() . '/lp-biblioteca/assets/images/img-postblog-1.webp'; ?>"
                                    alt="">
                            </a>
                        </div>

                        <div class="fibrasil-card-blog-title">
                            <a href="https://fibrasilcarrocerias.com.br/blog/artigo/como-funciona-o-transporte-de-cargas-congeladas/"
                                target="_blank">
                                <h1>Como funciona o transporte de cargas congeladas?</h1>
                            </a>
                        </div>

                        <div class="fibrasil-card-blog-link">
                            <a href="https://fibrasilcarrocerias.com.br/blog/artigo/como-funciona-o-transporte-de-cargas-congeladas/"
                                target="_blank">
                                Leia mais
                            </a>
                        </div>

                    </article>
                </div>

                <div class="col-12 col-md-4">
                    <article class="fibrasil-card-blog">
                        <div class="fibrasil-card-blog-asset">
                            <a href="https://fibrasilcarrocerias.com.br/blog/artigo/como-e-feito-o-transporte-de-alimentos-pereciveis/"
                                target="_blank">
                                <img src="<?php echo get_template_directory_uri() . '/lp-biblioteca/assets/images/img-postblog-2.webp'; ?>"
                                    alt="">
                            </a>
                        </div>

                        <div class="fibrasil-card-blog-title">
                            <a href="https://fibrasilcarrocerias.com.br/blog/artigo/como-e-feito-o-transporte-de-alimentos-pereciveis/"
                                target="_blank">
                                <h1>Como é feito o transporte de alimentos perecíveis?</h1>
                            </a>
                        </div>

                        <div class="fibrasil-card-blog-link">
                            <a href="https://fibrasilcarrocerias.com.br/blog/artigo/como-e-feito-o-transporte-de-alimentos-pereciveis/"
                                target="_blank">
                                Leia mais
                            </a>
                        </div>

                    </article>
                </div>

                <div class="col-12 col-md-4">
                    <article class="fibrasil-card-blog">
                        <div class="fibrasil-card-blog-asset">
                            <a href="https://fibrasilcarrocerias.com.br/blog/artigo/como-deve-ser-o-veiculo-que-transporta-alimentos/"
                                target="_blank">
                                <img src="<?php echo get_template_directory_uri() . '/lp-biblioteca/assets/images/img-postblog-3.webp'; ?>"
                                    alt="">
                            </a>
                        </div>

                        <div class="fibrasil-card-blog-title">
                            <a href="https://fibrasilcarrocerias.com.br/blog/artigo/como-deve-ser-o-veiculo-que-transporta-alimentos/"
                                target="_blank">
                                <h1>Como deve ser o veículo que transporta alimentos?</h1>
                            </a>
                        </div>

                        <div class="fibrasil-card-blog-link">
                            <a href="https://fibrasilcarrocerias.com.br/blog/artigo/como-deve-ser-o-veiculo-que-transporta-alimentos/"
                                target="_blank">
                                Leia mais
                            </a>
                        </div>

                    </article>
                </div>

            </div>
        </div>
    </section>
    <!-- Fim - Seção Blog -->

    <!-- Início - Seção Newsletter -->
    <section class="fibrasil-background fibrasil-wrapper">
        <div class="container text-center">
            <h4 class="mb-4">
                Assine nossa newsletter
            </h4>

            <!-- <form class="fibrasil-form">
                <input type="text" placeholder="Nome">
                <input type="email" placeholder="E-mail">
                <input type="tel" placeholder="Telefone">
                <input type="submit" value="Inscrever-se" class="fibrasil-button">
            </form> -->

            <div role="main" id="formulario-de-contato-biblioteca-de-conteudos-15eeb80aafbe5ae07c19"></div>
            <script type="text/javascript"
                src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
            <script
                type="text/javascript"> new RDStationForms('formulario-de-contato-biblioteca-de-conteudos-15eeb80aafbe5ae07c19', 'UA-62480883-1').createForm();</script>
        </div>
    </section>
    <!-- Fim - Seção Newsletter -->

    <!-- Início - Seção Sobre -->
    <section class="fibrasil-wrapper">
        <div class="container-fluid p-0">
            <div class="row align-items-center">
                <div class="col-lg-6 order-1 order-lg-0">
                    <img src="<?php echo get_template_directory_uri() . '/lp-biblioteca/assets/images/img-truck.webp'; ?>"
                        alt="" class="img-fluid">
                </div>
                <div class="col-lg-4 order-0 order-lg-1 px-5 px-lg-0">
                    <h5>
                        <?php the_field('biblioteca_sobre_titulo'); ?>
                    </h5>
                    <?php the_field('biblioteca_sobre_texto'); ?>
                </div>
            </div>
        </div>

    </section>
    <!-- Fim - Seção Sobre -->

</main>


<?php get_footer(); ?>