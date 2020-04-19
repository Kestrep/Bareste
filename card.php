<?php $flyer_html = htmlspecialchars ('
    <div class="flyer">
    <img src="images/yoga-2" alt="Femme qui fait du Yoga">
    <div class="info">
        <h1>Lorem ipsum dolor sit amet.</h1>
        <p class="abstract">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ea voluptatibus beatae vero, aperiam animi.</p>
        <div class="btn-primary"><a href="#">Voir l\'offre</a></div>
    </div>
</div>
'); ?>
<?php $flyer_info = [
    "img_url" => get_template_directory_uri() . 'images/yoga-1',
    "img_alt" => 'Femme qui fait du yoga',
    "flyer_title" => 'Bonjour Lorem ipsum dolor sit amet consectetur',
    "flyer_content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, unde atque reiciendis exercitationem suscipit incidunt laboriosam libero magni, obcaecati officiis soluta tempore voluptatem, provident dolores',
    "flyer_link" => '#'
];
//var_dump(json_encode($flyer_info)); die;


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