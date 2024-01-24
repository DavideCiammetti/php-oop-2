const { createApp } = Vue;

createApp({
  data() {
    return {
      data: [],
      apiUrl:'data/script.php',
      newPassword: null,
      newEmail: null,
      validationError: '',
    };
  },
  methods:{
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
          this.data = response.data.user;

          if(response.data.errors === true){
            this.validationError = 'errore';
            // window.location.href = 'http://localhost/esercizio48-php-oop2/php-oop-2/components/signUp/data/error.php';
          }else{
            this.validationError = '';
          }
          console.log(this.data);
          });

         this.newEmail = '';
         this.newPassword = '';
      },
  },
}).mount('#app');