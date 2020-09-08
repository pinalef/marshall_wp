<?php
/* Template Name: Somos  */
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php query_posts("category_name=somos&showposts=1"); ?>
  <?php while (have_posts()) : the_post(); ?>

    <div id="bg_somos" class="banner">
    </div>

    <div class="container-fluid py-5">
      <div class="row pt-5">
        <div class="col-md-11 mx-auto">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase"><strong> ¿Quién es Marshall?</strong> </h2> <!-- TITULO -->
              <?php the_field('que_es_marshall'); ?>
            </div>
            <div class="col-md-6 my-5 mx-auto">
              <div class="card">
                <div class="card-body text-center">
                  <?php the_field('foto_historia'); ?>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h2> <?php the_title(); ?></strong> </h2> <!-- TITULO -->
                <hr class="hr-light my-4 ">
                <?php the_field('historia_marshall'); ?>
              </div>

            </div>

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