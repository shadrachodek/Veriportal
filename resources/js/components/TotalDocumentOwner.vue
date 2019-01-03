<template>
    <div class="content">
        <p class="text-muted">Total Document Owners</p>

        <div class="row icon-resizer">

            <div class="col-md-6 col-sm-6">
                <h5 class="pull-left bounce"> {{ totalDocument }}</h5>
            </div>

            <div class="col-md-6 col-sm-6">
                <i class="pe-7s-copy-file pull-right"></i>
            </div>

        </div>


    </div>
</template>
<script>
    export default {
        props: ['totalDoc'],
        data() {
            return {
                totalDocument: this.totalDoc
            }
        },
        methods: {
        }
    }
</script>
