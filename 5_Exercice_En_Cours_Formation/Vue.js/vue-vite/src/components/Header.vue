<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/home">Navbar</a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <router-link to="/home"><a class="me-5 nav-link">Home</a></router-link>
        </li>
        <li class="nav-item">
          <router-link to="/friends"><a class="me-5 nav-link">Friends</a></router-link>
        </li>
        <li class="nav-item">
          <router-link to="/tasks"><a class="me-5 nav-link">Liste taches</a></router-link>
        </li>
        <li class="nav-item">
          <router-link to="/pokeapi"><a class="me-5 nav-link">PokéApi</a></router-link>
        </li>
        <li class="nav-item">
          <router-link to="/meteo"><a class="me-5 nav-link">Météo</a></router-link>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script lang="js">
import { defineComponent } from 'vue'

export default defineComponent({
	name: 'Header',
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
	},
});
</script>

<style scoped lang="css"></style>
