<template>
    <div >
        <div class="flex items-center w-full ">     
  <div class="w-full bg-blue-lightest rounded shadow-lg p-8 m-4 md:max-w-lg md:mx-auto">
    <h1 class="block w-full text-center text-grey-darkest mb-6">Inscription Pédagogique </h1>
    <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="" @submit.prevent="submit" > <!-- @submit.prevent="submit" -->
      <div class="flex flex-col mb-4 md:w-1/2">
        <label class="mb-2  tracking-wide font-bold text-lg text-grey-darkest" for="firstName">Nom </label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest md:mr-2" type="text" v-model="firstName" id="firstName">
      </div>
      <div class="flex flex-col mb-4 md:w-1/2">
        <label class="mb-2  tracking-wide font-bold text-lg text-grey-darkest" for="lastName">Prénom</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest md:mr-2" type="text" v-model="lastName" id="lastName">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest md:ml-2" for="matricule">Matricule</label>
        <input class=" rounded-lg border py-2 px-3 text-grey-darkest md:ml-2" type="text" v-model="matricule" id="matricule">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="address">Adresse</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="text" v-model="address" id="address">
      </div>
       <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="city">Ville</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="text" v-model="city" id="city">
      </div>

 <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="codepostal">Code postal</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="number" v-model="codepostal" id="codepostal">
      </div> 
      <div class="flex mb-4 md:w-full">
              <label class="mb-2 md:w-1/3 font-bold text-lg text-grey-darkest" >Année de l'étudiant </label>
                <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" v-model="AnnéeEtude" value="1cp" > 1CP</label>
                <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" v-model="AnnéeEtude" value="2cp">2CP</label>
                <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" v-model="AnnéeEtude" value="1cs">1CS</label>
                <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" v-model="AnnéeEtude" value="2cs"> 2CS </label>
              <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" v-model="AnnéeEtude" value="3cs"> 3CS </label>
       </div>

       <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="Numero">Telephone</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="number" v-model="Numero" id="Numero">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="email">Email</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="email" v-model="email" id="email">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="photo">Photo </label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="file" name="photo" id="photo">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="file1">Piece joint 1 </label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="file" name="file1" id="file1">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="file2">Piece joint 2 </label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="file" name="file2" id="file2">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" v-model="an" value="1" required >J'accepte les conditions générales du réglement de l'école.</label>
      </div>

      <button class="rounded-lg block bg-blue-dark hover:bg-red text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Envoyé </button>
    </form>
  </div>
    </div>
        </div>

</template>

<script>
export default {
     data(){
      return {
        firstName:null,
        email:null,
        lastName:null,
        address:null,
        city:null,
        matricule:null,
        AnnéeEtude:null,
        codepostal:null,
        Numero:null,
        photo:null,
        file1:null,
        file2:null
      }
    },
    methods: {
      submit(){
        this.photo= document.getElementById("photo").files[0];
        this.file1=document.getElementById("file1").files[0];
        this.file2 = document.getElementById('file2').files[0];
        
        
        let formData = new FormData();
          formData.append('firstName', this.firstName);
          formData.append('lastName', this.lastName);
          formData.append('email', this.email);
          formData.append('address', this.address);
          formData.append('city', this.city);
          formData.append('matricule', this.matricule);
          formData.append('AnnéeEtude', this.AnnéeEtude);
          formData.append('codepostal', this.codepostal);
          formData.append('Numero', this.Numero);
          formData.append('photo', this.photo);
          formData.append('file1', this.file1);
          formData.append('file2', this.file2);


    //  axios.post('/InscriptionAdd',{lastName:this.lastName,firstName:this.firstName,matricule:this.matricule,address:this.address,city:this.city,Numero:this.Numero,email:this.email,AnnéeEtude:this.AnnéeEtude,photo:document.getElementById("photo").value,file1:document.getElementById("file1").value,file2:document.getElementById("file2").value,codepostal:this.codepostal}).then((Response)=>{
               // axios.post('/InscriptionAdd',{lastName,firstName}).then((Response)=>{  
                 //                axios.post('/InscriptionAdd',{lastName,firstName,matricule,address,city,Numero,email,photo:document.getElementById("photo").value,file1:document.getElementById("file1").value,file2:document.getElementById("file2").value,codepostal}, { headers: {  'Authorization': 'Bearer ' + token }}).then((Response)=>{
       axios.post('/InscriptionAdd',formData, { headers: { 'Content-Type': 'multipart/form-data' }}).then((Response)=>{
       console.log(Response);
        this.$router.push('/SuccessInscription');
})
        .catch((error)=>{
              window.alert("error");
   window.alert(error.message);
            console.log(error.message);
            

        } )
        
      }
    }


};
</script>
  <style>
</style>
