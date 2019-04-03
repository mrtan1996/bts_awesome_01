new Vue({
    el: '#login-form',
    data: {
        user:{
            'email': null,
            'password': null,
        },
        formErrors: null,
        userNotFound: null
    },

    created: function () {
        console.log(121212);
    },

    methods: {
        handleLogin(){
            
            var self = this;
            var authOption = {
                method: 'POST',
                url: '/account/handle-login',
                params: this.user,
                json: true
            }
            axios(authOption).then((response) =>{
                self.formErrors = null;
                window.location.href = '/admin/auth';
            }).catch((error) => {
                self.formErrors = error.response.data.errors;
                if (error.response.status == 401){
                    self.userNotFound = error.response.data.message
                }
            });
        }
    }
});