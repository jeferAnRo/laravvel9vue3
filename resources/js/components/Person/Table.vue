<template>
    <section class="container">
        <div v-if="user_edit">
            <h2>Edit User:</h2>
            <form class="form-control" v-on:submit.prevent="update(user_edit.id)">
            <div>
                <div>
                    <label for="" class="form-label">Name:</label>
                    <input v-model="user_edit.name" class="form-control" type="text">
                    <label for="" class="form-label">Lastname:</label>
                    <input v-model="user_edit.lastname" class="form-control" type="text">
                    <label for="" class="form-label">Age:</label>
                    <input v-model="user_edit.age" class="form-control" type="number">
                    <label for="" class="form-label">Email:</label>
                    <input v-model="user_edit.email" class="form-control" type="email">
                    <label for="" class="form-label">City:</label>
                    <input v-model="user_edit.city.name" class="form-control" type="text">
                    <label for="" class="form-label">Phone:</label>
                    <input v-model="user_edit.phone" class="form-control" type="number">
                    <label for="" class="form-label">Address:</label>
                    <input v-model="user_edit.address" class="form-control" type="text">
                </div>  
                <br>
                <div class="d-grid gap-2">
                    <input type="submit" value="Update User" class="btn btn-warning">
                    <form v-on:submit.prevent="close()">
                        <div class="d-grid gap-2">
                            <input type="submit" value="Cancel" class="btn btn-secondary">
                        </div>
                    </form>
                </div>
            </div>
            </form>
        </div>
    </section>
    <section class="container"> 
        <br>       
        <h2>People</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Actions</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                    <tr v-for="(person,index) in people" :key="index">
                        <td>{{person.name}}</td>
                        <td>{{person.lastname}}</td>
                        <td>{{person.age}}</td>
                        <td>{{person.email}}</td>
                        <td>{{person.phone}}</td>
                        <td>{{person.address}}</td>
                        <td>{{person.city.name}}</td>
                    <td>                  
                        <form v-on:submit.prevent="edit(person.id)">
                            <input class="btn btn-warning" type="submit" value="Edit">
                        </form>
                    </td>
                    <td>
                        <form method="post" v-on:submit.prevent="del(person.id)">
                            <input class="btn btn-danger btn-delete" type="submit" value="Delete">
                        </form>
                    </td>
                    </tr>
            </tbody>
        </table>
    </section>
</template>

<script>
import axios from 'axios'

export default {
    data(){
        return{
            people:[],
            user:null,
            user_edit: null
        }
    },
    created(){
        this.getpeople()
    },
    methods:{
        getpeople(){  
            axios.get('/people').then(
                // console.log(res.data),
                res => this.people = res.data).
            catch(err => console.log(err))
        },        
        edit(id){
            axios.get(`/edit/${id}`, this.person).then(res=>{
                res => res.data
                console.log(res.data);
                this.user_edit = res.data
            })
            .catch(err=> console.log(err))
        },
        update(id){
            axios.post(`/edit/${id}`,this.user_edit).then(res=>{
                alert('User Updated Succesfully ' + this.user_edit.name)
                this.getpeople()
            //     if(res.data.update){
            //         console.log(this.user_edit);
            //     }
            }).catch(err=>{
                console.log(err);
            })
        },
        del(id){  
            axios.get(`/delete/${id}`).then(
                alert('User Deleted Succesfully'),
                this.getpeople(),
                res => console.log(res)).
            catch(err => console.log(err))
        },
        close(){
            this.user_edit = null
        }
    }

}
</script>