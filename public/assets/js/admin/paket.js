// TODO: Popup
const tombolTambahData = document.querySelector('.tombol-tambah')
const base_url = window.origin
const method = [...document.querySelectorAll('input[name="_method"]')]
const popup = document.querySelector('.popup')
const tombolClosePopup = document.querySelector('.popup .tombol-close')

function Put(val = '') {
    method.map(e => {
        e.setAttribute('value', val)
    })
}

function showPopup(data = null) {
    popup.style.display = 'initial'

    setTimeout(() => {
        popup.classList.toggle('opacity-1')
    }, 1)

    if (data) {
        const konten = document.querySelector('.popup .konten')
        konten.querySelector('.judul h1').innerHTML = data.judul
        konten.querySelector('.tombol-simpan button').innerHTML = data.teksTombol
        konten.querySelector('form').setAttribute('action', data.action)
    }
}

function hiddenPopup() {
    popup.classList.toggle('opacity-1')

    setTimeout(() => {
        popup.style.display = 'none'
    }, 500)
}

tombolTambahData.addEventListener('click', e => {
    e.preventDefault()

    showPopup({
        judul: 'Tambah Data',
        teksTombol: 'Simpan',
        action: `${base_url}/admin/paket/store`
    })

    Put()
})

tombolClosePopup.addEventListener('click', () => {
    hiddenPopup()

    Put('PUT')
})

// TODO: Action

// ? Ubah
const tombolUbah = [...document.querySelectorAll('.ubah')]

tombolUbah.map(e => {
    e.addEventListener('click', () => {
        const id = e.getAttribute('data-id')

        const dataPeket = JSON.parse(e.getAttribute('data-paket'))
        const id_kategori = dataPeket.id_kategori

        document.querySelector('.paket-nama').value = dataPeket.nama
        document.querySelector('.paket-harga').value = dataPeket.harga
        document.querySelector('.paket-deskripsi').value = dataPeket.deskripsi
        document.querySelector(`.paket-id_kategori[value="${id_kategori}"]`).setAttribute('selected', '')



        showPopup({
            judul: 'Ubah Data paket',
            teksTombol: 'Simpan Perubahan',
            action: `${base_url}/admin/paket/ubah/${id}`
        })
    })
})

// ? Hapus
const tombolHapus = [...document.querySelectorAll('.hapus')]

tombolHapus.map(e => {
    e.addEventListener('click', () => {
        Swal.fire({
            title: 'Hapus paket?',
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cancel',
            width: '30%'
        }).then(res => {
            res.isConfirmed ? Swal.fire({
                title: 'Berhasil Menghapus paket X',
                icon: 'success'
            }) : ''
        })
    })
})
