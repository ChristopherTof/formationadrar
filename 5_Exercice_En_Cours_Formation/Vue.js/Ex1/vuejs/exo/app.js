Vue.createApp({
  data() {
    return {
      pokemon: 'Salameche',
      nombre: '0123456789',
      tableau: ['Colonne 1', 99],
      objet: {
        'name': 'cool',
        'tel': '0504060102',
      },
      script: `<script>alert('Pwned')</script>`,
      fett: 'Le livre de Booba Fett',
      ahsoka: 'Ahsoka Tano',
    };
  },

  methods: {
    randomBook() {
      nbr = Math.random();
      if (nbr <= 0.5) {
        return this.fett;
      } else {
        return this.ahsoka;
      }
    },
  },
}).mount('#pokedex');
