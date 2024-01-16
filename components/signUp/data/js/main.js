const { createApp } = Vue;

createApp({
  data() {
    return {
      data: [],
      apiUrl:'data/script.php',
      newPassword: '',
      newEmail: '',
    };
  },
  methods:{
    // getData() {
    //   axios.get(this.apiUrl).then((response) => {
    //     this.data = response.data;
    //   });
    // },
    postEmailPass(){
      const param = {
          create: 1,
          newEmail: this.newEmail,
          newPassword: this.newPassword,
        };
        axios.post(this.apiUrl, param,{ 
          headers:{
            'Content-Type': 'multipart/form-data',
          },
         }).then((response)=>{
          this.data = response.data;
          console.log(this.data);
         });
    
         this.newEmail = '';
         this.newPassword = '';
      },
  },
}).mount('#app');