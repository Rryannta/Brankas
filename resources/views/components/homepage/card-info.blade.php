@props(['titleCard', 'money', 'months'])

<div class="swiper-slide card-info">
    <div class="top">
        <h1 class="titlecard">{{ $titleCard }}</h1>
        <div class="icon">
            <i class="fa-solid fa-money-check"></i>
        </div>
    </div>
    <h2 class="money">Rp {{ $money }}</h2>
    <span class="months">{{ $months }}</span>
</div>
