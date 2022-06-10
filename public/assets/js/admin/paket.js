// // TODO: Action

// // ? Ubah
// const tombolUbah = [...document.querySelectorAll('.ubah')]

// tombolUbah.map(e => {
//     e.addEventListener('click', () => {
//         const id = e.getAttribute('data-id')

//         const dataPeket = JSON.parse(e.getAttribute('data-paket'))
//         const id_kategori = dataPeket.id_kategori

//         document.querySelector('.paket-nama').value = dataPeket.nama
//         document.querySelector('.paket-harga').value = dataPeket.harga
//         document.querySelector('.paket-deskripsi').value = dataPeket.deskripsi
//         document.querySelector(`.paket-id_kategori[value="${id_kategori}"]`).setAttribute('selected', '')



//         showPopup({
//             judul: 'Ubah Data paket',
//             teksTombol: 'Simpan Perubahan',
//             action: `${base_url}/admin/paket/ubah/${id}`
//         })
//     })
// })

// // ? Hapus
// const tombolHapus = [...document.querySelectorAll('.hapus')]

// tombolHapus.map(e => {
//     e.addEventListener('click', () => {
//         Swal.fire({
//             title: 'Hapus paket?',
//             icon: 'warning',
//             showCancelButton: true,
//             cancelButtonText: 'Cancel',
//             width: '30%'
//         }).then(res => {
//             res.isConfirmed ? Swal.fire({
//                 title: 'Berhasil Menghapus paket X',
//                 icon: 'success'
//             }) : ''
//         })
//     })
// })
