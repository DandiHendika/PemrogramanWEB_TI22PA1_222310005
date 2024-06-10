document.getElementById('kirim-btn').addEventListener('click', function() {
    var nama = document.getElementById('nama').value;
    var tujuan = document.getElementById('tujuan').value;
    var kelas = document.getElementById('kelas').value;
    var banyakTiket = parseInt(document.getElementById('banyak_tiket').value);
    var statusMember = document.getElementById('status').value;

    var hargaTiket;
    if (tujuan === 'Jakarta') {
        switch (kelas) {
            case 'Eksekutif':
                hargaTiket = 70000;
                break;
            case 'Bisnis':
                hargaTiket = 40000;
                break;
            case 'Ekonomi':
                hargaTiket = 10000;
                break;
        }
    } else if (tujuan === 'Solo') {
        switch (kelas) {
            case 'Eksekutif':
                hargaTiket = 80000;
                break;
            case 'Bisnis':
                hargaTiket = 50000;
                break;
            case 'Ekonomi':
                hargaTiket = 20000;
                break;
        }
    } else if (tujuan === 'Surabaya') {
        switch (kelas) {
            case 'Eksekutif':
                hargaTiket = 90000;
                break;
            case 'Bisnis':
                hargaTiket = 60000;
                break;
            case 'Ekonomi':
                hargaTiket = 30000;
                break;
        }
    }

    var subtotal = hargaTiket * banyakTiket;

    var diskon = statusMember === 'Member' ? 0.1 * subtotal : 0;

    var totalBayar = subtotal - diskon;

    var output = "<h3>Rincian Pemesanan</h3>" +
                 "<p>Nama Pemesan : " + nama + "</p>" +
                 "<p>Tujuan : " + tujuan + "</p>" +
                 "<p>Kelas : " + kelas + "</p>" +
                 "<p>Banyak Tiket : " + banyakTiket + "</p>" +
                 "<p>Status : " + statusMember + "</p>" +
                 "<p>Harga Tiket: Rp " + hargaTiket + "</p>" +
                 "<p>Subtotal: Rp " + subtotal + "</p>" +
                 "<p>Diskon: Rp " + diskon + "</p>" +
                 "<p>Total Bayar: Rp " + totalBayar + "</p>";

    document.getElementById('output-container').innerHTML = output;
});