<?php
/*
* Section Prices
*/
?>

<div class="prices">
    <h1>Цены</h1>
    <div class="items">
        <span>
            <span>2 дня</span>
            <span>от 3’300* ₽ / сут.</span>
        </span>
        <span>
            <span>3-10 дней</span>
            <span>от 3’000* ₽ / сут.</span>
        </span>
        <span>
            <span>10-29 дней</span>
            <span>от 2’800* ₽ / сут.</span>
        </span>
        <span>
            <span>30+ дней</span>
            <span>от 2’500* ₽ / сут.</span>
        </span>
    </div>
</div>

<style>
    .prices .items span {
        display: table;
        padding: 5rem 0;
    }
    .prices .items > span {
        display: table-row;
    }
    .prices .items > span > span {
        display: table-cell;
    }
    .prices .items > span > span:nth-child(1) {
        padding-right: 10rem;
        white-space: nowrap;
    }
    .prices .items > span > span:nth-child(2) {
        width: 100%;
        font-weight: 600;
    }
    
</style>