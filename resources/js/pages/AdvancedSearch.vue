<template>
    <div class="container">
        <h1 class="text-center">Benvenuti in BoolBnB</h1>
        <h4>filtra per:</h4>
            <ul>
                <!-- ricerca per citta -->
                <li>
                    <find-address></find-address>
                    <!-- <FindAddress/> -->
                    <p>Distanza max dall'indirizzo indicato:</p>
                    <input class="" type="text" v-model="radius">
                    <label class="" for="distance">Km </label><br><br>

                </li>
                <!-- ricerca per stanze -->
                <li>
                    <span>Seleziona le stanze : {{ rooms }}</span>
                    <select v-model="rooms">
                        <option disabled value="0">Seleziona le stanze</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select><br><br>
                </li>
                <!-- ricerca per letti -->
                <li>
                    <span>Seleziona gli ospiti : {{ beds }}</span>
                    <select v-model="beds">
                        <option disabled value="0">Seleziona gli ospiti</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                    </select><br><br>
                </li>
                <!-- ricerca per servizi -->
                <li class="list-group-item">
                    <span class="my_select">Servizi inclusi:</span><br>
                <div id='check'>
                    <fieldset>
                        <label class='check-item'>
                            <input type="checkbox" value="1" v-model="checkedServices">
                            <span>Wifi</span>
                            <i class="fas fa-wifi"></i>
                        </label>
                        <label class='check-item'>
                            <input type="checkbox" value="2" v-model="checkedServices">
                            <span>Piscina</span>
                            <i class="fas fa-swimmer"></i>
                        </label>
                        <label class='check-item'>
                            <input type="checkbox" value="3" v-model="checkedServices">
                            <span>Vista mare</span>
                            <i class="fas fa-umbrella-beach"></i>
                        </label>
                        <label class='check-item'>
                            <input type="checkbox" value="4" v-model="checkedServices">
                            <span>Posto auto</span>
                            <i class="fas fa-parking"></i>
                        </label>
                        <label class='check-item'>
                            <input type="checkbox" value="5" v-model="checkedServices">
                            <span>Portineria</span>
                            <i class="fas fa-concierge-bell"></i>
                        </label>
                        <label class='check-item'>
                            <input type="checkbox" value="6" v-model="checkedServices">
                            <span>Sauna</span>
                            <i class="fas fa-hot-tub"></i>
                        </label>
                    </fieldset>
                </div>
                <div id="my_btn">
                    <button> Cerca </button>
                </div>

                </li>
            </ul>


          <!-- <input type="search" class="form-control mr-sm-2 rounded-start" v-model="search" aria-label="Search"  @keyup.enter="searchInput"> -->
          <!-- <router-lik :to="{name: 'AdvancedSearch'}">ricerca</router-lik> -->
        <div class="d-flex row justify-content-center">
          <CardHouse v-for="(house, index) in houses" :key="index" :house="house"/>
        </div>
      </div>
  </template>

  <script>

    import CardHouse from '../components/CardHouse.vue';
    import FindAddress from '../components/FindAddress.vue';

    export default {
        name: 'AdvancedSearch',
        data() {
        return {
          houses: [],
          checkedServices: [],
          search: '',
          radius: 0,
          rooms: 0,
          beds: 0,
          address_lat: 0,
          address_lon: 0,
          noHouses: "",


        }
      },
      components: {
          CardHouse,
          FindAddress

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




      }
  }


  </script>

  <style lang="scss" scoped>









  </style>
