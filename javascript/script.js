$(document).ready(function() {
    // Ketika tombol "Ubah Konten" diklik
    $('#changeContent').click(function() {
        // Ganti konten di dalam div dengan id "contentContainer"
        $('#contentContainer').html('<p>Konten baru yang diubah menggunakan jQuery!</p>');
    });
});
