['cariApapun', 'cariTanggal'].forEach(el => {
    document.getElementById(el).addEventListener('input', e => {
        if (e.value !== '') {
            document.querySelector('.data-peserta table').innerText = 'Lakukan Pencarian Dengan Ajax'
        }
    })
})

let elementPrint

const searchSvg = setInterval(() => {
    elementPrint = document.querySelector('svg.print-svg')

    if (elementPrint !== null) {
        clearInterval(searchSvg)

        elementPrint.addEventListener('click', () => {
            window.print()
        })
    }
}, 1)

document.querySelector('.tabel').addEventListener('scroll', () => {
    document.querySelector('.tabel thead tr').classList.add('scroll-tabel-head')

    setInterval(() => {
        document.querySelector('.tabel thead tr').classList.remove('scroll-tabel-head')
    }, 3000)
})
