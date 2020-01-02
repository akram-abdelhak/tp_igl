<template>
    <div class="bod">
     	<header class=" section ml-8" >
			<h1>
				<router-link to="/">
					<img alt="logo" src="/images/ghost-white.png" height="150" width="150" >
				</router-link>
			</h1>
		</header>
        <div class="flex items-center h-screen w-full ">     
  <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-lg md:mx-auto">
      <h1 class="block w-full text-center text-grey-darkest mb-6">Votre compte vient d'être crée avec succès! </h1>
      <button class="rounded-lg block bg-blue-darker text-white uppercase text-lg mx-auto p-4 rounded" v-on:click="direct">Connecter vous </button>
  </div>
    </div>
        </div>

</template>

<script>
export default {
    methods: {
    direct() {
    this.$router.push('/Connexion');

    }
  }
};
</script>
  <style scoped >
.bod {
  background-image: url('/images/bg.JPG');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>