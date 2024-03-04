Vue.createApp({
  data() {
    return {
      count: 0,
      nameUser: '',
      message: '',
    };
  },

  methods: {
    addOne() {
      this.count += 1;
    },

    addFive() {
      this.count += 5;
    },
  },

  computed: {
    indice() {
      if (this.count < 9) {
        return 'Essaie encore';
      } else if (this.count > 9) {
        return 'Trop haut';
      } else if (this.count == 9) {
        setTimeout(() => {
          this.count = 0;
        }, 3000);
        return "c'est gagné";
      }
    },
  },

  watch: {
    count(value) {
      if (value >= 30) {
        this.message = 'Beaucoup trop froid là';
        setTimeout(() => {
          this.count = 0;
          this.message = '';
        }, 3000);
      }
    },
  },
}).mount('#compteur');
