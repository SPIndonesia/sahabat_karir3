// TODO: Navigasi
const navHalLanding = [...document.querySelectorAll('#nav a')]

navHalLanding.map(e => {
    e.addEventListener('click', e => {
        e.preventDefault()

        const hrefTarget = e.target.getAttribute('href')

        let target = document.getElementById(hrefTarget).offsetTop
        target -= 100

        window.scrollTo(0, target)
    })
})
