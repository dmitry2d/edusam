<?php
/*
* Section Requirements
*/
?>

<div class="requirements">
    <div class="container">
        <h1>Требования</h1>
        <div class="items">
            <span>Возраст от 25 лет</span>
            <span>КБМ ≦0,95</span>
            <span>Постоянная прописка</span>
            <span>НЕ ДЛЯ ТАКСИ</span>
            <span>залог 5000 рублей</span>
        </div>
        <p>Оплата для физ. лиц: наличные, банковская карта</p>
        <p>Оплата для юр. лиц: наличные, безнал (без НДС)</p>
    </div>
</div>

<style>
    .requirements {
        margin: 70rem 0;
    }
    .requirements .items span {
        display: flex;
        align-items: center;
        padding: 5rem 0;
    }
    .requirements .items span:before {
        content: '';
        width: 10rem;
        height: 10rem;
        background: rgb(var(--col-red));
        margin-right: 20rem;
        border-radius: 20rem;
    }
</style>