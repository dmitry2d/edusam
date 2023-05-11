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
    <div class="contacts">
        <div class="phone">+7 921 024 5052</div>
        <div class="email"><a href="mailto:email@email.com">email@email.com</a></div>
    </div>
</div>

<style>
    .top {
        display: flex;
        padding: 40rem 0;
    }
    .top .logo {
        max-height: 100%;
    }
    .top .logo img {
        position: absolute;
        top: -5px;
        height: calc(100% + 45rem);
    }
    .top .name {
        padding-left: 120rem;
        padding-top: 10rem;
        font-size: 18rem;
        flex-grow: 1;
    }
    .top .name .http {
        font-weight: 500;
    }

    .top .contacts .phone {
        font-size: 30rem;
        color: rgb(var(--col-red));
    }
    .top .contacts .email a{
        font-size: 14rem;
        color: rgb(var(--col-main));
    }
    @media screen and (max-width: 640px) {
        .top {
            flex-direction: column;
        }
        .top .logo img {
            height: 100px;
            top: 10px;
        }
        .top .contacts {
            padding-top: 20px;
            padding-left: 110px;
        }
        .top .contacts .email a{
            padding-top: 5px;
            font-size: 16px;
        }
    }
</style>