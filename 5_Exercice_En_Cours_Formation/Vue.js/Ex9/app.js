const app = Vue.createApp({
  data() {
    return {
      mesFilms: [],
      monFilm: '',
    };
  },
  methods: {
    movieList() {
      this.mesFilms.push(this.monFilm);
      this.monFilm = '';
    },

    supprime(index) {
      this.mesFilms.splice(index, 1);
    },
  },
});

app.mount('#monApp');
