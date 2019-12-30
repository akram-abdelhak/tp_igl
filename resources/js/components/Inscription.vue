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
    <h1 class="block w-full text-center text-grey-darkest mb-6">Inscription</h1>
    <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="" @submit.prevent="signin" >
      <div class="flex flex-col mb-4 md:w-1/2">
        <label class="mb-2  tracking-wide font-bold text-lg text-grey-darkest" for="name">Nom et prénom</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest md:mr-2" type="text" v-model="name" id="name">
      </div>
      <div class="flex flex-col mb-4 md:w-1/2">
        <label class="mb-2  font-bold text-lg text-grey-darkest md:ml-2" for="matricule">Matricule</label>
        <input class=" rounded-lg border py-2 px-3 text-grey-darkest md:ml-2" type="text" v-model="matricule" id="matricule">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="groupe">Groupe</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="number" v-model="groupe" id="groupe">
      </div>

      <div class="flex mb-4 md:w-full">
              <label class="mb-2 md:w-1/3 font-bold text-lg text-grey-darkest" >Année de l'étudiant </label>
                <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" v-model="niveau" value="1cp" checked="checked"> 1CP</label>
                <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" v-model="niveau" value="2cp">2CP</label>
                <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" v-model="niveau" value="1cs">1CS</label>
                <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" v-model="niveau" value="2cs"> 2CS </label>
              <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" v-model="niveau" value="3cs"> 3CS </label>
       </div>

       <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="telephone">Telephone</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="number" v-model="telephone" id="telephone">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="email">Email</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="email" v-model="email" id="email">
      </div>

      <div class="flex flex-col mb-6 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="password">Mot de passe</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="password" v-model="password" id="password">
      </div>

      <div class="flex flex-col mb-6 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="c_password">Mot de passe</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="password" v-model="c_password" id="c_password">
      </div>

      <button class="rounded-lg block bg-blue-dark hover:bg-red text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Crée un compte </button>
    </form>
    <a class="block w-full text-center no-underline text-sm text-grey-dark hover:text-grey-darker" href="/Connexion">Connexion ?</a>
  </div>
    </div>
        </div>

</template>

<script>

export default {
     data(){
      return {
        email:null,
        name:null,
        password:null,
        matricule:null,
        groupe:null,
        niveau:null,
        telephone:null,
        c_password:null
      }
    },
    methods: {
      signin(){

        axios.post('/register',{name:this.name,matricule:this.matricule,groupe:this.groupe,niveau:this.niveau,telephone:this.telephone,email:this.email,password:this.password,c_password:this.c_password}).then((Response)=>{
            console.log(Response);
     let accessToken = Response.data.success['token'];
              localStorage.setItem('token', accessToken);
              localStorage.setItem('user', Response.data.success['name']);
              this.$router.push('/InscrSuccess');


        })
        .catch((error)=>{
            console.log(error);
            

        } )
        
      }
    }




}
</script>
  <style scoped >
.bod  {
  background-image: url('/images/bg.JPG');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>