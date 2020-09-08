<?php
/* Template Name: Contacto  */
?>

<?php get_header(); ?>

<div id="bg_contact" class="banner">
</div>

<?php if (have_posts()) : ?>
  <?php query_posts("category_name=contacto&showposts=1"); ?>
  <?php while (have_posts()) : the_post(); ?>


    <div class="container">
      <div class="row pt-5">
        <div class="col-md-11">
          <h1>Contáctanos</h1>
        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="row">
        <div class="col-md-12 mx-auto">
          <h4> <?php the_field('contacto_bienvenida'); ?></h4>
          <?php the_field('contacto_fono'); ?>
          <?php the_field('contacto_mail'); ?>
        </div>
      </div>
    </div>

    <section class="bg_black text-white py-5">
      <div class="container   ">
        <div class="row">

          <div class="col-md-9 ">
            <div class="mapa">
              <h4 class="py-4">Encuentra nuestro retailer autorizado</h4>
              <div class="embed-responsive embed-responsive-16by9">
                <?php the_field('contacto_mapa'); ?>
              </div>
            </div>
          </div>
          <div class="col-md-3 pt-5">
            <h4>Horarios ReifStore Costanera Center</h4>
            <?php the_field('contacto_horarios'); ?>
          </div>
        </div>
      </div>
    </section>

    <div class="container py-5">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6 mx-auto">
              <h5>Envianos tu mensaje</h5>
              <?php the_field('contacto_formulario'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>


  <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>