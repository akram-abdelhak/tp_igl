<template>
    <div >
     	
        <div class="flex items-center h-screen w-full ">     
  <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-lg md:mx-auto">
      <h1 class="block w-full text-center text-grey-darkest mb-6">Votre justification vient d'être admis avec succès! </h1>
      <button class="rounded-lg block bg-blue-darker text-white uppercase text-lg mx-auto p-4 rounded" v-on:click="direct">Accéder à L'accueil </button>
  </div>
    </div>
        </div>

</template>

<script>
export default {
    methods: {
    direct() {
    this.$router.push('/Accueil');

    }
  }
};
</script>
  <style scoped >

</style>