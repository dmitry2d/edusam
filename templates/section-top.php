<?php
/*
* Section Top
*/
?>


<div class="top container">
    <div class="logo">
        <img src="<?= get_template_directory_uri(); ?>/src/images/logo.svg">
    </div>
    <div class="name">
        <div class="title">
            Аренда престижных автомобилей<br>
        </div>
        <div class="http">
            едусам.рф
        </div>
    </div>
</div>

<style>
    .top {
        display: flex;
        padding: 30rem 0;
    }
    .top .logo {
        max-height: 100%;
    }
    .top .logo img {
        position: absolute;
        top: 0;
        height: calc(100% + 30rem);
    }
    .top .name {
        padding-left: 90rem;
        font-size: 18rem;
    }
    .top .name .http {
        font-weight: 500;
    }

</style>