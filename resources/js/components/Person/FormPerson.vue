<template>
    <section class="container">
        <h2 class="mt-2 text-center">Create Person:</h2>
        <form class="form-control" method="post" v-on:submit.prevent="save()">
            <div>
                <label class='form-label' for="">Name:</label>
                <input v-model="person.name" class="form-control" type="text">
            </div>
            <div>
                <label class='form-label'>Last Name:</label>
                <input v-model="person.lastname" class='form-control' type="text">
            </div>
            <div>
                <label class='form-label'>Age:</label>
                <input v-model="person.age" class='form-control' type="number">
            </div>
            <div>
                <label class='form-label'>Email:</label>
                <input v-model="person.email" class='form-control' type="email">
            </div>
            <div>
                <label class='form-label'>City:</label>
                <select v-model="person.city_id" class="form-select" name="city_id">
                    <option v-for="(city,index) in cities" :key="index" :value="city.id">{{city.name}}</option>
                </select>
            </div>
            <div>
                <label class='form-label'>Phone:</label>
                <input v-model="person.phone" class='form-control' type="number">
            </div>
            <div>
                <label class='form-label'>Address:</label>
                <input v-model="person.address" class='form-control' type="text">
            </div>
            <br>
            <div class="d-grid gap-2">
                <input class="btn btn-success" type="submit" value="Save">
            </div>
        </form>
    </section>
</template>


<script>
import TablePerson from '../Person/Table.vue'

export default {
    components: {
        TablePerson
    },
    data(){
        return{
            ciudad: null,
            person:{
                name:null,
                lastname:null,
                age:null,
                email:null,
                city_id:null,
                phone:null,
                address:null
            },
            cities: [],
            user_edit:{}
        }
    },
    created(){
        this.getcities()
    },
    methods:{
        save(){
            axios.post('/save',this.person).then(res => {
                if(res.data.saved){
                    this.$root.$refs.TablePerson.getpeople()
                    console.log(res.data.person)
                }
            }
            ).catch(err => {
                console.log(err);
            });
        },
        getcities(){
            axios.get('/cities').then(
            res => this.cities = res.data).
            catch(err => console.log(err))
        },
        edit(id){
            axios.get(`/edit/${id}`, this.person).then(res=>{
                res => res.data
                this.user_edit = res.data
            })
            .catch(err=> console.log(err))
        },
        update(id){
            axios.post(`/edit/${id}`,this.user_edit).then(res=>{
                alert('User Updated Succesfully ' + this.user_edit.name)
            //     if(res.data.update){
            //         console.log(this.user_edit);
            //     }
            }).catch(err=>{
                console.log(err);
            })
        },
    }
}
</script>

<style>

</style>