/**
 * Created by MarcGrecoPeralte on 12/7/2016.
 */
var leave_types_vn =new Vue({

    el:'#leave_types_vue',
    data:{
        leave_types:[]
    },

    mounted : function() {
       this.fetchLeaveTypes();
    },

    methods : {
        fetchLeaveTypes: function () {
            this.$http.get('/api/leave_types')
                .then(response => {
                    this.leave_types = response.data;
                });

        }
    }
});