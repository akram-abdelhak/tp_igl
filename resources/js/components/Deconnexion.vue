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
      <h1 class="block w-full text-center text-grey-darkest mb-6">Vous êtes déconnecté </h1>
          <a class="block w-full text-center no-underline text-sm text-grey-dark hover:text-grey-darker" href="/Connexion">Connexion ?</a>

  </div>
    </div>
        </div>

</template>

<script>
export default {
     

      created(){
                localStorage.removeItem('token');
      }
      
      
}
</script>
  <style scoped >
.bod {
  background-image: url('/images/bg.JPG');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>