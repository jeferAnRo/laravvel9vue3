<template>
<section class="container">
        <h2 class="mt-2 text-center">Create Son:</h2>
        <form class="form-control" method="post" v-on:submit.prevent="save()">
            <div>
                <label class='form-label' for="">Name:</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div>
                <label class='form-label'>Age:</label>
                <input class='form-control' type="number" name="age">
            </div>
            <div>
                <label class='form-label'>Parent:</label>
                <select class="form-select" name="person_id" id="">
                        <option value="{{ $parent->id }}"></option>
                </select>
            </div>
            <br>
            <div class="d-grid gap-2">
                <input class="btn btn-success" type="submit" value="Save">
            </div>
        </form>
        <table-son></table-son>
</section>
</template>

<script>
import TableSon from '../Son/Table.vue'

export default {
    components: {
        TableSon
    },
    data(){
        return{
            son:{
                name:null,
                lastname:null,
                age:null,
            },
            user_edit: null
        }
    },
    created(){
        this.getcities()
    },
    methods:{
        save(){
            axios.post('/son/save',this.person).then(res => {
                if(res.data.save){
                    console.log(res.data.user)
                }
            }
            ).catch(err => {
                console.log(err);
            });
        }
    }
}
</script>