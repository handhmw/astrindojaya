$(function () {
    new Highcharts.Chart({
        chart: {
        renderTo: 'chart',
        type: 'line',
    },
        title: {
        text: 'Grafik Statistik Resign',
        x: -20
    },
        subtitle: {
        text: '2018',
        x: -20
    },
        xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
    },
        yAxis: {
        title: {
            text: 'Total Karyawan'
        }
    },
        series: [{
            name: 'Data dalam Bulan',
            data: <?php echo json_encode($grafik); ?>
        }]
    })
});