const {createApp} = Vue;
createApp({
  data(){
    return{
      apiUrl: 'server.php',
      isToggled: false,
      discs: [],
      active: 0
    }
  },
  methods:{

    getDiscs(){
      axios.get(this.apiUrl)
      .then(result => {
        this.discs = result.data;
        console.log(this.discs);
      })
    },
    toggleWindow(index){
      this.active = index;
      this.isToggled = !this.isToggled;
    },
  },
  mounted(){
    this.getDiscs();
  }
}).mount('#app');