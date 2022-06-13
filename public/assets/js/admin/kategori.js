// TODO: Print
printDoc(el('.print'))

// TODO: Upload Gambar
el('.upload-gambar').addEventListener('click', function () {
    this.querySelector('[type="file"]').click()
})

el('[type="file"]').addEventListener('input', function (e) {
    this.parentElement.querySelector('p').innerText = e.target.files[0].name
})
