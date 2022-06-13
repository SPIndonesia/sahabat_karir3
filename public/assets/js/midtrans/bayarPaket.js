el('.harga p').innerText = `Rp. ${Rp(el('.harga p').innerText)}`

// TODO: Midtrans
const payButton = document.getElementById('pay-button')

payButton.addEventListener('click', () => {
    const token = el('.data').getAttribute('data-token')

    snap.pay(`${token}`, {
        onSuccess: result => send_response_to_form(result),
        onPending: result => send_response_to_form(result),
        onError: result => send_response_to_form(result),
        onClose: () => {
            Swal.fire({
                icon: 'warning',
                title: 'Close',
                text: 'Anda Belum Menyelesaikan Pembayaran',
                footer: '<a href="/">Lihat Paket Lainnya?</a>'
            })
            el('header').style.zIndex = 'initial'
        }
    })

    el('header').style.zIndex = 0
})

function send_response_to_form(result) {
    document.getElementById('json_callback').value = JSON.stringify(result)
    document.getElementById('submit_form').submit()
}
