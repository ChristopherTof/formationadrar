Vue.createApp({
  data() {
    return {
      selectCard1: false,
      selectCard2: false,
      message: '',
    };
  },

  methods: {
    selectionCard(uneCard) {
      toggler = true;
      if (uneCard == 1) {
        this.selectCard1 = !this.selectCard1;
        console.log(this.selectCard1);
      }
      if (uneCard == 2) {
        this.selectCard2 = !this.selectCard2;
        console.log(this.selectCard2);
      }
    },
  },
}).mount('#couleur');
