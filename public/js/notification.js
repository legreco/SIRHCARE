/**
 * Created by MarcGrecoPeralte on 11/10/2016.
 */
Echo.private('App.User.' + userId)
    .notification((notification) => {
        notifyUser(notification)





    });

toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}
function notifyUser(notification) {
    toastr["info"](JSON.stringify(notification));
    audio.play();
}

var notification_panel =new Vue({
    
    el:'#notifications',
    data:{
        notifications:[

        ],

        notification:{
          data:{}
        }

    },

    mounted: function(){

        this.getNotifications();


    },


    methods : {
        getNotifications: function(){

            this.$http.get('/api/user/'+userId+'/notifications').then((response) => {

         this.notifications=response.data;

                alert('done');
            });


        },

    }

});