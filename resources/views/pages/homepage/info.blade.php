{{-- container finance info --}}

<div class="swiper-finance card-container">
    <div class="swiper-wrapper">
        @include('components.homepage.card-info', [
            'titleCard' => 'Total Kas',
            'money' => '32.000.000',
            'months' => 'Total Semua',
            'class' => 'total-kas',
            'icon' => 'icons/total.svg'
        ])
        @include('components.homepage.card-info', [
            'titleCard' => 'Pengeluaran',
            'money' => '32.000.000',
            'months' => 'September',
            'class' => 'pengeluaran',
            'icon' => 'icons/pengeluaran.svg'
        ])
    </div>

    {{-- <div class="swiper-pagination"></div> --}}
</div>

@push('script')
    <script>
        const swiper = new Swiper('.swiper-finance', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,
            slidesPerView: 1, // hanya 1 card tampil
            spaceBetween: 20, // jarak antar card
            centeredSlides: true, // agar card center di layar
            loop: false, // jika tidak ingin infinite loop
            grabCursor: true, // cursor seperti drag saat di desktop

            pagination: {
                el: '.swiper-pagination',
            },
        });
    </script>
@endpush
