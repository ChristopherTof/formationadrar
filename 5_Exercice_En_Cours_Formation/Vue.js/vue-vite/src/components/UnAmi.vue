<template>
  <ul class="list-group mb-3">
    <h1>Enfant</h1>
    <h2 class="list-group-item">{{ prenom }} {{ premium === false ? '(Ami nul)' : '(Ami premium)' }}</h2>
    <button type="button" name="" id="" class="btn btn-secondary w-50 mx-auto" @click="afficherPremium">
      {{ 'Pote ou pas?' }}
    </button>
    <button type="button" name="" id="" class="btn btn-primary w-50 mx-auto mb-1" @click="afficheDetail">
      {{ aff ? 'Masquer' : 'Afficher' }}
    </button>

    <div v-if="aff">
      <ul class="list-group">
        <li class="list-group-item">{{ tel }}</li>
        <li class="list-group-item">{{ mail }}</li>
      </ul>
    </div>
  </ul>
</template>

<script lang="js">
import { defineComponent } from 'vue'

export default defineComponent({
	name: 'UnAmi',
	components: {
	},
	props:
		// ['prenom', 'tel', 'mail', "premium"]
		{
			id: {
				type:String,
				required: true
			},
			prenom: {
				type:String,
				required:true
			},
			tel: {
				type:String,
				required:true
			},
			mail: {
				type:String,
				required:true
			},
			premium:{
				type:Boolean,
				required:false,
				default:false,
        },
		}
	,
	emits: {
		// v-model event with validation
		'update:modelValue': (value) => value !== null,
	},
	data() {
		return {
			aff: false,
			//premiumData : this.premium,
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
		afficheDetail(){
			this.aff = !this.aff;
		},

		afficherPremium(){
			//this.premiumData = !this.premiumData;
			this.$emit('mon-event-premium', this.id);
		},


	},
});
</script>

<style scoped lang="css"></style>
