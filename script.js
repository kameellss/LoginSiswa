// Chart.js Line Chart
const ctx = document.getElementById('lineChart').getContext('2d');
const lineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Oct 22', 'Oct 28', 'Nov 05', 'Nov 12'], // X-Axis Labels
        datasets: [
            {
                label: 'Analytics',
                data: [20, 50, 75, 100], // Example Data
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                fill: true,
            },
        ],
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
        },
    },
});


// Fungsi untuk toggle tampilan detail prestasi
function toggleDetails(item) {
    const details = item.querySelector('.details');
    const arrow = item.querySelector('.arrow');

    if (details.style.display === 'block') {
        details.style.display = 'none';
        arrow.innerHTML = '&#9662;'; // Panah ke bawah
    } else {
        details.style.display = 'block';
        arrow.innerHTML = '&#9652;'; // Panah ke atas
    }
}