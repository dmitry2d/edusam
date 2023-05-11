
<?php
/*
* Page Main
*/
?>

<?php 

    get_template_part('templates/section', 'header');
    
    get_template_part('templates/section', 'top');

    get_template_part('templates/section', 'banner');

    get_template_part('templates/section', 'gallery');
?>

<div class="about__specs">

    <?php get_template_part('templates/section', 'about'); ?>
    
    <div class="container">

        <div class="specs__prices">
    
            <?php get_template_part('templates/section', 'specs'); ?>
    
            <?php get_template_part('templates/section', 'prices'); ?>
    
        </div>
    
    </div>

    <?php get_template_part('templates/section', 'requirements'); ?>
    
    
</div>

<?php
    
    get_template_part('templates/section', 'top');
    
    get_template_part('templates/section', 'footer');

?>

<style>

    .about__specs {
        background: rgb(var(--col-light));
        padding: 50rem 0;
    }
    .specs__prices {
        display: flex;
        margin: -20rem;
        width: 100%;
    }
    .specs__prices > div { 
        margin: 20rem;
        min-width: 50%;
    }

    @media screen and (max-width: 640px) {
        .specs__prices {
            flex-direction: column;
        }
    }

</style>