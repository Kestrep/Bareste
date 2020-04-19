<?php get_header(); ?>
<?php the_post(); ?>
<div class="thumbnail-container">
    <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_post_thumbnail_caption() ?>" class="parallax">
</div>
<div class="title-anchor">
    <h1 class="up"><?php the_title(); ?></h1>
</div>
<section class="content">
    <?php the_content(); ?>
</section>

<section class="contact-box">
    <div class="contact-box-wrapper">
        <div class="image">
            <img src="images/papy-1" alt="Photo de Bareste">
        </div>
        <div class="info">
            <div class="title">Lorem ipsum dolor sit.</div>
            <div class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit voluptatem iure facilis libero voluptatum corrupti pariatur possimus nemo doloremque adipisci. Illo autem delectus eligendi fuga?</div>
            <div class="btn-primary">Me contacter</div>
        </div>
    </div>
</section>
<?php get_footer(); ?>