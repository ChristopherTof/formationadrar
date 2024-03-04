const app = Vue.createApp({
  data() {
    return {
      dynamicColor: '',
      classHello: false,
      classWorld: false,
      hide: false,
    };
  },
  methods: {
    afficheStyle() {
      let event = target.value;
      if (event == 'hello' || event == 'Hello' || event == 'HELLO') {
        this.classHello = true;
        this.classWorld = false;
      } else if (event == 'world' || event == 'World' || event == 'WORLD') {
        this.classHello = false;
        this.classWorld = true;
      } else {
        this.classHello = false;
        this.classWorld = false;
      }
    },

    afficheColor(event) {
      //console.log(event);
      this.dynamicColor = event.target.value;
    },

    hideTitle() {
      this.hide = !this.hide;
    },
  },

  computed: {},
});

app.mount('#monApp');
