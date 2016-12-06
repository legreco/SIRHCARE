/**
 * Created by MarcGrecoPeralte on 12/6/2016.
 */
var leave_policy_create_vm= new Vue({
    el:'#leave_policy_create_vue',
    data:{
            leave_type_settings:[],
        selected:{},
        selected2:{}

    },
    methods:{
        showAddLeaveSettingsModal: function () {
            $("#add-leave-settings-modal").modal('show');
        }
    }
});