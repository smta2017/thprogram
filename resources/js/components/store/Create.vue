<template>
    <div>
        <form @submit.prevent="addstore">
            <input type="text" v-model="store.storename" placeholder="stor ename">
            <input type="text" v-model="store.sdescrip" placeholder="stor descrip">
            <button type="submit">SAVE</button>
        </form>
    </div>
</template>

  
<script>
    export default {
        data() {
            return {
                store: {
                    storename: '',
                    sdescrip: ''
                }
            }
        },
        methods: {
            addstore() {
                fetch('api/store/', {
                        method: 'post',
                        body: JSON.stringify({
                            storename: this.store.storename,
                            sdescrip: this.store.sdescrip
                        }),
                        headers:{
                            'content-type':'application/json'
                        }
                    })
                    .then(res => res.json())
                    .then(data => {
                            this.store.storename = '';
                            this.store.sdescrip = '';
                            this.$parent.fetchdata();
                            alert('store added');
                    }).catch((err) => {
                        console.log(err);
                    });
    
            }
        },
    }
</script>
