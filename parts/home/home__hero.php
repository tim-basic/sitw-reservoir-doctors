<?php

$hero = $acf['hero'];
$video = $hero['video'];
$use_image = $hero['use_image'];
$image = $hero['image'];
$heading = $hero['heading'];
$filter = $hero['filter'];

?>
<section class="hero">
    <div class="hero__background">
        <?if ($use_image): ?>
            <img src="<?echo $image['url'] ?>" alt="<?echo $image['alt'] ?>">
        <?else: ?>
            <video class="hero__video" width="100%" autoplay loop muted="muted" src='<?php echo $video['url'] ?>'
                type="video/mp4">
            </video>
        <?endif;?>
    </div>
    <div class='container'>
        <div class='row medium-unstack hero__row'>
            <div class="hero__content columns">
                <h1><?php echo $heading; ?></h1>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</section>