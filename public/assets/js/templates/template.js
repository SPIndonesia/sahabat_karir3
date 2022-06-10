const el = e => document.querySelector(`${e}`)
const elAll = e => document.querySelectorAll(`${e}`)

const aktifNav = function (target) {
    target.classList.add('aktif')
}

aktifNav(el(`.navigasi-admin [href = "${window.location.pathname}"]`))

// TODO: Popup
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


// TODO: Popup
const base_url = window.origin
const tombolTambahData = el('.tombol-tambah')
const method = [...elAll('input[name="_method"]')]
const popup = el('._popup')
const tombolClosePopup = el('._popup .tombol-close')

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
        const konten = el('.popup .konten')
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
        action: `${base_url}/admin/kategori/store`
    })

    Put()
})

tombolClosePopup.addEventListener('click', () => {
    hiddenPopup()

    Put('PUT')
})

// TODO: Action

// ? Ubah
const tabel = document.querySelector('.tabel')

tabel.addEventListener('click', e => {
    if (e.target.contains(el('.ubah'))) return

    const id = el('[data-id]').getAttribute('data-id')
    showPopup({
        judul: 'Ubah Data paket',
        teksTombol: 'Simpan Perubahan',
        action: `${base_url}/admin/paket/ubah/${id}`
    })
})
