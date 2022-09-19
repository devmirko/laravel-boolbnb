<template>
    <div>
      <h1 class="text-center">Benvenuti in BoolBnB</h1>
      <div class="image">
      ciao sono un immagine
      </div>
       <div class="d-flex justify-content-center" v-for="(house, index) in houses" :key="index" >
         <div>{{ house.name_house }}</div>

       </div>
    </div>
</template>

<script>


  export default {
      name: 'PageHome',
      data() {
      return {
        houses: [],
      }
    },
    components: {

    },
    created() {
      axios.get('/api/houses')
        .then(res => {
            if (res.data.success) {
              this.houses = res.data.result;
              console.log(this.houses);
            }
          })
    }

  }
</script>

<style lang="scss" scoped>
    // .image {
    //     width: 100%;
    //     height: auto;

    //     img {
    //         width: 100%;
    //         height: auto;
    //     }
    // }
</style>
