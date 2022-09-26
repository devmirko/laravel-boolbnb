<template>
    <div class="bg-dark">
        <div class="container">
            <h1 class="text-center">Benvenuti in BoolBnB</h1>
            <h4>filtra per:</h4>
                <ul >
                    <!-- ricerca per citta -->
                    <li>
                        <SearchAdvancedBad :is-in-edit-mode='true' @coordinates="saveCoordinates" @edit="setEdit"></SearchAdvancedBad>
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
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="2" v-model="checkedServices">
                                <span>Cucina</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="3" v-model="checkedServices">
                                <span>Lavatrice</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="4" v-model="checkedServices">
                                <span>Asciugatrice</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="5" v-model="checkedServices">
                                <span>Aria Condizionata</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="6" v-model="checkedServices">
                                <span>Riscaldamento</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="7" v-model="checkedServices">
                                <span>TV</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="8" v-model="checkedServices">
                                <span>Spazio di lavoro dedicato</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="9" v-model="checkedServices">
                                <span>Asciugacapelli</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="10" v-model="checkedServices">
                                <span>Ferro da stiro</span>
                            </label>
                            <label class='check-item'>
                                <input type="checkbox" value="11" v-model="checkedServices">
                                <span>Piscina</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="12" v-model="checkedServices">
                                <span>Idromassaggio</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="13" v-model="checkedServices">
                                <span>Parcheggio Gratuito</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="14" v-model="checkedServices">
                                <span>Postazione di ricarica per veicoli elettrici</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="15" v-model="checkedServices">
                                <span>Culla</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="16" v-model="checkedServices">
                                <span>Palestra</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="17" v-model="checkedServices">
                                <span>Griglia per barbecue</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="18" v-model="checkedServices">
                                <span>Colazione</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="19" v-model="checkedServices">
                                <span>Camino</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="20" v-model="checkedServices">
                                <span>Permesso Fumatori</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="21" v-model="checkedServices">
                                <span>Lungo la spiaggia</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="22" v-model="checkedServices">
                                <span>Lungo la riva</span>
                            </label>

                            <label class='check-item'>
                                <input type="checkbox" value="23" v-model="checkedServices">
                                <span>Allarme antincendio</span>
                            </label>
                        </fieldset>
                    </div>
                    <div id="my_btn">
                        <button @click="onClick"> Cerca </button>
                    </div>

                    </li>
                </ul>


            <!-- <input type="search" class="form-control mr-sm-2 rounded-start" v-model="search" aria-label="Search"  @keyup.enter="searchInput"> -->
            <!-- <router-lik :to="{name: 'AdvancedSearch'}">ricerca</router-lik> -->
            <div class="d-flex row justify-content-center">
            <CardHouse v-for="(house, index) in houses" :key="index" :house="house"/>
            </div>
        </div>
    </div>
  </template>

  <script>
    import CardHouse from '../components/CardHouse.vue';
    import SearchAdvancedBad from '../components/SearchAdvancedBad.vue';
    export default {
        name: 'AdvancedSearch',
        data() {
        return {
          houses: [],
          checkedServices: [],
          search: false,
          radius: 20,
          rooms: 0,
          beds: 0,
          address_lat: 0,
          address_lon: 0,
          noHouses: "",
          checkboxes: false,
        }
      },
      components: {
          CardHouse,
          SearchAdvancedBad
      },

      computed: {
        setCheckboxes() {
            return !this.checkboxes;
        }
      },
      methods: {
        onChange() {
            if (this.search) {
                this.houses= [];
                this.search = true;
                this.getData();
            }
        },
        onClick() {
            this.getData();
            this.houses= [];
            this.search = true;
        },
        saveCoordinates(lat, lon) {
            this.address_lat = lat;
            this.address_lon = lon;
            this.checkboxes = true;
        },
        setEdit() {
            this.checkboxes = false;
            this.search = false;
            this.checkedServices = [];
            this.beds = 0;
            this.rooms = 0;
        },
        getData() {
            axios.get('/api/search', {
                    params: {
                        latitude: this.address_lat,
                        longitude: this.address_lon,
                        radius: this.radius,
                        rooms: this.rooms,
                        beds: this.beds,
                        services: this.checkedServices
                    }
                }).then(res => {
              if (res.data.success) {
                this.houses = res.data.result;
                console.log(this.houses);
              }
            })
            .catch(function(error) {
                    console.log(error);
            })
         }
      }
  }
  </script>

  <style lang="scss" scoped>

    .container {
        color: white;
    }

    ul {
        color: white;
    }
    li {
        margin: 2%;
    }

    @media only screen and (min-width: 800px) {
        ul {
            display: flex;
        }

    }



  </style>
