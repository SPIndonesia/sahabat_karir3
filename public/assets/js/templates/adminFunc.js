// TODO: Function
const el = e => document.querySelector(`${e}`)
const elAll = e => document.querySelectorAll(`${e}`)

const aktifNav = (target) => target.classList.add('aktif')

const printDoc = (target) => target.addEventListener('click', () => window.print())

const showPopup = function (data = null) {
    const popup = el('._popup')
    popup.style.display = 'initial'
    setTimeout(() => popup.classList.toggle('opacity-1'), 1)

    el('._popup .judul h1').innerHTML = data.judul
    el('._popup .tombol-simpan button').innerHTML = data.teksTombol
    el('._popup form').setAttribute('action', data.action)
}

const hiddenPopup = function (target) {
    const popup = el('._popup')

    target.addEventListener('click', () => {
        popup.classList.toggle('opacity-1')
        setTimeout(() => popup.style.display = 'none', 500)
    })
}

const alert = function (target) {
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: target.getAttribute('data-alert')
    })
}

const put = function (val = '') {
    el('._popup [name="_method"]').setAttribute('value', val)
}

const readerFile = function (file, func) {
    const reader = new FileReader()
    reader.readAsDataURL(file)

    reader.addEventListener('load', () => func(reader.result))
}
