Vue.createApp({
  data() {
    return {
      selectCard1: false,
      selectCard2: false,
      message: '',
      activeColor1: 'aqua',
      activeColorTrue1: 'red',
      activeColor2: 'chartreuse',
      activeColorTrue2: 'yellow',
    };
  },

  methods: {
    selectionCard(uneCard) {
      toggler = true;
      if (uneCard == 1) {
        this.selectCard1 = !this.selectCard1;
      }
      if (uneCard == 2) {
        this.selectCard2 = !this.selectCard2;
      }
    },
  },
}).mount('#couleur');
