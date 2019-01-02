<template>
    <div class="col-md-12">
        <div class="card">
            <div class="content">

                <canvas id="line-chart" width="500" height="150"></canvas>
                <div id="chartHours" class="ct-chart"></div>
            </div>
            <div class="footer">
                <div class="legend">
                    <i class="fa fa-circle text-info"></i> Documents List
                    <i class="fa fa-circle text-danger"></i> Documents Approved
                    <i class="fa fa-circle text-warning"></i> Documents Declined
                </div>
                <hr>
                <div class="stats">
                    <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
