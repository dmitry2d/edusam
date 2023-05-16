<?php
/*
* Section Specs
*/
?>

<div class="specs">
    <h1>Характеристики</h1>
    <div class="items">
        <span>Двигатель: 147 л.с. бензин;</span>
        <span>Тип КПП: вариатор;</span>
        <span>Привод: передний;</span>
        <span>Расход топлива на 100 км: 7 л;</span>
        <span>Количество мест: 5;</span>
        <span>Цвет кузова: черный;</span>
        <span>резина Nokian Hakkapeliitta R3</span>
    </div>
</div>

<style>
    .specs .items span {
        display: flex;
        align-items: center;
        padding: 5rem 0;
    }
    .specs .items span:before {
        content: '';
        width: 10rem;
        height: 10rem;
        background: rgb(var(--col-red));
        margin-right: 20rem;
        border-radius: 20rem;
    }
</style>