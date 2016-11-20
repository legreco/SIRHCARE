

var currencies_vn =new Vue({

    el:'#currencies_vue',
    data:{
        currencies:[],
        pagination: {
            total: 0,
            per_page: 2,
            from: 1,
            to: 0,
            current_page: 1
        },
        offset: 4,
        loading:false,
        newCurrency:{'name':'','code':'','symbol':''},
        formErrors:{},
        formErrorsUpdate:[],
        submitting:false
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


        this.getCurrencies();



    },


    methods : {

        showCreateModal: function () {
            this.formErrors=[];
            $("#create-currency").modal('show');
        },
        getCurrencies: function() {
            this.loading=true;
            this.$http.get('/api/currencies')
                .then(response => {
                    this.loading=false;
                    this.currencies = response.data;
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
        },

        createCurrency: function(){
            this.submitting=true;
            var input = this.newCurrency;
            this.$http.post('api/currencies',input,{emulateJSON:true}).then((response) => {
               // this.changePage(this.pagination.current_page);
                this.newCurrency={'name':'','code':'','symbol':''};
                $("#create-currency").modal('hide');
                toastr.success(response.data, 'Success Alert', {timeOut: 5000});
            },(response) => {

                this.formErrors = response.data;
            });
            this.submitting=false;
        },
        editCurrency: function(currency){
            var input = this.newCurrency;
            this.$http.post('api/currencies',input,{emulateJSON:true}).then((response) => {
                // this.changePage(this.pagination.current_page);
                this.newCurrency={'name':'','code':'','symbol':''};
                $("#create-currency").modal('hide');
                toastr.success(response.data, 'Success Alert', {timeOut: 5000});
            },(response) => {

                this.formErrors = response.data;
            });
        }



    },


    filters:{
        time_ago: function (value) {
            return moment(value).fromNow();
        }
    }

});