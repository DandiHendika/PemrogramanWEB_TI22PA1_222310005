document.getElementById('form-mahasiswa').addEventListener('submit', function(event) {
    event.preventDefault();

    var nim = document.getElementById('npm').value;
    var nama = document.getElementById('nama').value;
    var jk = document.getElementById('jk').value;
    var agama = document.getElementById('agama').value;
    var status = document.getElementById('status').value;
    var jurusan = document.getElementById('jurusan').value;
    var komentar = document.getElementById('komentar').value;

    var output = "<h3>HASIL DATA DIRI</h3>" +
                 "<p>NPM: " + nim + "</p>" +
                 "<p>Nama: " + nama + "</p>" +
                 "<p>Jenis Kelamin: " + jk + "</p>" +
                 "<p>Agama: " + agama + "</p>" +
                 "<p>Status: " + status + "</p>" +
                 "<p>Jurusan: " + jurusan + "</p>" +
                 "<p>Komentar: " + komentar;

    document.getElementById('output-container').innerHTML = output;
});