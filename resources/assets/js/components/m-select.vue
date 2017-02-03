<template>
    <multiselect v-model="value" :options="options" label="name" track-by="id"></multiselect>
</template>

<script>



import Multiselect from 'vue-multiselect'

export default {
  props:['url','selected','reset'],
 components: { Multiselect },
  data () {
    return {
      value: {},
      options: []
    }
  },
  methods: {

  getOptions ()
      {
         this.$http.get(this.url).then((response) => {
    // success callback
       this.options=response.data;
  }, (response) => {
    // error callback
  });
      }
  },

   mounted: function () {

    if(this.url!=null)

    this.getOptions();

    if(this.selected!=null)
    this.value=this.selected;

    },
    watch: {
    value: function(new_value)
    {
    this.$emit('new_value',new_value);
    },
    reset: function(new_value){
    if(new_value)
    this.value={};
    },
    selected: function(new_value)
    {
    this.value=this.selected;
    }
    }
  }
</script>