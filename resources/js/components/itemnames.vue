<template>
<div>
    <h2>مسميات الاصناف</h2>
    <input type="text" v-model="itemname.sname2">
    <h1>{{ itemname.sname2 }}</h1>
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li v-bind:class="[{disabled : !pagination.prev_page_url}]" class="page-item">
            <a class="page-link" href="#" @click="fetchItemnames(pagination.prev_page_url)">Previous</a>
            </li>
      
             <li class="page-item disabled"><a class="page-link" href="#">page {{ pagination.current_page }} of {{ pagination.last_page}}</a></li>



        <li v-bind:class="[{disabled : !pagination.next_page_url}]"  class="page-item">
            <a class="page-link" href="#"  @click="fetchItemnames(pagination.next_page_url)">Next</a>
            </li>
      </ul>
    </nav>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>مسمى الصنف</th>
                <th>حذف</th>
                <th>تعديل</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="itemname in itemnames" v-bind:key="itemname.id">
                <td>
                    {{ itemname.sname }}
                </td>
                <td> <a class="btn btn-danger" @click="deleteitemname(itemname.id)" href="#">حذف   </a> </td>
                <td> <a class="btn btn-info" href="#">تعديل</a> </td>
            </tr>
        </tbody>
    </table>

   
</div>
</template>


<script>
export default {
    data(){
        return{
            itemnames:[],
            itemname:{
                sname:'',
                 sname2:'test'
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
        
        fetchItemnames(page_url){
            let vm = this;
            page_url = page_url || 'api/itemname'
            fetch(page_url)
            .then(res => res.json())
            .then(res => {
                // console.log(res.data);
                this.itemnames = res.data;
                vm.makePagination(res.meta,res.links);
            })
            .catch(err => console.log(err));
        },
        makePagination(meta,links){
        let pagination = {
             current_page : meta.current_page,
             last_page : meta.last_page,
             next_page_url : links.next,
             prev_page_url : links.prev
         }
        
        this.pagination = pagination;
        },
        deleteitemname(id){
            if (confirm('are you sure?')) {
                fetch('api/itemname/'+id, {
                    method:'delete'
                })
                .then(res => res.json())
                .then(data => {
                   this.fetchItemnames();
                })
            }
            alert('Item Name Deleted');
        }
    }
}
</script>
    