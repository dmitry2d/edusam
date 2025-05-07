
<?php
/*
* Section Gallery
*/
?>

<?php
    $photos = get_field('photos', 9);
?>


<div class="gallery container">

    <h1>Галерея</h1>
    
    <div class="items">

    <?php
        foreach ($photos as $photo) {
    ?>

        <div class="item">
            <a data-lightbox="gallery" href="<?= $photo ?>">
                <img src="<?= $photo ?>">
            </a>
        </div>

    <?php
        }
    ?>

    </div>

</div>


<style>
    .gallery {
        padding-top: 30rem;
        padding-bottom: 30rem;
        max-height: 0;
        overflow: hidden;
    }
    .gallery.ready {
        max-height: unset;
    }
    .gallery .items {
        align-items: center;
    }
    .gallery .item {
        padding: 10rem;
    }
    .gallery .item a {
        display: block;
        width: 100%;
        height: 0;
        padding-bottom: 50%;
    }
    .gallery .item img {
        position: absolute;
        width: 100%;
        object-fit: cover;
        border-radius: 20rem;
        height: 0;
    }
    .gallery.ready .item img {
        height: 100%;
    }
    .gallery .slick-slide {
        height: unset;
    }
    .gallery .slick-dots li button {
        font-size: 0;
        line-height: 0;
        display: block;
        width: 20px;
        height: 20px;
        padding: 5px;
        cursor: pointer;
        color: transparent;
        border: 0;
        outline: none;
        background: transparent;
    }
    .gallery .slick-dots {
        /* position: absolute; */
        /* bottom: -25px; */
        display: block;
        width: 100%;
        padding: 0;
        margin: 10px 0;
        list-style: none;
        text-align: center;
    }
    .gallery .slick-dots li {
        position: relative;
        display: inline-block;
        width: 15px;
        height: 15px;
        margin: 0 5px;
        padding: 0;
        cursor: pointer;
    }
    .gallery .slick-dots li button:before {
        position: absolute;
        top: 0;
        left: 0;
        width: 10px;
        height: 10px;
        content: '';
        text-align: center;
        opacity: .25;
        background: rgb(var(--col-red));
        border-radius: 20px;
    }
    .gallery .slick-dots li.slick-active button:before {
        opacity: 1;
    }
</style>


<script>
    $(document).ready(function(){
        $('.gallery .items').slick({
            prevArrow: '<div class="gallery__prev-arrow"></div>',
            nextArrow: '<div class="gallery__next-arrow"></div>',
            slidesToShow: 6,
            slidesToScroll: 3,
            autoplay: true,
            infinite: true,
            responsive: [
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 3,
                        dots: true,
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2,
                        dots: true,
                    }
                },
                {
                    breakpoint: 640,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                    }
                },
            ]
        });
        lightbox.option({
            alwaysShowNavOnTouchDevices: true
        });
        $('.gallery').addClass('ready');

    });

</script>
