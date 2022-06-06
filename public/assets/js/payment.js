// TODO: Fungsi Untuk Merubah Rupiah
function Rp(nilai) {
    let number_string = nilai.toString(),
        sisa = number_string.length % 3,
        rupiah = number_string.substring(0, sisa),
        ribuan = number_string.substring(sisa).match(/\d{3}/g)

    if (ribuan) {
        separator = sisa ? '.' : ''
        rupiah += separator + ribuan.join('.')
    }

    return rupiah
}

// TODO: Total
const pSubTotal = [...document.querySelectorAll('p.sub-total')]
const pTotalTagihan = [...document.querySelectorAll('p.total-tagihan')]
const harga = [...document.querySelectorAll('span.harga')]
let biayaAdmin = document.querySelector('span.biaya-admin').innerText
biayaAdmin = parseInt(biayaAdmin.split('.').join(''))

let total = harga.map((e) => {
    let harga = (e.innerText).split('.')
    harga = harga.join('')
    harga = parseInt(harga)

    return harga
}).reduce((accu, curr) => accu + curr)

const hargaPaket = [...document.querySelectorAll('.hargaPaket')]

hargaPaket.forEach(e => {
    e.addEventListener('click', e => {
        let target = e.target.value
        target = target.split('.').join('')
        target = parseInt(target);

        (e.target.checked) ? total += target: total -= target;

        setHarga(total)
    })
})

window.onload = setHarga(total)

// TODO: Function untuk memasukkan harga kedalam html

function setHarga(total) {
    const totalTagihan = total + biayaAdmin

    // TODO: Masukkan Total kedalam element pTotal
    pSubTotal.map(e => e.innerText = `Rp. ${Rp(total)}`)

    // TODO: Masukkan Total Tagihan kedalam element pTotalTagihan
    pTotalTagihan.map(e => e.innerText = `Rp. ${Rp(totalTagihan)}`)

    document.getElementById('biaya-admin').innerText = `Rp. ${Rp(biayaAdmin)}`
    document.getElementById('kirim').setAttribute('value', totalTagihan)
}

// TODO: Saat tombol pilih pembayaran di klik
const pilihPembayaran = document.querySelector('.pilih-pembayaran')
const tombolClose = document.querySelector('.tombol-close')

pilihPembayaran.addEventListener('click', () => {
    document.querySelector('.bayar').classList.add('popup-bayar')
})

tombolClose.addEventListener('click', e => {
    e.preventDefault()

    document.querySelector('.bayar').classList.remove('popup-bayar')
})