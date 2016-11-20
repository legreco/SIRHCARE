

var vm =new Vue({

    el:'#employees',
    data:{
        employees:[],
        pagination: {
            total: 0,
            per_page: 2,
            from: 1,
            to: 0,
            current_page: 1
        },
        offset: 4,
        loading:false,
        color: '#3AB982',
        height: '35px',
        width: '4px',
        margin: '2px',
        radius: '2px',
        sexe:true
    },
  


    computed: {
        isActived: function () {
            return this.pagination.current_page;
        },
        pagesNumber: function () {
            if (!this.pagination.to) {
                return [];
            }
            var from = this.pagination.current_page - this.offset;
            if (from < 1) {
                from = 1;
            }
            var to = from + (this.offset * 2);
            if (to >= this.pagination.last_page) {
                to = this.pagination.last_page;
            }
            var pagesArray = [];
            while (from <= to) {
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
    },

    mounted: function(){


        this.getEmployees(this.pagination.current_page);



    },


    methods : {
        getEmployees: function(page) {
             this.loading=true;
            this.$http.get('/api/employees?page='+page)
                .then(response => {
                    this.loading=false;
                    this.employees = response.data.data.data;
                    this.pagination=response.data.pagination;
                });

        },

      
        listen: function () {
            Echo.private('App.User.' + userId)
                .notification((notification) => {
                    this.notifications.unshift(notification);
                    toastr["info"](JSON.stringify(notification));
                    audio.play();
                });
        },
        changePage: function (page) {
            this.pagination.current_page = page;
            this.getEmployees(page);
        }

    },


    filters:{
        time_ago: function (value) {
            return moment(value).fromNow();
        }
    }

});