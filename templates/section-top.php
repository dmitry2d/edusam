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
            <?= get_field('title', 9)?>
        </div>
        <div class="http">
            <?= get_field('url', 9)?>
        </div>
    </div>
    <div class="contacts">
        <div class="phone"><?= get_field('phone', 9)?></div>
        <?php /*div class="email"><a href="mailto:<?= get_field('email', 9)?>"><?= get_field('email', 9)?></a></div*/?>
        <div class="scroll-btn"><a href="#order_form_block">Подать заявку</a></div>
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
    .scroll-btn {
		  margin-top: 15rem;
    }
    .scroll-btn a {
			width: 200rem;
			height: 40rem;
			margin-left: auto;
			display: flex;
			align-items: center;
			justify-content: center;
			border: 0;
			background: #353637;
			border-radius: 3rem;
			color: #fff;
			cursor: pointer;
			font-size: 18rem;
			transition: 0.5s all;
			text-decoration: none;
    }
		.scroll-btn a:hover {
			box-shadow: 0px 0px 20rem 0px rgba(0, 0, 0, 0.15);
			background: #dd3334;
		}
    @media screen and (max-width: 640px) {
		    .scroll-btn a {
					width: 200rem;
					height: 40rem;
					margin-left: 0;
					margin-right: 0;
		    }
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
