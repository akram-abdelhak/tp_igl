<template>
  <div>
   <h1 class="uppercase text-6xl text-green font-bold leading-none tracking-wide mb-6">Veuillez Justifier Vos absences </h1>
    <h1  class=" text-6xl mb-10"><center> Absences</center></h1>
    <table id="table" class="w-full text-md bg-white shadow-md rounded-lg mb-4" >
 <tbody class="rounded-lg">
  <tr class="border-b rounded-lg bg-green-light text-blue-darker">
  <th class="text-left p-3 px-5 hover:bg-green">Id</th>
  <th class="text-left p-3 px-5 hover:bg-green">Année d'étude</th>
  <th class="text-left p-3 px-5 hover:bg-green">Groupe</th>
  <th class="text-left p-3 px-5 hover:bg-green">Date de début </th>
  <th class="text-left p-3 px-5 hover:bg-green">Date de fin</th>
  <th class="text-left p-3 px-5 hover:bg-green">Module </th>
  <th class="text-left p-3 px-5 hover:bg-green">Justification</th>
  <th class="text-left p-3 px-5 hover:bg-green">Ajouter une justification</th>
 </tr>

 <tr class="border-b hover:bg-blue-darker hover:text-white text-blue-darkest" v-for="result in results">
     <td class="p-3 px-5">{{ result.id }}</td>
     <td class="p-3 px-5">{{ result.niveau }}</td>
      <td class="p-3 px-5">{{ result.groupe }}</td>
     <td class="p-3 px-5">{{ result.dateD }}</td>
     <td class="p-3 px-5">{{ result.dateF }}</td>
     <td class="p-3 px-5">{{ result.module }}</td>
     <td class="p-3 px-5">{{ result.justificatif }}</td>
     <td class="p-3 px-5">    <form method="POST" action="" @submit.prevent="modifier" >
            <input type="hidden" v-model="result.id"  id="mod"/>
             <button class="rounded-lg block bg-green text-white p-4 rounded" type="submit"><i class="fas fa-pen"></i></button> 
            </form>
         
    </td>
     </tr>
 </tbody>

      </table>

  </div>
</template>

<script>

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
            this.$router.push('/SuccessJustification');


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
