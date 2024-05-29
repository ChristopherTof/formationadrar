<template>
  <div class="container">
    <h1>Une simple requete HTTP Get</h1>
    <h2>Nombre de packages VUE dans NPM (API) : {{ totalVuePackages }}</h2>
    <h1>les pokemon :</h1>
    <p v-for="(item, index) in pokeArray" :key="index">{{ item.name }}</p>
    <hr />
    <h1>METEO TOULOUSE :</h1>
    <p>temperature max {{ tmax }}</p>
    <p>temperature min {{ tmin }}</p>
    <p>temperature en cours {{ tcurrent }}</p>
    <p>condition météo {{ condition }}</p>
  </div>
</template>

<script lang="js">
import { defineComponent } from 'vue'
export default defineComponent({
    name: 'GetRequest',
    data() {
        return {
            totalVuePackages: null,
            pokeArray: null,
            tmax: null,
            tmin: null,
            tcurrent: null,
            condition: null
        };
    },
    methods: {
        fetchinMeteo() {
            fetch("https://prevision-meteo.ch/services/json/toulouse")
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    this.tmax = data.fcst_day_0.tmax;
                    this.tmin = data.fcst_day_0.tmin;
                    this.tcurrent = data.current_condition.tmp;
                    this.condition = data.current_condition.condition;
                })
                .catch((e) => (console.log(e)))
        },
        fetchinPokemon() {
            fetch("https://pokeapi.co/api/v2/pokemon/")
                .then(response => response.json())
                .then(data => {
					console.log(data);
					this.pokeArray = data.results;
				})
                .catch((e) => (console.log(e)))

        },
    },
    created() {
        this.fetchinMeteo();
        this.fetchinPokemon();
    },
});
</script>
