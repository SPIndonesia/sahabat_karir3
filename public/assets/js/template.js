let baseUrl = window.origin
baseUrl += '/'

// TODO: Navigasi
const liNav = [...document.querySelectorAll('.nav')]

liNav.map(e => {
    e.addEventListener('click', el => {
        const dataTarget = e.getAttribute('data-target')
        window.location = baseUrl + dataTarget

        // ! Masukkan kelas aktif ke penyimpanan sementara
        sessionStorage.setItem('aktif', dataTarget)
    })
})

// TODO: Active Class
if (sessionStorage.getItem('aktif')) {
    setInterval(() => {
        const getStorageAktif = sessionStorage.getItem('aktif')

        const elementAktif = document.querySelector(`li[data-target="${getStorageAktif}"]`)
        elementAktif.classList.add('aktif')
    }, 1)

} else {
    document.querySelector('.navigasi-beranda ul li:first-child').classList.add('aktif')
}

//
const alert = document.querySelector('.alert-success')
if (alert) {
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: alert.getAttribute('data-alert'),
    })
}


const btn = document.querySelector('.tabel')

btn.addEventListener("click", e => {

    if (!e.target.parentElement.classList.contains('hapus')) return


    Swal.fire({
        title: 'Apakah anda yakin?',
        text: "Menghapus data secara permanent?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.querySelector('[type="submit"]').click()
        }
    })
})
