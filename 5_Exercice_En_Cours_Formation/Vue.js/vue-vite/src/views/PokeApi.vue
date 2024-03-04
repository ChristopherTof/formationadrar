<template>
  <section>
    <h1>Pokemon</h1>

    <h2>Lise des pokemons :</h2>
    <ul>
      <li v-for="val in listPoke">{{ val.name }}</li>
    </ul>
  </section>
</template>

<script lang="js">
import { defineComponent } from 'vue'

export default defineComponent({
	name: 'PokeApi',
	components: {
	},
	props: {
		// v-model
		modelValue: {
			default: '',
		},
	},
	emits: {
		// v-model event with validation
		'update:modelValue': (value) => value !== null,
	},
	data() {
		return {
			listPoke:['']
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

	created() {
		// GET request using fetch with error handling
		fetch("https://pokebuildapi.fr/api/v1/pokemon")
			.then(async response => {
				const data = await response.json();

				// check for error response
				if (!response.ok) {
					// get error message from body or default to response statusText
					const error = (data && data.message) || response.statusText;
					return Promise.reject(error);
				}
				console.log(data);
				this.listPoke=data;
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
