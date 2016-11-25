

$("#position").select2({
    placeholder: "Choisir le genre",
    allowClear: true,
    ajax: {
        dataType: 'json',
        url: appUrl+'api/select2/positions',
        data: function(params) {
            return {
                term: params.term
            }
        },
        processResults: function (data, page) {
            return {
                results: data
            };
        },
    }
});




//Date picker
$('#startDate').datepicker({
    autoclose: true,
    format: 'yyyy/mm/dd'
});



$('#endDate').datepicker({
    autoclose: true,
    format: 'yyyy/mm/dd'
});