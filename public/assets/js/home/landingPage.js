const el = el => document.querySelector(`${el}`)
const elAll = el => document.querySelectorAll(`${el}`)

// -- Mobile
const tombol = document.querySelector('.tombol')

document.addEventListener('click', e => {
    if (!e.target.contains(document.querySelector('.tombol'))) {
        tombol.classList.toggle('tombol-tampil')
        return
    }
})


// TODO: Slick
const slickDefault = function (kelas) {
    $(`.${kelas}`).slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        arrows: false,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    })
}

$(document).ready(function () {
    $('.jumbotron-slider').slick({
        autoplay: true,
        autoplaySpeed: 2500,
    })

    const jumbotronArrowBack = document.querySelector('.jumbotron-slider__arrow.go-back')
    const jumbotronArrowNext = document.querySelector('.jumbotron-slider__arrow.go-next')
    const jumbotronArrow = [...document.querySelectorAll('.jumbotron-slider__arrow')]
    jumbotronArrow.map(e => {
        e.addEventListener('click', el => {
            if (jumbotronArrowBack.contains(el.target)) {
                document.querySelector('.jumbotron .slick-prev').click()
            } else if (jumbotronArrowNext.contains(el.target)) {
                document.querySelector('.jumbotron .slick-next').click()
            }
        })
    })



    // TODO: Gabung Bersama Kami Slider
    slickDefault('pembungkus-konten__gabung-bersama-kami')

    // TODO: Cerita Dari Sahabat Slider
    slickDefault('pembungkus-konten__cerita-dari-sahabat')


    // ! Menghilangkan tombol prev dan next slick
    const arrowSlick = [...document.querySelectorAll('.slick-arrow')]
    arrowSlick.map(e => {
        e.style.display = 'none'
    })
})

// TODO: Rating
window.addEventListener('load', () => {
    const rating = [...document.querySelectorAll('.rating')]

    rating.map((e) => {
        const skorRating = e.getAttribute('data-skorRating')
        let bintang = []

        function isiBintang(l) {
            for (let i = 0; i < l; i++) {
                bintang += '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>'
            }
        }

        if (skorRating.length > 1) {
            let splitSkor = skorRating.split('.')

            isiBintang(splitSkor[0])
            bintang += '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7zM288 376.4L288.1 376.3L399.7 435.9L378.4 309.6L469.2 219.8L343.8 201.4L288.1 86.85L288 87.14V376.4z"/></svg>'
        } else if (skorRating.length == 1) {
            isiBintang(skorRating)
        } else {
            bintang = 'not-found'
        }

        e.innerHTML = `<p>${skorRating}</p>${bintang}`
    })
})




// TODO: Tombol
// -- Logout
tombol.addEventListener('click', e => {
    if (e.target.classList.contains('logout')) {
        e.preventDefault()
        el('#logout-form').submit()
    }
})
