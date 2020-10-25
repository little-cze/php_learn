<template>
    This is Home com
    <button @click="getData">chongchongchong</button>
</template>

<script>
import Axios from "axios";

export default {
    name: "Home",
    methods:{
        getData:function (){
            Axios.get("http://laraveldemo.com/api/book/list").then(function (res){
                console.log(res);
            }).catch(function (err){
                console.log(err);
            })
        }
    }
}
</script>

<style scoped>

</style>
