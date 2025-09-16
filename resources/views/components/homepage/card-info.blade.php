@props(['titleCard', 'money', 'months', 'class', 'icon'])

<div class="swiper-slide card-info">
    <div class="top">
        <h1 class="titlecard {{ $class }}">{{ $titleCard }}</h1>
        <div class="icon">
            <img src="{{ asset($icon) }}" alt="">
        </div>
    </div>
    <h2 class="money">Rp {{ $money }}</h2>
    <span class="months">{{ $months }}</span>
</div>
