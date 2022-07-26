<template>
    <section>
<h2>Sons</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Parent</th>
                    <th scope="col">Actions</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                    <tr v-for="(son, index) in sons" :key="index">
                        <td>{{son.name}}</td>
                        <td>{{son.age}}</td>
                        <td>{{son.parent}}</td>
                        <td>                  
                            <form v-on:submit.prevent="edit(son.id)">
                                <input class="btn btn-warning" type="submit" value="Edit">
                            </form>
                        </td>
                        <td>
                            <form method="post" v-on:submit.prevent="del(son.id)">
                                <input class="btn btn-danger btn-delete" type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
            </tbody>
            </tbody>
        </table>
    </section>
</template>

<script>
export default {
    data(){
        return{
            sons:[],
            user:null,
            user_edit: null
        }
    },
    created(){
        this.getsons()
    },
    methods:{
        getsons(){  
            axios.get('/son/sons').then(
                // console.log(res.data),
                res => this.people = res.data).
            catch(err => console.log(err))
        },        
        edit(id){
            axios.get(`/son/edit/${id}`, this.person).then(res=>{
                res => res.data
                console.log(res.data);
                this.user_edit = res.data
            })
            .catch(err=> console.log(err))
        },
        update(id){
            axios.post(`/son/edit/${id}`,this.user_edit).then(res=>{
                alert('User Updated Succesfully ' + this.user_edit.name)
            //     if(res.data.update){
            //         console.log(this.user_edit);
            //     }
            }).catch(err=>{
                console.log(err);
            })
        },
        del(id){  
            axios.get(`/son/delete/${id}`).then(
                alert('User Deleted Succesfully'),
                res => console.log(res)).
            catch(err => console.log(err))
        },
        close(){
            this.user_edit = null
        }
    }
}
</script>