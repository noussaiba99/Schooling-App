<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> {{message}}</div>

                    <div class="card-body">
                        I'm an login
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: ["message"],
        data(){
            return {
                msg : "lkdjgdl"
            };
        }
    }
</script>
