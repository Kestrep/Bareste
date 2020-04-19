<?php get_header(); ?>

<section class="first-section">
    <img src="<?= get_template_directory_uri() . "/" ?>images/vieil-homme.jpg" alt="Photo de vieil homme" class="parallax">
</section>

<?php 
 
$args = [
    'post_type' => 'post',
];
$query = new WP_Query($args);

$index = 0;
if($query->have_posts()): while($query->have_posts()): $query->the_post();

        $img_position = [
            'img-left-top',
            'img-right-top',
            'img-left-bottom',
            'img-right-bottom',
        ];
        $img = [
            'garden-1',
            'garden-2',
            'yoga-1',
            'papy-1',
        ]
?>

<section class="article-presentation <?= $img_position[$index]; ?>">
    <div class="thumbnail-container">
        <div class="thumbnail-wrapper">
            <div class="thumbnail-border"></div>
            <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?php get_the_post_thumbnail_caption(); ?>">
        </div>
    </div>

    <div class="info-container">
        <h1><?= $index; ?><?php the_title(); ?></h1>
        <p class="abstract"><?php the_excerpt(); ?></p>
        <div class="btn bw"><a href="<?php the_permalink(); ?>">Lire plus</a></div>
    </div>
</section>

<?php $index += 1; endwhile; endif;

wp_reset_postdata();
?>

<?php $flyer_info = [
    "img_url" => get_template_directory_uri() . '/images/yoga-1',
    "img_alt" => 'Femme qui fait du yoga',
    "flyer_title" => 'Bonjour Lorem ipsum dolor sit amet consectetur',
    "flyer_content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, unde atque reiciendis exercitationem suscipit incidunt laboriosam libero magni, obcaecati officiis soluta tempore voluptatem, provident dolores',
    "flyer_link" => '#'
];
?>

<section class="catalogue">
    <?php 
        $nb_cards = 5; for ($i=0; $i < $nb_cards; $i++): 
        
        ?>

        <div class="card <?php if($i === 0) echo 'active'; ?>" data-flyer="<?= htmlspecialchars(json_encode($flyer_info)); /* $flyer_html */ ?>">
            <div class="card-container">
                <div class="background"></div>
                <div class="border"></div>
                <div class="text">Lorem ipsum dolor sit amet dolores</div>
                <div class="arrow"></div>
                <div class="icon-container">
                    <div class="little-container"></div>
                    <span class="icon-lotus-d"></span>
                </div>
            </div>
        </div>


    <?php endfor; ?>

    <div class="flyer">
        <img src="<?= get_template_directory_uri() . "/images/yoga-2.jpg"?>" alt="Femme qui fait du Yoga">
        <div class="info">
            <h1>Lorem ipsum dolor sit amet.</h1>
            <p class="abstract">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ea voluptatibus beatae vero, aperiam animi.</p>
            <div class="btn-primary"><a href="#">Voir l'offre</a></div>
        </div>
    </div>

</section>


<?php get_footer();