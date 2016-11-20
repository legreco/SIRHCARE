/**
 * Created by MarcGrecoPeralte on 11/10/2016.
 */


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


var notification_panel =new Vue({
    
    el:'#notifications',
    data:{
        notifications:[
        ],
        notification:{
        }
    },

    computed:{


    },

    mounted: function(){
        this.listen();

        this.getNotifications();



    },


    methods : {
        getNotifications: function(){

            this.$http.get('/api/user/'+userId+'/notifications').then((response) => {

       //  this.notifications=response.data;

                    this.notifications = response.data.map(({ data}) => {
                        return {
                            category: data.category,
                            route: data.route,
                            trigger_name: data.trigger_name,
                            created_at: data.created_at
                        };
                    });
            });


        },

        addNotification: function(notification){
            this.notifications.add(notification);
            notifyUser(notification);

            },


      notifyUser: function(notification) {
        toastr["info"](JSON.stringify(notification));
        audio.play();
        },

        notification_url: function (notification_route)
        {
            return appUrl.concat(notification_route);
        },

        listen: function () {
            Echo.private('App.User.' + userId)
                .notification((notification) => {
                    this.notifications.unshift(notification);
                    toastr["info"](JSON.stringify(notification));
                    audio.play();
                });
        }

    },


    filters:{
        time_ago: function (value) {
           return moment(value).fromNow();
        }
    }

});