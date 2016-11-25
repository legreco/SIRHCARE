

var currencies_vn =new Vue({

    el:'#create_par_vue',
    data:{
        par_lines:[],
        new_par_line:{
            'deptId':'',
            'fundCode':'',
            'BusinessUnit':'',
            'projectId':'',
            'activity':'',
            'sourceType':'',
            'week1':'',
            'week2':'',
            'week3':'',
            'week4':'',
            'week5':''
        }
    },


    computed: {
       
    },

    mounted: function(){


        



    },


    methods : {

       
        },


        


    filters:{
        time_ago: function (value) {
            return moment(value).fromNow();
        }
    }

});