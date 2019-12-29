<template>
    <div >
        <div class="flex items-center w-full ">     
  <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-lg md:mx-auto">
    <h1 class="block w-full text-center text-grey-darkest mb-6">Inscription Pédagogique </h1>
    <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="http://127.0.0.1:8000/api/InscriptionAdd" method="post">
      <div class="flex flex-col mb-4 md:w-1/2">
        <label class="mb-2  tracking-wide font-bold text-lg text-grey-darkest" for="firstName">Nom </label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest md:mr-2" type="text" name="firstName" id="firstName">
      </div>
      <div class="flex flex-col mb-4 md:w-1/2">
        <label class="mb-2  tracking-wide font-bold text-lg text-grey-darkest" for="lastName">Prénom</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest md:mr-2" type="text" name="lastName" id="lastName">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest md:ml-2" for="matricule">Matricule</label>
        <input class=" rounded-lg border py-2 px-3 text-grey-darkest md:ml-2" type="text" name="matricule" id="matricule">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="address">Adresse</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="text" name="address" id="address">
      </div>

 <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="codepostal">Code postal</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="number" name="codepostal" id="codepostal">
      </div> 
      <div class="flex mb-4 md:w-full">
              <label class="mb-2 md:w-1/3 font-bold text-lg text-grey-darkest" >Année de l'étudiant </label>
                <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" Name="AnnéeEtude" value="1cp" checked="checked"> 1CP</label>
                <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" Name="AnnéeEtude" value="2cp">2CP</label>
                <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" Name="AnnéeEtude" value="1cs">1CS</label>
                <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" Name="AnnéeEtude" value="2cs"> 2CS </label>
              <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" Name="AnnéeEtude" value="3cs"> 3CS </label>
       </div>

       <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="Numero">Telephone</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="number" name="Numero" id="Numero">
      </div>
      <div class="flex flex-col mb-4 md:w-full">
        <label class="mb-2  font-bold text-lg text-grey-darkest" for="email">Email</label>
        <input class="rounded-lg border py-2 px-3 text-grey-darkest" type="email" name="email" id="email">
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
        <label class="radio-inline rounded-lg border py-2 px-3 text-grey-darkest"><input type="radio" Name="an" value="1" required >J'accepte les conditions générales du réglement de l'école.</label>
      </div>

      <button class="rounded-lg block bg-blue-dark hover:bg-red text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Envoyé </button>
    </form>
  </div>
    </div>
        </div>

</template>

<script>
export default {
};
</script>
  <style>
</style>