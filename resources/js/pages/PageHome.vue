<template>
  <div>
      <div class="image">
        <div class="margin-top">
            <h1 class="text-center text-black bold">Benvenuti in BoolBnB</h1>
        </div>
        <div class="margin">
            <!-- <input type="search" class="form-control mr-sm-2 rounded-start search" v-model="search" aria-label="Search"  @keyup.enter="searchInput" placeholder="Ricerca...">
            <router-link :to="{name: 'AdvancedSearch'}" class="text-white mt-3"></router-link> -->

            <!-- link per andare in http://127.0.0.1:8000/search -->
            <router-link :to="{name: 'AdvancedSearch'}" class="nav-link active">
                <!-- <a class="read">Search</a> -->
                <button type="button" class="search btn btn-light btn-lg">Cerca</button>
            </router-link>
        </div>
      </div>
      <div class="d-flex justify-content-center flex-wrap pt-3 pb-3 bg-dark">
        <CardHouseHome v-for="(house, index) in houses" :key="index" :house="house"/>
      </div>
    </div>
</template>

<script>
  import CardHouseHome from '../components/CardHouseHome.vue';

  export default {
      name: 'PageHome',
      data() {
      return {
        houses: [],
        search: '',
      }
    },
    components: {
        CardHouseHome,

    },
    watch: {
        search(after, before) {
            this.searchInput();
        }
    },
    created() {
      axios.get('/api/houses')
        .then(res => {
            if (res.data.success) {
              this.houses = res.data.result;
              console.log(this.houses);
            }
          })
    },
    methods: {
        searchInput() {
            if (this.search != ''){
                axios.get('/api/city', {params:{ search: this.search}})
            .then(res => {
            if (res.data.success) {
              this.houses = res.data.result;
              console.log(this.houses);
            }
          });
          }
        }
    }
}


</script>

<style lang="scss" scoped>

    .bold {
        font-weight: bold;
        font-size: 60px;
    }
    .image {
        height: 600px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        background-image: url('../../../public/img/background/Image8.jpg');
        background-position: center center;
        background-size: cover;


        .margin-top {
            margin-top: 80px;
        }

        .margin {
            margin-bottom: 120px;
        }

        .search {
            width: 200px;
            border: 1px solid black;
        }
    }
</style>
