// tombolUbah.map(e => {
//     e.addEventListener('click', () => {
//         const id = e.getAttribute('data-id')
//         const dataKategori = JSON.parse(e.getAttribute('data-kategori'))
//         const id_kategori = dataKategori.id_kategori

//         console.log(dataKategori)

//         document.querySelector('.kategori-nama').value = dataKategori.nama
//     })
// })


// TODO: Upload Gambar
el('.upload-gambar').addEventListener('click', function () {
    this.querySelector('[type="file"]').click()
})

el('[type="file"]').addEventListener('input', function (e) {
    this.parentElement.querySelector('p').innerText = e.target.files[0].name
})
