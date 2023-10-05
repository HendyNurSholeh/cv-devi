document.querySelector('.kontrak').classList.add("aktif");
// mengatur tables
$(document).ready(function () {
  $("#table").DataTable({
    paging: true,
    language: {
      sEmptyTable: "Tidak ada data yang tersedia pada tabel ini",
      sInfo: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
      sInfoEmpty: "Menampilkan 0 - 0 dari 0 data",
      sInfoFiltered: "(disaring dari _MAX_ total data)",
      sInfoPostFix: "",
      sInfoThousands: ",",
      sLengthMenu: "Tampilkan _MENU_ data",
      sLoadingRecords: "Memuat...",
      sProcessing: "Sedang diproses...",
      sSearch: "Cari:",
      sZeroRecords: "Tidak ditemukan data yang sesuai",
      oPaginate: {
        sFirst: "Pertama",
        sLast: "Terakhir",
        sNext: "Berikutnya",
        sPrevious: "Sebelumnya",
      },
      oAria: {
        sSortAscending: ": diurutkan secara menaik",
        sSortDescending: ": diurutkan secara menurun",
      },
    },
  });
});
