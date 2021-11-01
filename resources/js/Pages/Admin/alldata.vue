<template>
    <div>
        <h2 class="text-center">Products List</h2>
 
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Class</th>
                <th>Section</th>
                <th>Group</th>
                <!-- <th>Actions</th> -->
            </tr>
            </thead>
            <tbody>
            <tr v-for="data in datas" :key="data.id">
                <td>{{ data.id }}</td>
                <td>{{ data.class }}</td>
                <td>{{ data.section }}</td>
                <td>{{ data.group }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: data.id }}" class="btn btn-success">Edit</router-link>
                        <button class="btn btn-danger" @click="deleteProduct(data.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                datas: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/datas/')
                .then(response => {
                    this.datas = response.data;
                });
        },
        methods: {
            deleteProduct(id) { 
                this.axios
                    .delete(`http://localhost:8000/api/datas/${id}`)
                    .then(response => {
                        let i = this.datas.map(data => data.id).indexOf(id);
                        this.datas.splice(i, 1)
                    });
            }
        }
    }
</script>