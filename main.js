const { createApp } = Vue
createApp({
   data(){
      return {
         discs: null,
      }
   },
   methods: {
      
   },
   mounted() {
      axios
      .get("server.php")
      .then(response => {
         this.discs = response.data;
      })
   },
}).mount('#app')