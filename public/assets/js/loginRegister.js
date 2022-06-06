// TODO: Mata
const input = document.querySelector('.__mata input')
const mata = [...document.querySelectorAll('div.mata')]

// TODO: Tampilkan mata ketika ada input
input.addEventListener('input', () => {
    if (input.value !== '') {
        mata.map(e => {
            e.classList.remove('hidden')
        })
    } else {
        mata.map(e => {
            e.classList.add('hidden')
        })
    }
})

// TODO: Menampilkan dan Menyembunyikan Password
mata.map(e => {
    e.addEventListener('click', () => {
        const parent = e.parentElement
        const input = parent.querySelector('input')

        if (e.querySelector('svg.fa-eye') !== null) {
            e.querySelector('svg.fa-eye').classList.replace('fa-eye', 'fa-eye-slash')
            input.setAttribute('type', 'text')
            return
        }

        e.querySelector('svg.fa-eye-slash').classList.replace('fa-eye-slash', 'fa-eye')
        input.setAttribute('type', 'password')
    })
})
