// TODO: Print
printDoc(el('.print'))

// TODO: Upload Gambar
el('.upload-gambar').addEventListener('click', function () {
    this.querySelector('[type="file"]').click()
})

el('[type="file"]').addEventListener('input', function (e) {
    this.parentElement.querySelector('p').innerText = e.target.files[0].name
})

// TODO: Render File
const form = el('.form')

form.addEventListener('input', e => {
    if (!e.target.type === 'file') return
    readerFile(e.target.files[0], result => el('.form img').src = result)
})
