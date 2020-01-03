<template>
    <div>
        <h1>la liste des demandes</h1>


           <h2> {{data}}</h2>
     </div>

</template>

<script>
export default {
    name: "Demandes",
    props: ["data"],
    data(){
        dataa = this.data;
    }
}
</script>

<style scoped>

</style>
