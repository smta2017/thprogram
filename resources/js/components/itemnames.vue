<template>
<div>
    <h2>item Names data</h2>
    <div v-for="itemname in itemnames" v-bind:key="itemname.id">
        <p>{{ itemname.sname }}</p>
    </div>
</div>
</template>


<script>
export default {
    data(){
        return{
            itemnames:[],
            itemname:{
                sname:''
            },
            itemname_id:'',
            pagination:{},
            edit: false,
        }
    },
    created() {
        this.fetchItemnames();
    },
    methods:{
        fetchItemnames(){
            fetch('api/itemname')
            .then(res => res.json())
            .then(res => {
                // console.log(res.data);
                this.itemnames = res.data;
            })
        }
    }
}
</script>
