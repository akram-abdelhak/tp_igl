<template>
    <div >
        <div class="flex items-center w-full ">     
  <div class="w-full bg-green-light rounded shadow-lg p-8 m-4 md:max-w-lg md:mx-auto">
    <h1 class="block w-full text-center text-blue-darker mb-6">Ajouter justification </h1>
    <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="http://127.0.0.1:8000/api/absence/justification"   @submit.prevent="submit" > <!-- @submit.prevent="submit" -->
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest md:ml-2" for="id_abs">Absence </label>
        <input class=" rounded-lg border py-2 px-3 text-grey-darkest md:ml-2" type="numero" v-model="abs" name="id_abs" id="id_abs">
      </div>
   
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="doc">Piece joint  </label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="file" name="doc" id="doc" >
      </div>
      

      <button class="rounded-lg block bg-blue-dark text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Envoyé </button>
    </form>
  </div>
    </div>
        </div>

</template>

<script>
export default {
     data(){
      return {
        abs:localStorage.getItem('id_abs'),
        file:''
      }
    },
    methods: {

      submit(){
        // var abs=localStorage.getItem('id_abs');
         this.file = document.getElementById('doc').files[0];

          let formData = new FormData();
          formData.append('id_abs', this.abs);
          formData.append('doc', this.file);
       //  console.log(this.file);
       //  window.alert(abs);
      //   console.log(formData.file);

      axios.post('/absence/justification',formData, { headers: { 'Content-Type': 'multipart/form-data' }}).then((Response)=>{
        console.log(Response);
     //   this.$router.push('/InscrSuccess');
})
        .catch((error)=>{
              window.alert("error");

            console.log(error.message);
            

        } )
        
      }
    }


};
</script>
  <style>
</style>