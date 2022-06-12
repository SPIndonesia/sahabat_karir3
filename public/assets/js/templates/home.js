const el = el => document.querySelector(`${el}`)
const elAll = el => document.querySelectorAll(`${el}`)

// TODO: Navigasi
const navHalLanding = [...elAll('#nav a')]

navHalLanding.map(e => {
    e.addEventListener('click', e => {
        e.preventDefault()

        const hrefTarget = e.target.getAttribute('href')
        let target = document.getElementById(hrefTarget).offsetTop
        target -= 100

        window.scrollTo(0, target)
    })
})

// TODO: Tombol
// -- Logout
const tombol = el('.tombol')

tombol.addEventListener('click', e => {
    if (e.target.classList.contains('logout')) {
        e.preventDefault()
        el('#logout-form').submit()
    }
})

// -- Mobile
document.addEventListener('click', function (e) {
    if (el('.aksi').contains(e.target)) {
        tombol.classList.toggle('tombol-tampil')
        return
    }
    tombol.classList.remove('tombol-tampil')
})

document.addEventListener('scroll', () => {
    tombol.classList.remove('tombol-tampil')
})
