@props(['titleCard', 'money', 'months', 'subTitle', 'icon', 'moneyInfo', 'color', 'background', 'arrow'])

<div class="history-card">
    <div class="left">
        <div class="icon {{ $arrow }}">
            {!! $icon !!}
        </div>

        <div class="info">
            <h1 class="title">{{ $titleCard }}</h1>
            <p class="subtitle">{{ $subTitle }}</p>
            <span class="months">{{ $months }}</span>
        </div>
    </div>


    <div class="money-container">
        <span class="money {{ $color }}">{{ $money }}</span>
        <span class="moneyinfo {{ $background }}">{{ $moneyInfo }}</span>
    </div>
</div>
