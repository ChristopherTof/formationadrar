<template>
  <div>
    <h1>Une simple requete HTTP Get</h1>
    <h2>Nombre de packages VUE dans NPM (API) : {{ totalVuePackages }}</h2>
  </div>
</template>

<script lang="js">
import { defineComponent } from 'vue'

export default defineComponent({
    name: 'GetRequest',

    data() {
        return {
            totalVuePackages:null
        };
    },

//     created() {
//     // Avec mounted ca marche aussi
//     // mounted() {
//     // Simple GET request using fetch
//     fetch("https://api.npms.io/v2/search?q=vue")
//       .then(response => response.json())
//       .then(data => (this.totalVuePackages = data.total))
//       .catch((e)=>(console.log(e)))
//   },
//! pour faire du async await juste vous précisez async avant le nom de la fonction
// ca marche aussi pour faire des methods en async
// async created() {
//     // GET request using fetch with async/await
//     const response = await fetch("https://api.npms.io/v2/search?q=vue");
//     const data = await response.json();
//     this.totalVuePackages = data.total;
//   },

	created() {
		// GET request using fetch with error handling
		fetch("https://pokeapi.co/api/v2/pokemon")
			.then(async response => {
				const data = await response.json();

				// check for error response
				if (!response.ok) {
					// get error message from body or default to response statusText
					const error = (data && data.message) || response.statusText;
					return Promise.reject(error);
				}
				this.totalVuePackages = data.results.count;
			})
			.catch(error => {
				this.errorMessage = error;
				console.error("There was an error!", error);
			});
	},



    methods: {
    },
});
</script>

<style scoped lang="css"></style>
