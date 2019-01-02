<template>

    <div class="col-md-12">
        <div class="card">
            <div class="row card-inner-spacer">
                <div class="col-md-2 col-sm-12 pull-left">
                    <select name="select-document" class="selectpicker" data-style="btn-default btn-block" data-menu-style="dropdown-blue">
                        <option value="id" selected>Documents Created</option>
                        <option value="id">Documents Approved</option>
                        <option value="ms">Documents Denied</option>
                        ...
                    </select>
                </div>
            </div>
            <div class="content">
                <canvas id="myChart" width="400" height="150"></canvas>
            </div>
            <div class="footer">
                <div class="legend"  v-html="legend"> </div>
            </div>
        </div>
    </div>
</template>
<script>
    const Chart = require('chart.js');
    export default {
        data() {
            return {
                legend: '',
                chart: ''
            }
        },
        mounted(){
            axios.get('/api/v1/get-document-graph-info')
                .then( (response) => {
                    const data = response.data;
                    console.log(data);
                    this.render(data)
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        methods: {
            render(data) {

                const ctx = document.getElementById("myChart").getContext('2d');
                const myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: Object.values(data.created),
                        datasets: [
                            {
                                label: 'Documents Created',
                                data: Object.keys(data.created),
                                backgroundColor: [
                                    'rgba(205, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(215, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 164, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(0,0,12,1)',
                                    'rgba(54, 160, 235, 1)',
                                    'rgba(0, 206, 86, 1)',
                                    'rgba(0, 192, 192, 1)',
                                    'rgba(0, 102, 255, 1)',
                                    'rgba(0, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }
                        ]},
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
                this.legend = myChart.generateLegend();
            }

        }
    }
</script>
