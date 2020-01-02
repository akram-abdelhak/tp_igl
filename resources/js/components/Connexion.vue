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
      <h1 class="block w-full text-center text-grey-darkest mb-6">Connexion</h1>
    <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="" @submit.prevent="login">
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="email">Email</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="email" v-model="email" id="email">
      </div>
      <div class="flex flex-col mb-6 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="password">Mot de passe</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="password" v-model="password" id="password">
      </div>
      <button class="rounded-lg block bg-blue-dark hover:bg-green text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Connexion </button>
    </form>
        <a class="block w-full text-center no-underline text-sm text-grey-dark hover:text-grey-darker" href="/Inscription">Vous n'avez pas encore de compte ? Inscrivez-vous!</a>

  </div>
    </div>
        </div>

</template>

<script>
export default {


     data(){
      return {
        email:null,
        password:null
      }
    },
    methods: {
      login(){

        axios.post('/login',{email:this.email,password:this.password}).then((Response)=>{
            console.log(Response);
             let accessToken = Response.data.success['token'];
              localStorage.setItem('token', accessToken);
              localStorage.setItem('user', Response.data.success['compte']);
              this.$router.push('/Accueil');


        })
        .catch((error)=>{
             localStorage.removeItem('token');
              console.log(error);
              window.alert(error.message);
            

        } )
        
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