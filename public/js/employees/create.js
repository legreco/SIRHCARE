

//Date picker
$('.datepicker').datepicker({
  autoclose: true,
  format: 'yyyy/mm/dd'
});


function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function(){
  readURL(this);
});


$("#contractType").select2({
  placeholder: "Select an option",
  allowClear: true,
  ajax: {
    dataType: 'json',
    url: '{{ url("contractTypes/all") }}',
    delay: 400,
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

$("#job").select2({
  placeholder: "Select an option",
  allowClear: true,
  ajax: {
    dataType: 'json',
    url: '{{ url("jobs/all") }}',
    delay: 400,
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

$("#superieur").select2({
  placeholder: "Select an option",
  allowClear: true,
  ajax: {
    dataType: 'json',
    url: '{{ url("employees/all") }}',
    delay: 400,
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

$("#currency").select2({
  placeholder: "Select an option",
  allowClear: true,
  ajax: {
    dataType: 'json',
    url: '{{ url("currencies/all") }}',
    delay: 400,
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


$("#title").select2({
  placeholder: "Choisir un titre de civilité",
  allowClear: true,
  ajax: {
    dataType: 'json',
    url: appUrl+'api/titles',
    delay: 400,
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



$("#gender").select2({
  placeholder: "Choisir le genre",
  allowClear: true,
  ajax: {
    dataType: 'json',
    url: appUrl+'api/genders',
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



$("#employee_sup").select2({
  placeholder: "Supérieur hierarchique",
  allowClear: true,
  ajax: {
    dataType: 'json',
    url: appUrl+'api/employees',
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