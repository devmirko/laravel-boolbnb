<template>
    <div class="container mt-5">
          <div class="d-flex justify-content-between flex-wrap mb-5">
              <ul class="col-12 col-sm-12 col-md-6 col-lg-6 d-flex flex-column justify-content-center gap-2 order-2">
                  <li>
                      <b class="fst-italic">Nome: </b> {{ showHouse.name_house }}
                  </li>
                  <li>
                      <b class="fst-italic">Rooms: </b> {{ showHouse.rooms }}
                  </li>
                  <li>
                      <b class="fst-italic">Beds: </b> {{ showHouse.email }}
                  </li>
                  <li>
                      <b class="fst-italic">address: </b> {{ showHouse.address }}
                  </li>
                  <li>
                      <b class="fst-italic">MQ: </b> {{ showHouse.phone }}
                  </li>
                  <li>
                      <b class="fst-italic">type: </b> {{ showHouse.type }}
                  </li>
                </ul>
                <img :src="showHouse.cover_photo" alt="Foto della casa">
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
  </style>
