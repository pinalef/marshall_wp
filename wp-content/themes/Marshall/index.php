<?php
/* Template Name: Inicio */
?>



<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php query_posts("category_name=home&showposts=1&order=asc"); ?>
  <?php while (have_posts()) : the_post(); ?>
    <header class="d-none d-sm-block">
      <div id="bg_index" class="banner d-flex align-content-end flex-wrap">
        <div class="container-fluid pb-5">
          <div class="row ">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-8 content py-3 text-center text-light mx-auto">
                  <h2> <?php the_title(); ?></strong> </h2> <!-- TITULO -->
                  <hr class="hr-light my-4  fadeInDown">
                  <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

  <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

<!-- Producto -->
<section id="product" class="py-5">
  <?php if (have_posts()) : ?>
    <?php query_posts(array(
      'category_name'  => 'producto'
    )); ?>
    <?php while (have_posts()) : the_post(); ?>

      <div class="container">
        <div class="row pt-5">
          <div class="col-md-6">
            <?php the_field('producto_slider'); ?>
          </div>
          <div class="col-md-6 text-white">
            <h1><strong> <?php the_field('titulo_producto'); ?> </strong></h1>
            <span class="text-justify"> <?php the_field('producto_descripcion'); ?></span>
            <span class="text-uppercase"> <strong><?php the_field('producto_opciones'); ?></strong></span>
            <span class="text-uppercase"> <strong> $ <?php the_field('producto_precio'); ?></strong></span>
          </div>
        </div>
      </div>

    <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
  <?php wp_reset_query(); ?>
</section>

<!-- caracteristicas -->
<section class="bg_black text-white">
  <?php if (have_posts()) : ?>
    <?php query_posts("name=el-sistema-multiroom-mas-potente"); ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="container py-5">
        <div class="row">
          <div class="col-md-12">
            <?php the_post_thumbnail('medium_large', array('class' => 'img-fluid mx-auto d-block')); ?>

          </div>
          <div class="col-md-12 py-5">
            <div class="row">
              <div class="col-md-7 mx-auto text-center text-justify">
                <h2><strong> <?php the_title(); ?> </strong></h2> <!-- TITULO -->
                <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->

              </div>
            </div>

          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
  <?php wp_reset_query(); ?>

  <?php if (have_posts()) : ?>
    <?php query_posts("name=las-ventajas-del-wi-fi"); ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="container py-5">
        <div class="row">
          <div class="col-md-6">
            <?php the_post_thumbnail('medium_large', array('class' => 'img-fluid')); ?>
          </div>
          <div class="col-md-6 text-center text-justify">
            <h4><strong> <?php the_title(); ?> </strong></h4> <!-- TITULO -->
            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
  <?php wp_reset_query(); ?>

  <?php if (have_posts()) : ?>
    <?php query_posts("name=diseno-marshall-emblematico"); ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="container py-5">
        <div class="row">
          <div class="col-md-6 text-center text-justify">
            <h4> <strong><?php the_title(); ?> </strong></h4> <!-- TITULO -->
            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
          </div>
          <div class="col-md-6">
            <?php the_post_thumbnail('medium_large', array('class' => 'img-fluid mx-auto d-block')); ?>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
  <?php wp_reset_query(); ?>


  <div class="container py-5">
    <div class="row">

      <?php if (have_posts()) : ?>
        <?php query_posts("name=junto-con-el-multiroom"); ?>
        <?php while (have_posts()) : the_post(); ?>

          <div class="col-md-6 text-center text-justify">
            <?php the_post_thumbnail('medium'); ?>
            <h4><strong> <?php the_title(); ?> </strong></h4> <!-- TITULO -->
            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
          </div>
        <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>

      <?php if (have_posts()) : ?>
        <?php query_posts("name=siete-preajustes-para-tus-favoritos"); ?>
        <?php while (have_posts()) : the_post(); ?>

          <div class="col-md-6 text-center text-justify">
            <?php the_post_thumbnail('medium'); ?>
            <h4><strong> <?php the_title(); ?> </strong></h4> <!-- TITULO -->
            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
          </div>
        <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>

    </div>
  </div>


  <?php if (have_posts()) : ?>
    <?php query_posts("name=seis-formas-de-conectarse-infinitas-posibilidades-de-sonido"); ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="container pt-5">
        <div class="row">
          <div class="col-md-12 text-center text-justify">
            <h4><strong> <?php the_title(); ?> </strong></h4> <!-- TITULO -->
            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
          </div>
          <div class="col-md-12 pt-3">

            <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>


          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
  <?php wp_reset_query(); ?>

  <div class="container py-5">
    <div class="row">

      <?php if (have_posts()) : ?>
        <?php query_posts("name=un-altavoz-inteligente"); ?>
        <?php while (have_posts()) : the_post(); ?>

          <div class="col-md-6 text-center text-justify">
            <?php the_post_thumbnail('medium'); ?>
            <h4><strong> <?php the_title(); ?> </strong></h4> <!-- TITULO -->
            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
          </div>
        <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>

      <?php if (have_posts()) : ?>
        <?php query_posts("name=tu-hogar-tu-sonido"); ?>
        <?php while (have_posts()) : the_post(); ?>

          <div class="col-md-6 text-center text-justify">
            <?php the_post_thumbnail('medium'); ?>
            <h4><strong> <?php the_title(); ?></strong> </h4> <!-- TITULO -->
            <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
          </div>
        <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>


    </div>
  </div>



  <!-- video -->

  <div class="container-fluid py-5">

    <div class="row">
      <div class="col-md-10 mx-auto d-block">

        <?php if (have_posts()) : ?>
          <?php query_posts("name=video"); ?>
          <?php while (have_posts()) : the_post(); ?>

            <div class="embed-responsive embed-responsive-16by9">
              <?php the_content(array('class' => 'embed-responsive-item')); ?>
            </div>
      </div>
    </div>
  </div>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

</section>

<!-- Espedificaciones -->
<?php if (have_posts()) : ?>
  <?php query_posts("category_name=especificaciones&showposts=1"); ?>
  <?php while (have_posts()) : the_post(); ?>

    <div class="container-fluid my-5 mb-3">
      <div class="row">
        <div class="col-md-10 offset-1">
          <div class="row">
            <div class="col-md-12 text-center">
              <h1><strong> <?php the_title(); ?> </strong> </h1> <!-- TITULO -->
              <span class="text-uppercase h3"> <strong> <?php the_content(); ?> </strong></span> <!-- PARRAFO DE TEXTO -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container pb-5">
      <div class="row my-auto">
        <div class="col-md">

          <span class="text-uppercase h4"><strong><i class="icon-speakers-audio-specifications h2"></i> Especificaciones de Audio</strong></span>
          <?php the_field('especificaciones_audio'); ?>
          <span class="text-uppercase h4"><strong><i class="icon-power h2"></i> Power</strong></span>
          <?php the_field('especificaciones_power'); ?>

        </div>
        <div class="col-md">
          <span class="text-uppercase h4"><strong><i class="icon-controls-and-connectivity h2"></i> Controles y Conectividad</strong></span>
          <?php the_field('especificaciones_conectividad'); ?>
          <span class="text-uppercase h4"><strong> <i class="icon-required-apps h2"></i> Aplicaciones Requeridas</strong></span>
          <?php the_field('especificaciones_apps'); ?>

        </div>
        <div class="col-md">
          <span class="text-uppercase h4"><strong><i class="icon-included-in-the-box h2"></i> En la caja</strong></span>
          <?php the_field('caja_incluye'); ?>
          <span class="text-uppercase h4"><strong> <i class="icon-speakers-physical-unit h2"></i> Medidas Físicas</strong></span>
          <?php the_field('unidad_fisica'); ?>

        </div>
      </div>
    </div>
  <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

<?php get_footer(); ?>