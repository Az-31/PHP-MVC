$(function () {
  $(".modalTambah").on("click", function () {
    $("#judulModal").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $(".modal-body form").attr("action", BASEURL + "/mahasiswa/tambah");
    // Kosongkan semua input di dalam form
    $("#nama").val("");
    $("#nim").val("");
    $("#email").val("");
    $("#jurusan").val("");
    $("#id").val("");
  });

  $(".modalUbah").on("click", function () {
    $("#judulModal").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr("action", BASEURL + "/mahasiswa/ubah");

    const id = $(this).data("id");

    $.ajax({
      url: BASEURL + "/mahasiswa/getUbah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#nim").val(data.nim);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
});
