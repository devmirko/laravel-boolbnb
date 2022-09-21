<template>
    <div id="container">
        <div class="center titolo">
            <b>{{ showHouse.name_house }}</b>
        </div>
            
            <div class="center">
                <img :src="showHouse.cover_photo" alt="Foto della casa">
            </div>
            <div class="d-flex justify-content-around">
                <b>DESCRIZIONE:</b>
                <div class="percent30">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim voluptas laborum veniam quae veritatis quo ipsum corrupti quos, doloremque doloribus facere dicta aliquam reprehenderit quasi, nemo tempore amet eaque quaerat.</div>
            </div>
            <div class="dati mt-5 d-flex justify-content-around">
                <b>CARATTERISTICHE:</b>
                <ul class="col-12, col-sm-12, col-md-6, col-lg-6, d-flex, flex-column, justify-content-center, gap-2, order-2, car">
                    <li class="d-flex">
                        <b class="fst-italic">Rooms: </b> <div> {{ showHouse.rooms }}</div>
                    </li>
                    <li class="d-flex">
                        <b class="fst-italic">Beds: </b> <div> {{ showHouse.email }}</div>
                    </li>
                    <li class="d-flex">
                        <b class="fst-italic">address: </b> <div> {{ showHouse.address }}</div>
                    </li>
                    <li class="d-flex">
                        <b class="fst-italic">MQ: </b> <div> {{ showHouse.phone }}</div>
                    </li>
                    <li class="d-flex">
                        <b class="fst-italic">type: </b> <div> {{ showHouse.type }}</div>
                    </li>
                    </ul>
            </div>
      </div>
  </template>

  <script>
  import axios from 'axios';
  export default {
      name: 'PageShow',
      data() {
          return {
              showHouse: [],
          }
      },
      props: {
        id: String,
      },
      created() {
          axios.get('/api/houses/' + this.id )
              .then(res =>{
                  if (res.data.success) {
                      this.showHouse = res.data.result
                      console.log(this.showHouse);
                  }
              })
      }
  }
  </script>

  <style lang="scss" scoped>
    .image {
        width: 40%;

        img {
            width: 100%;
        }
    }

    .dati {
        width: 100%;
    }
    .center {
        width: 100%;
        text-align: center;
    }
    .car {
        list-style-type: none;
    }
    .titolo {
        font-size: xx-large;
    }
    .percent30 {
        width: 20%;
    }
  </style>
