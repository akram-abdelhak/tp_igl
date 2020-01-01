<template>
  <div>
   <h1 class="uppercase text-6xl text-green font-bold leading-none tracking-wide mb-6">Veuillez Justifier Vos absences </h1>
    <h1><center> Absences</center></h1>
    <table id="table" class="display" style="width:100%">
    <thead>
 <tr>
  <th>Id</th>
  <th>Année d'étude</th>
  <th>Groupe</th>
  <th>Date de début </th>
  <th>Date de fin</th>
  <th>Module </th>
  <th>Justification</th>
  <th>Ajouter une justification</th>
 </tr>
 </thead>

 <tbody id="ttable">
 <tr v-for="result in results">
     <td>{{ result.id }}</td>
     <td>{{ result.niveau }}</td>
          <td>{{ result.groupe }}</td>
     <td>{{ result.dateD }}</td>
     <td>{{ result.dateF }}</td>
     <td>{{ result.module }}</td>
     <td>{{ result.justificatif }}</td>
     <td>    <form method="POST" action="" @submit.prevent="modifier" >
            <input type="hidden" v-model="result.id"  id="mod"/>
             <button class="rounded-lg block bg-green text-white uppercase text-lg mx-auto p-4 rounded" type="submit"><i class="fas fa-pen"></i></button> 
            </form>
         
    </td>
     </tr>
 </tbody>

      </table>

  </div>
</template>

<script>

  $("table").dataTable();

      $(document).ready( function () {
        $('#table').DataTable( { responsive:true, paging: true,dom: 'Bfrtip' } );
  } );
export default {

    data(){
        return {
            results:[]

    };
    },

    methods: {
        modifier(){
            let id_modif= document.getElementById("mod").value;
            console.log(id_modif);
            localStorage.setItem('id_abs',id_modif);
            this.$router.push('/Addjustification');


        }
    },

    created(){

        axios.get ('absences').then(Response=>{
            console.log(Response);
            this.results=Response.data.data;
        });

        
    }
};

</script>
  <style>
</style>