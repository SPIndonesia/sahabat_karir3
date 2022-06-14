// TODO: Print
printDoc(el('.print'))

// TODO: Upload Gambar
el('.upload-gambar').addEventListener('click', function () {
    this.querySelector('[type="file"]').click()
})

el('[type="file"]').addEventListener('input', function (e) {
    this.parentElement.querySelector('p').innerText = e.target.files[0].name
})

// TODO: Ubah
const kategori = [...elAll('[data-kategori]')]

kategori.map(e => {
    e.addEventListener('click', function () {
        const dataKategori = JSON.parse(this.getAttribute('data-kategori'))

        el('[name="nama"]').setAttribute('value', dataKategori.nama)
        el('[name="deskripsi"]').setAttribute('value', dataKategori.deskripsi)
        el('.upload-gambar p').innerText = dataKategori.image_url
    })
})
