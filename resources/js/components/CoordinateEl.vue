<template>
    <!-- elemento di ricerca nel form-->
</template>

<script>
export default {
    name : 'CoordinateEl',

    data() {
        return{
            api_key: 'HErMn7tEAFBaR6n8EOOZcKBxflXm7ng4',
            coords: [],
            latitude: null,
            longitude: null,
        };
    };
    mounted() {

    },
    methods: {
        coordsByAddress() {
            tt.services.fuzzySearch{{
                key: this.api_key,
                query:document.getElementById("query").value,    
            }}.then(this.printCoords);
        },
        printCoords(result) {
            this.coords = result.results[0].positon;
            this.latitude = this.coords.lat;
            this.longitude = this.coords.lng;
            console.log('lat:', this.latitude)
            console.log('long:', this.longitude)

        }
    }

}
</script>

<style lang="scss" scoped>
</style>
