

var org_chart_vn =new Vue({

    el:'#org_chart_vue',
    data:{
        departments: []
    },


    computed: {

    },

    created: function () {

    },

    mounted: function(){


        this.fetchDepartments();

       this.initGetOrgChart()




    },


    methods : {
        fetchDepartments: function () {

            this.$http.get('/api/departments')
                .then(response => {

                    this.departments = response.data;

                    var orgchart = new getOrgChart(document.getElementById("people"),{
                        idField: "id",
                        primaryFields: ["name"],
                        parentIdField: "department_id",
                        dataSource: this.departments

                    });

                });
        },
        initGetOrgChart: function () {

            alert(JSON.stringify(this.departments));

        }

    }







});