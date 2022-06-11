let data, chart, options

const bagan = el('.bagan')

google.charts.load('current', {
    'packages': ['corechart']
})
google.charts.setOnLoadCallback(drawChart)

function drawChart() {
    data = new google.visualization.DataTable()
    data.addColumn('string', 'Kelas')
    data.addColumn('number', 'Peserta')
    data.addRows([
        ['SBMPTN', 200],
        ['IKADIN', 210],
        ['CPNS', 300],
        ['POLRI', 190],
        ['PELATIHAN', 200]
    ])

    options = {
        'title': 'Persentase Grafik Data Peserta',
        'width': 500,
        'height': 300,
        // 'colors': [], // Jika Dibutuhkan Warna Custom Untuk Chart
        'is3D': true
    }

    chart = new google.visualization.PieChart(bagan)
    chart.draw(data, options)
}
