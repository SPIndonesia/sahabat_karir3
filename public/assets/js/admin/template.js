const el = e => document.querySelector(`${e}`)

const aktifNav = function (target) {
    target.classList.add('aktif')
}

aktifNav(el(`.navigasi-admin [href = "${window.location.pathname}"]`))

// //
// const alert = document.querySelector('.alert-success')
// if (alert) {
//     Swal.fire({
//         icon: 'success',
//         title: 'Berhasil',
//         text: alert.getAttribute('data-alert'),
//     })
// }

// const btn = document.querySelector('.tabel')

// btn.addEventListener("click", e => {
//     if (!e.target.parentElement.classList.contains('hapus')) return

//     Swal.fire({
//         title: 'Apakah anda yakin?',
//         text: "Menghapus data secara permanent?",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Yes, delete it!'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             document.querySelector('[type="submit"]').click()
//         }
//     })
// })
