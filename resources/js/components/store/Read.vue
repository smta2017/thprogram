<template>
    <div>
        <h1>store</h1>
    
        <create></create>
    
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>اسم </th>
                    <th>الوصف</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="store in stores" v-bind:key="store.id">
                    <td>
                        {{ store.storename }}
                    </td>
                    <td>
                        {{ store.sdescrip }}
                    </td>
                    <td> <a class="btn btn-danger" @click="deletestore(store.id)" href="#">حذف</a> </td>
                    <td> <a class="btn btn-info" href="#">تعديل</a> </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import create from './Create'
    
    
    export default {
        name: "storeCpn",
        components: {
            create
        },
        data() {
            return {
                stores: []
            }
        },
        created() {
            this.fetchdata();
        },
        methods: {
            fetchdata() {
                fetch('api/store')
                    .then(res => res.json())
                    .then(res => { // this.stores = res.data;//if paginate data returned
                        this.stores = res;
                    })
                    .catch(err => console.log(err));
            },
            deletestore(id) {
                if (confirm('are you sure?')) {
                    fetch('api/store/' + id, {
                            method: 'delete'
                        })
                        .then(res => res.json())
                        .then(res => {
                            this.fetchdata();
                        })
                        .catch(err => console.log(err));
                }
            }
        }
    }
</script>

