
function swalSuccessMessage(message) {
    Swal.fire({
        title: "Sukses",
        text: message,
        icon: "success",
    });
}

function swalErrorMessage(message) {
    Swal.fire({
        title: "Gagal",
        text: message,
        icon: "error",
    });
}

function confirmDelete(event, itemId) {
    event.preventDefault(); // Menghentikan submit form secara default

    Swal.fire({
        title: "Anda yakin?",
        text: "Data yang dihapus tidak dapat dipulihkan kembali!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: "Batal",
        confirmButtonText: "Ya, Hapus!",
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("deleteForm" + itemId).submit();
        }
    });
}
