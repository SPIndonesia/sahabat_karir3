// TODO: Nav Aktif
aktifNav(el(`.navigasi-admin [href = "${window.location.pathname}"]`))

// TODO: Alert
if (el('.alert-success')) alert(el('.alert-success'))

// TODO: Crud Popup
const tabel = document.querySelector('.sec-two')

if (tabel) {
    tabel.addEventListener("click", e => {
        const target = e.target
        const parent = e.target.parentElement

        if (target.classList.contains('tombol-tambah')) {
            e.preventDefault()

            showPopup({
                judul: 'Tambah Data',
                teksTombol: 'Simpan',
                action: `${window.origin}/${el('[data-url-store]').getAttribute('data-url-store')}`
            })

            put()
        } else if (target.classList.contains('ubah') || parent.classList.contains('ubah')) {
            const id = target.getAttribute('data-id') || parent.getAttribute('data-id')

            showPopup({
                judul: 'Ubah Data',
                teksTombol: 'Simpan Perubahan',
                action: `${window.origin}/${el('[data-url-ubah]').getAttribute('data-url-ubah')}/${id}`
            })

            put('PUT')
        } else if (parent.classList.contains('hapus') || target.classList.contains('hapus')) {
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
                    document.querySelector('[name="hapus"]').click()
                }
            })
        }

        return
    })
}

// TODO: Close Popup
const tblClose = el('.tombol-close')

if (tblClose) hiddenPopup(tblClose)