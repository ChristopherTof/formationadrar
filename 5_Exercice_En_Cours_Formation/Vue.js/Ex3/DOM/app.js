Vue.createApp({
  data() {
    return {
      count: 0,
      nameUser: '',
    };
  },

  methods: {
    soustrNbr() {
      this.count--;
    },

    addNbr() {
      this.count++;
    },
  },

  computed: {
    viewName() {
      console.log('La fonction qui gère le userName est bien lancé');
      if (this.nameUser === '') {
        return 'Test';
      } else {
        return 'Username rempli';
      }
    },
  },
}).mount('#compteur');
