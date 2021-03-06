$(document).ready(function () {
    $.ajax({
            url: '/admin/dashboard',
            type: "get",
            data: {
                 chartData : true,
            },
            dataType: 'json',
            success: function (response) {
                demo = {
                    data: response,
                    initDashboardPageCharts: function () {
            
                        chartColor = "#FFFFFF";
            
                        var ctx = document.getElementById('yearDocChart').getContext("2d");
            
                        var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
                        gradientStroke.addColorStop(0, '#80b6f4');
                        gradientStroke.addColorStop(1, chartColor);
            
                        var gradientFill = ctx.createLinearGradient(0, 200, 0, 50);
                        gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
                        gradientFill.addColorStop(1, "rgba(255, 255, 255, 0.24)");
            
                        var myChart = new Chart(ctx, {
                            type: 'line',
                
                            data: {
                                labels: this.data.labels,
                    
                                datasets: [{
                                    label: "Documents",
                                    borderColor: chartColor,
                                    pointBorderColor: chartColor,
                                    pointBackgroundColor: "#1e3d60",
                                    pointHoverBackgroundColor: "#1e3d60",
                                    pointHoverBorderColor: chartColor,
                                    pointBorderWidth: 1,
                                    pointHoverRadius: 7,
                                    pointHoverBorderWidth: 2,
                                    pointRadius: 5,
                                    fill: true,
                                    backgroundColor: gradientFill,
                                    borderWidth: 2,
                                    data: this.data.values,
                                }]
                            },
                            options: {
                                layout: {
                                    padding: {
                                        left: 20,
                                        right: 20,
                                        top: 0,
                                        bottom: 0
                                    }
                                },
                                maintainAspectRatio: false,
                                tooltips: {
                                    backgroundColor: '#fff',
                                    titleFontColor: '#333',
                                    bodyFontColor: '#666',
                                    bodySpacing: 4,
                                    xPadding: 12,
                                    mode: "nearest",
                                    intersect: 0,
                                    position: "nearest"
                                },
                                legend: {
                                    position: "bottom",
                                    fillStyle: "#FFF",
                                    display: false
                                },
                                scales: {
                                    yAxes: [{
                            
                                        ticks: {
                                            fontColor: "rgba(255,255,255,0.4)",
                                            fontStyle: "bold",
                                            beginAtZero: true,
                                            maxTicksLimit: 7,
                                            padding: 15
                                        },
                                        gridLines: {
                                            drawTicks: true,
                                            drawBorder: false,
                                            display: true,
                                            color: "rgba(255,255,255,0.1)",
                                            zeroLineColor: "transparent"
                                        }
                                    }],
                        
                                    xAxes: [{
                                        gridLines: {
                                            zeroLineColor: "transparent",
                                            display: false,
                                
                                        },
                                        ticks: {
                                            padding: 10,
                                            fontColor: "rgba(255,255,255,0.4)",
                                            fontStyle: "bold"
                                        }
                                    }]
                                }
                            }
                        });
            
                    },
        
                };
                demo.initDashboardPageCharts();
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
           
        });
});