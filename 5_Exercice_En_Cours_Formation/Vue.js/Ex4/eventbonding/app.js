Vue.createApp({
  data() {
    return {
      leTexte: '',
      leTexte2: '',
    };
  },

  methods: {
    capterInput(event) {
      console.log(event);
      this.leTexte = event.target.value;
    },

    capterInput2(event) {
      console.log(event);
      this.leTexte2 = event.target.value;
    },

    alertGeneral() {
      alert('ALERT GENERAAAAAAAAAAALE!!!!!!!!');
    },
  },
}).mount('#eventbind');
