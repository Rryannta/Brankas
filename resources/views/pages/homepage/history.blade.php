<section class="history">
    <div class="top">
        <h1 class="text-1">Transaksi</h1>
        <a href="" class="see-all">lihat semua</a>
    </div>
    <div class="bottom">
        @include('components.homepage.history-card', [
            'icon' => '
                                                <svg class="income" xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                                                    <path d="M4.5 13C4.22 13 4 12.78 4 12.5V3.5C4 3.22 4.22 3 4.5 3C4.78 3 5 3.22 5 3.5V12.5C5 12.78 4.78 13 4.5 13Z"/>
                                                    <path d="M4.5 14C4.43442 14.0008 4.36941 13.9879 4.30913 13.962C4.24885 13.9362 4.19465 13.898 4.15 13.85L0.65 10.35C0.45 10.15 0.45 9.83999 0.65 9.63999C0.85 9.43999 1.16 9.43999 1.36 9.63999L4.51 12.79L7.66 9.63999C7.86 9.43999 8.17 9.43999 8.37 9.63999C8.57 9.83999 8.57 10.15 8.37 10.35L4.87 13.85C4.77 13.95 4.64 14 4.52 14H4.5Z"/>
                                                </svg>
                                                ',
            'titleCard' => 'KAS',
            'subTitle' => 'Haritsa', // ini bisa diisi nama untuk siapa yang kas , atau pengeluaran uang untuk apa
            'months' => '10-04-2025',
            'money' => '+Rp15.000',
            'moneyInfo' => 'income',
            'color' => 'income',
            'background' => 'income',
            'arrow' => 'income',
        ])
        @include('components.homepage.history-card', [
            'icon' => '
                                                <svg class="expanse" xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                                                    <path d="M4.5 13C4.22 13 4 12.78 4 12.5V3.5C4 3.22 4.22 3 4.5 3C4.78 3 5 3.22 5 3.5V12.5C5 12.78 4.78 13 4.5 13Z"/>
                                                    <path d="M4.5 14C4.43442 14.0008 4.36941 13.9879 4.30913 13.962C4.24885 13.9362 4.19465 13.898 4.15 13.85L0.65 10.35C0.45 10.15 0.45 9.83999 0.65 9.63999C0.85 9.43999 1.16 9.43999 1.36 9.63999L4.51 12.79L7.66 9.63999C7.86 9.43999 8.17 9.43999 8.37 9.63999C8.57 9.83999 8.57 10.15 8.37 10.35L4.87 13.85C4.77 13.95 4.64 14 4.52 14H4.5Z"/>
                                                </svg>
                                                ',
            'titleCard' => 'Pengeluaran',
            'subTitle' => 'Sapu dan kemoceng', // ini bisa diisi nama untuk siapa yang kas , atau pengeluaran uang untuk apa
            'months' => '10-04-2025',
            'money' => '+Rp15.000',
            'moneyInfo' => 'expanse',
            'color' => 'expanse',
            'background' => 'expanse',
            'arrow' => 'expanse',
        ])
        @include('components.homepage.history-card', [
            'icon' => '
                                                <svg class="income" xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                                                    <path d="M4.5 13C4.22 13 4 12.78 4 12.5V3.5C4 3.22 4.22 3 4.5 3C4.78 3 5 3.22 5 3.5V12.5C5 12.78 4.78 13 4.5 13Z"/>
                                                    <path d="M4.5 14C4.43442 14.0008 4.36941 13.9879 4.30913 13.962C4.24885 13.9362 4.19465 13.898 4.15 13.85L0.65 10.35C0.45 10.15 0.45 9.83999 0.65 9.63999C0.85 9.43999 1.16 9.43999 1.36 9.63999L4.51 12.79L7.66 9.63999C7.86 9.43999 8.17 9.43999 8.37 9.63999C8.57 9.83999 8.57 10.15 8.37 10.35L4.87 13.85C4.77 13.95 4.64 14 4.52 14H4.5Z"/>
                                                </svg>
                                                ',
            'titleCard' => 'KAS',
            'subTitle' => 'Haritsa', // ini bisa diisi nama untuk siapa yang kas , atau pengeluaran uang untuk apa
            'months' => '10-04-2025',
            'money' => '+Rp15.000',
            'moneyInfo' => 'income',
            'color' => 'income',
            'background' => 'income',
            'arrow' => 'income',
        ])
        @include('components.homepage.history-card', [
            'icon' => '
                                                <svg class="expanse" xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                                                    <path d="M4.5 13C4.22 13 4 12.78 4 12.5V3.5C4 3.22 4.22 3 4.5 3C4.78 3 5 3.22 5 3.5V12.5C5 12.78 4.78 13 4.5 13Z"/>
                                                    <path d="M4.5 14C4.43442 14.0008 4.36941 13.9879 4.30913 13.962C4.24885 13.9362 4.19465 13.898 4.15 13.85L0.65 10.35C0.45 10.15 0.45 9.83999 0.65 9.63999C0.85 9.43999 1.16 9.43999 1.36 9.63999L4.51 12.79L7.66 9.63999C7.86 9.43999 8.17 9.43999 8.37 9.63999C8.57 9.83999 8.57 10.15 8.37 10.35L4.87 13.85C4.77 13.95 4.64 14 4.52 14H4.5Z"/>
                                                </svg>
                                                ',
            'titleCard' => 'Pengeluaran',
            'subTitle' => 'Sapu dan kemoceng', // ini bisa diisi nama untuk siapa yang kas , atau pengeluaran uang untuk apa
            'months' => '10-04-2025',
            'money' => '+Rp15.000',
            'moneyInfo' => 'expanse',
            'color' => 'expanse',
            'background' => 'expanse',
            'arrow' => 'expanse',
        ])
        @include('components.homepage.history-card', [
            'icon' => '
                                                <svg class="income" xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                                                    <path d="M4.5 13C4.22 13 4 12.78 4 12.5V3.5C4 3.22 4.22 3 4.5 3C4.78 3 5 3.22 5 3.5V12.5C5 12.78 4.78 13 4.5 13Z"/>
                                                    <path d="M4.5 14C4.43442 14.0008 4.36941 13.9879 4.30913 13.962C4.24885 13.9362 4.19465 13.898 4.15 13.85L0.65 10.35C0.45 10.15 0.45 9.83999 0.65 9.63999C0.85 9.43999 1.16 9.43999 1.36 9.63999L4.51 12.79L7.66 9.63999C7.86 9.43999 8.17 9.43999 8.37 9.63999C8.57 9.83999 8.57 10.15 8.37 10.35L4.87 13.85C4.77 13.95 4.64 14 4.52 14H4.5Z"/>
                                                </svg>
                                                ',
            'titleCard' => 'KAS',
            'subTitle' => 'Haritsa', // ini bisa diisi nama untuk siapa yang kas , atau pengeluaran uang untuk apa
            'months' => '10-04-2025',
            'money' => '+Rp15.000',
            'moneyInfo' => 'income',
            'color' => 'income',
            'background' => 'income',
            'arrow' => 'income',
        ])
    </div>
</section>
