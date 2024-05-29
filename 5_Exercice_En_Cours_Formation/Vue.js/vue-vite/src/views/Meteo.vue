<template>
  <div>
    <h1>METEEEEEEOOOOOOOOO</h1>

    <img :src="meteo.icon_big" alt="" />
    <div>{{ meteo.name }} {{ meteo.date }} Aujourd'hui, le temps est {{ meteo.condition }}, et la température est de {{ meteo.tmp }}°</div>
    <div>T° Max : {{ meteo2.tmax }}°</div>
    <div>T° Min : {{ meteo2.tmin }}°</div>
  </div>
</template>

<script lang="js">
import { defineComponent } from 'vue'

export default defineComponent({
	name: 'Meteo',
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
			meteo: null,
			meteo2:null,
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
		fetch("https://prevision-meteo.ch/services/json/toulouse")
			.then(async response => {
				const data = await response.json();

				// check for error response
				if (!response.ok) {
					// get error message from body or default to response statusText
					const error = (data && data.message) || response.statusText;
					return Promise.reject(error);
				}

				this.meteo=data.current_condition;
				this.meteo2=data.fcst_day_0;
				console.log(this.meteo2);
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
