const {createApp} = Vue;
createApp({
  data(){
    return{
      apiUrl: 'server.php',
      discs: []
    }
  },
  methods:{
    getDiscs(){
      axios.get(this.apiUrl)
      .then(result => {
        this.discs = result.data;
        console.log(this.discs);
      })
    }
  },
  mounted(){
    this.getDiscs();
  }
}).mount('#app');