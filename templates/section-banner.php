<?php
/*
* Section Banner
*/
?>

<div class="banner">
    <div class="image">
        <img src="<?= get_template_directory_uri(); ?>/src/images/top_bg.jpg">
    </div>
    <div class="container">
        <div class="content">
            <div class="content1">Прокат</div>
            <div class="content2">комфортного<br>автомобиля</div>
            <div class="content3">OMODA C5</div>
            <div class="content4">от 2500 <span>₽ / сут.</span></div>
        </div>
    </div>
</div>

<style>
    .banner {
        
    }
    .banner .image,
    .banner .image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .banner .image img {
        object-fit: cover;
        object-position: center center;
    }
    
    .banner .content {
        min-height: 300rem;
        padding: 90rem 0 90rem calc(50%);
        letter-spacing: -2rem;
    }
    .banner .content1 {
        color: white;
        font-size: 70rem;
        font-weight: 700;
        text-transform: uppercase;
    }
    .banner .content2 {
        color: white;
        font-size: 32rem;
        line-height: 0.8;
        font-weight: 400;
        text-transform: uppercase;
        margin: 10rem 0;
    }
    .banner .content3 {
        color: white;
        font-size: 70rem;
        font-weight: 600;
        text-transform: uppercase;
        color: rgb(var(--col-red));
    }
    .banner .content4 {
        color: white;
        font-size: 45rem;
        font-weight: 400;
        text-transform: uppercase;
        color: rgb(var(--col-red));
        margin-top: 20rem;
    }
    .banner .content4 span {
        font-size: 25rem;
    }
    @media screen and (max-width: 640px) {
        .banner .image img {
            object-position: -290px 0;
        }
        .banner .content {
            padding: 300px 10px 50px 10px;
        }
        .banner .content1 {
            font-size: 50px;
        }
        .banner .content2 {
            font-size: 30px;
        }
        .banner .content3 {
            font-size: 50px;
        }
        .banner .content4 {
            font-size: 35px;
        }
        .banner .content4 span {
            font-size: 20px;
        }
    }
</style>


