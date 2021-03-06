<?php global $post;
$post_id = $post->ID;
$post_name = $post ->post_name;
$post_title = $post ->post_title;
$post_content = $post ->post_content;
$url = wp_get_attachment_url( get_post_thumbnail_id($post_id) ); ?>

<section id="<?php echo $post_name; ?>" class="contatti fullWidth">

<?php include(dirname(__FILE__)."/fullWidthTopContent/topContent.php"); ?>

<div class="container">
<?php if(my_wp_is_mobile() ) { ?>

    <h1><?php echo $post_title; ?></h1>

    <div class="blocco_container">
        <div class="blocco_wrapper">
            <?php echo $post_content; ?>
        </div><!--blocco_wrapper-->
    </div><!--blocco_container-->

<?php } else { ?>
    <h1><?php echo $post_title; ?></h1>
    <div class="blocco_container">
        <div class="blocco_wrapper">
            <?php echo $post_content; ?>
        </div><!--blocco_wrapper-->

        <div class="blocco_wrapper form_wrapper">
            <?php include(dirname(__FILE__)."/map.php"); ?>
        </div><!--blocco_wrapper-->
    </div><!--blocco_container-->
<?php } ?>
</div><!--container-->
</section>