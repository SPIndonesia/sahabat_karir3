const harga = [...elAll('.harga')]

harga.map(e => e.innerText = Rp(e.innerText))

// Todo: Animasi Card
const animasiTinggi = function (el) {
    el.querySelector('div').classList.toggle('height')
    el.querySelector('.detail').classList.toggle('opacity')
    return
}

const card = [...elAll('.card')]

card.map(e => {
    e.addEventListener('mouseenter', function () {
        animasiTinggi(this)
    })
    e.addEventListener('mouseleave', function () {
        animasiTinggi(this)
    })
    e.addEventListener('click', function () {
        animasiTinggi(this)
    })
})
