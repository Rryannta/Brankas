<section class="pemasukan">
    <div class="card-pemasukan">
        <h1 class="text-1">Pemasukan Bulanan</h1>
        <div class="info">
            <h3 class="money2 hijau">Rp32.000</h3>
            <div class="right">
                {{-- Grafik up jika bulan ini untung --}}
                <i class="bi bi-graph-up-arrow icon-up"></i>
                {{-- Grafik down jika bulan ini kurang untung dari bulan kemarin --}}
                <i class="bi bi-graph-down-arrow icon-down d-none"></i>
            </div>
        </div>

        <div class="months">
            <div class="month-selector">
                <h3 class="bulan">September</h3>
                <i id="calendarIcon" class="bi bi-calendar3"></i>
            </div>

            <!-- Popup bulan -->
            <div id="monthPopup" class="month-popup">
                <ul>
                    <li data-month="January">January</li>
                    <li data-month="February">February</li>
                    <li data-month="March">March</li>
                    <li data-month="April">April</li>
                    <li data-month="May">May</li>
                    <li data-month="June">June</li>
                    <li data-month="July">July</li>
                    <li data-month="August">August</li>
                    <li data-month="September">September</li>
                    <li data-month="October">October</li>
                    <li data-month="November">November</li>
                    <li data-month="December">December</li>
                </ul>
            </div>
        </div>
    </div>
</section>

@push('script')
    <script>
        const calendarIcon = document.getElementById('calendarIcon');
        const monthPopup = document.getElementById('monthPopup');
        const bulanText = document.querySelector('.bulan');
        const moneyText = document.querySelector('.money2'); // <-- target untuk ubah warna teks

        console.log(moneyText)

        // Toggle popup saat icon ditekan
        calendarIcon.addEventListener('click', (e) => {
            e.stopPropagation(); // jangan sampai event bubble ke body
            monthPopup.classList.toggle('show');
        });

        // Klik di luar popup -> tutup popup
        document.addEventListener('click', (e) => {
            if (!monthPopup.contains(e.target) && !calendarIcon.contains(e.target)) {
                monthPopup.classList.remove('show');
            }
        });

        // Pilih bulan
        document.querySelectorAll('#monthPopup li').forEach(item => {
            item.addEventListener('click', function() {
                const selectedMonth = this.getAttribute('data-month');

                // Ganti teks bulan
                bulanText.textContent = selectedMonth;

                // Ambil icon naik/turun
                const iconUp = document.querySelector('.icon-up');
                const iconDown = document.querySelector('.icon-down');

                // Logika contoh: September & October = untung
                if (selectedMonth === "September" || selectedMonth === "October") {
                    iconUp.classList.remove('d-none');
                    iconDown.classList.add('d-none');

                    // Warna teks jadi hijau
                    moneyText.classList.add('hijau');
                    moneyText.classList.remove('merah');

                } else {
                    iconUp.classList.add('d-none');
                    iconDown.classList.remove('d-none');

                    // Warna teks jadi merah
                    moneyText.classList.add('merah');
                    moneyText.classList.remove('hijau');
                }

                // Tutup popup
                monthPopup.classList.remove('show');
            });
        });
    </script>
@endpush
