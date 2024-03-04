Vue.createApp({
  data() {
    return {
      link: ' https://www.pokepedia.fr/images/8/89/Salam%C3%A8che-RFVF.png',
      name: 'Salamèche',
      age: 2,
    };
  },

  methods: {
    random() {
      nbr = Math.random();
      return nbr;
    },
    vieilli() {
      return this.age + 10;
    },
  },
}).mount('#card');
