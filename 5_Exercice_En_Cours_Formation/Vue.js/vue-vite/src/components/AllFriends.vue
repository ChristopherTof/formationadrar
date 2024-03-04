<template>
  <section class="container">
    <h1 class="text-center">Les Amis - Parent</h1>
    <ul class="list-group">
      <!--! Avec v-for on boucle sur le tableau lesAmis -->
      <!--! Puis avec les v-bind on injecte les données de lesAmis dans les props -->
      <!-- * On vient de créer un composant dynamique -->
      <un-ami
        v-for="unAmi in lesAmis"
        :id="unAmi.id"
        :prenom="unAmi.name"
        :tel="unAmi.phone"
        :mail="unAmi.email"
        :premium="unAmi.premium"
        @mon-event-premium="afficherStatusPremium"
      >
      </un-ami>
      <!-- <un-ami prenom="Steven Seagal" tel="1234567" mail="steven@seagal.com" premium="1"></un-ami>
    <un-ami prenom="Gérard Menvuça" tel="0987654" mail="gérard@menvuca.com" premium="0"></un-ami>
    <un-ami tel="0987654" mail="eric@reptile.com" premium="10000"></un-ami> -->
    </ul>
  </section>
</template>

<script lang="js">
import { defineComponent } from 'vue'
import UnAmi from './UnAmi.vue'
export default defineComponent({
 name: 'AllFriends',
 components: {
  UnAmi
 },
 data() {
  return {
	  lesAmis: [
  {
	  id: 'lasticot',
	  name: 'COCO L ASTICOT',
	  phone: '01234 5678 991',
	  email: 'coco@lasticot.com',
	  premium : true,
  },
  {
	  id: 'janine',
	  name: 'Janine DeLavega',
	  phone: '09876 543 221',
	  email: 'janine@delavega.com',
	  premium : false,
  },
  {
	  id:'jojo',
	  name:"jojoLeBarjo",
	  phone:'123 12346 24',
	  email:'jojo@barjo.com',
	  premium : true,
  },
  {
	  id:'kimonoSurUnFrigo',
	  name:"Steven Seagal",
	  phone:'+338765477',
	  email:'steven@seagal.com',
	  premium : false,
  },
 ],
  };
 },
 computed: {
  value: {
	  get () {
		  return this.modelValue;
	  },
	  set (value) {
		  this.$emit('update:modelValue', value);
	  },
  },
 },
 watch: {
  modelValue: {
	  async handler (_newValue, _oldValue) {
		  // do something
	  },
	  immediate: true
  },
 },
 beforeMount() {
 },
 mounted() {
 },
 updated() {
 },
 beforeUnmount() {
  // stop the wacher on modelValue
  this.$watch('modelValue', () => {}, {});
 },
 methods: {

	afficherStatusPremium(leIdDansUnAmi){

		let unAmiIdentified = this.lesAmis.find(value=>value.id===leIdDansUnAmi);
		unAmiIdentified.premium = !unAmiIdentified.premium;
		console.log(unAmiIdentified);
	}
 },
});
</script>

<style scoped lang="css"></style>
