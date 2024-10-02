<?php
/*
* Section Common
* Common Styles and Scripts
*/
?>

<!-- section-common.php -->

<style>
    

    #wpadminbar {
        
        display: none;
    
    }

    :root {
        --col-main: 53,54,55;
        --col-light: 235,237,239;
        --col-red: 221,51,52;
        --container-max-width: 1335px;
    }

    
    html {
        font-size: 1px;
        margin: 0!important;
        padding: 0!important;
        width: 100%!important;
    }
    
    body {
        font-size: 18rem;
        font-weight: 400;
        color: rgb(var(--col-main));
        margin: 0!important;
        padding: 0!important;
        width: 100%!important;
        overflow-x: hidden!important;
        /* padding-bottom: 150rem; */
    }
    
    * {
        font-family: 'GothamPro', sans-serif;
        box-sizing: border-box;
        position: relative;
    }

    .container {
        width: calc(100% - 80rem);
        max-width: var(--container-max-width);
        margin: 0 auto;
    }

    h1 {
        text-transform: uppercase;
        font-size: 35rem;
        margin: 20rem 0;
        padding: 0;
        font-weight: 400;
        letter-spacing: -1rem;
    }


    @media screen and (max-width: 1335px) {
        html {
            font-size: calc(100vw / 1335);
        }
    }

    @media screen and (max-width: 640px) {
        * {
            line-height: 1.2;
        }
        html {
            font-size: calc((35vw + 450px) / 640);
        }
        .container {
            width: 100vw;
            margin: 0 auto;
            padding: 0 40px;
        }

    }



</style>

<script>
	$(document).ready(() => {
		var $page = $('html, body');
		$('a[href*="#"]').click(function() {
			$page.animate({
				scrollTop: $($.attr(this, 'href')).offset().top
			}, 400);
			return false;
		});
	})
</script>