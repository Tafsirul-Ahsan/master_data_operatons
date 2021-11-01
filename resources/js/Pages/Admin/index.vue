<template>
    <sorted-table :values="values">
<thead>
<tr>
<th scope="col" style="text-align: left; width: 10rem;  border-width: 2px;">
<sort-link name="id">Name</sort-link></th>
<th scope="col" style="text-align: left; width: 20rem;  border-width: 2px;">
<sort-link name="hits">Action</sort-link></th>
</tr>
 <tr>
<td>Class</td>
<td><button style="
  padding: 5px 10px;
  border: 1px solid #ddd;
  color: white;
  background-color:red;
  border-radius: 4px;
  font-size: 14px;
  cursor: pointer;"
  @click="deleteProduct(data.id)">
  Delete</button>
  <button style="
  padding: 5px 10px;
  border: 1px solid #ddd;
  color: red;
  background-color:Green;
  border-radius: 4px;
  font-size: 14px;
  cursor: pointer;">
  View</button>
  <button style="
  padding: 5px 10px;
  border: 1px solid #ddd;
  color: red;
  background-color:Yellow;
  border-radius: 4px;
  font-size: 14px;
  cursor: pointer;">
  Edit</button></td>
</tr>
<tr>
<td>Section</td>
</tr>
<tr>
<td>Group</td></tr>
</thead>
</sorted-table>
</template>
<script>
export default {
    props : [
        'msg'
    ],
    data()
    {

    },
    methods : {

    }
}
</script>
