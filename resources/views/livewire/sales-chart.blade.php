<div class="bg-clemont-card rounded-md shadow-sm border border-gray-200 p-6">
    <h3 class="text-lg font-semibold text-clemont-text mb-4">Métricas Consolidadas (Shopify vs ERP)</h3>
    <div class="relative h-80 w-full">
        <canvas id="salesChart"></canvas>
    </div>

    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('livewire:initialized', () => {
            const ctx = document.getElementById('salesChart').getContext('2d');
            
            const labels = @json($labels);
            const shopifyData = @json($shopifyData);
            const erpData = @json($erpData);

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Ventas Shopify',
                            data: shopifyData,
                            backgroundColor: '#111111', // clemont.chart1
                            borderRadius: 4,
                        },
                        {
                            label: 'Ventas ERP',
                            data: erpData,
                            backgroundColor: '#C5A880', // clemont.chart2
                            borderRadius: 4,
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                font: {
                                    family: "'Inter', sans-serif"
                                },
                                color: '#111111'
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: '#f3f4f6'
                            },
                            ticks: {
                                font: {
                                    family: "'Inter', sans-serif"
                                },
                                color: '#A3A3A3'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            },
                            ticks: {
                                font: {
                                    family: "'Inter', sans-serif"
                                },
                                color: '#A3A3A3'
                            }
                        }
                    }
                }
            });
        });
    </script>
</div>
