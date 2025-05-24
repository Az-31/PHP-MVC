document.querySelectorAll("#deleteMhs").forEach(function (btn) {
  btn.addEventListener("click", function (e) {
    e.preventDefault();
    const href = this.getAttribute("href");

    Swal.fire({
      title: "Kamu yakin?",
      text: "Tindakan ini tidak bisa dibatalkan!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Ya, hapus!",
      cancelButtonText: "Batal"
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = href;
      }
    });
  });
});
