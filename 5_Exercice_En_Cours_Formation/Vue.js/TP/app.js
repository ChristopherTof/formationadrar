const app = Vue.createApp({
  data() {
    return {
      listCourse: [],
      article: '',
      hide: false,
    };
  },

  methods: {
    addArticle() {
      this.listCourse.push(this.article);
      this.article = '';
    },
    removeItems(index) {
      this.listCourse.splice(index, 1);
    },

    hideElem() {
      this.hide = !this.hide;
    },
  },

  computed: {
    changeMessage() {
      return !this.hide ? 'Masquer la liste' : 'Afficher la liste';
    },
  },
});

app.mount('#monApp');
