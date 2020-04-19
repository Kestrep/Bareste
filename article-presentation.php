<?php if(have_posts()): while(have_posts()): the_post();

    for ($i=0; $i < 4; $i++):
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

<section class="article-presentation <?= $img_position[$i]; ?>">
    <div class="thumbnail-container">
        <div class="thumbnail-wrapper">
            <div class="thumbnail-border"></div>
            <img src="<?= get_template_directory_uri() . "/" ?>images/<?= $img[$i]; ?>" alt="">
        </div>
    </div>

    <div class="info-container">
        <h1>Lorem ipsum dolor sit amet.</h1>
        <p class="abstract">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <div class="btn bw"><a href="#">Lire plus</a></div>
    </div>
</section>

<?php endfor; ?>

<?php endwhile; endif;

