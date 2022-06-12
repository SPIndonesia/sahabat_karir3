const Rp = function (num = 000) {
    const reverse = num.toString().split('').reverse().join('')
    let ribuan = reverse.match(/\d{1,3}/g)
    ribuan = ribuan.join('.').split('').reverse().join('')

    return ribuan
}
