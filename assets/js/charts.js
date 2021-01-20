var ctx = document.getElementById('myChart');
var chart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Sent commands',
            backgroundColor: 'transparent',
            borderColor: '#04B1C8',
            data: [250, 400, 50, 120, 35, 76, 90, 300]
        }]
    },
    options: {
        responsive: true
    }
});

var ctxDoughnut = document.getElementById('pie-chart');
var myDoughnutChart = new Chart(ctxDoughnut, {
    type: 'pie',
    data:  {
        datasets: [{
            label: 'Sent commands',
            backgroundColor: ['#E1453A', '#8BC34B'],
            borderColor: 'transparent',
            data: [250, 800]
        }],
    },
    options: {
        responsive: true
    }
});