<template>

    <select v-model="selected">
        <option v-for="item in items" :value="item.value">
            {{item.label}}
        </option>
    </select>

</template>

<script>
    export default {
        data() {
            return {
                items: [{
                    label: 'Label 1',
                    value: 1
                }, {
                    label: 'Label 2',
                    value: 2
                }],
                selected: 2
            }
        }
    }
</script>