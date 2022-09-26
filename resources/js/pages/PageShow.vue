<template>
    <div class="bg-dark">
        <div class="container bg-dark bg-gradient pt-3 text-white">
            <div class="text-center">
                <h2>{{ showHouse.name_house }}</h2>
            </div>

            <div>
                <div class="image">
                    <img :src="showHouse.cover_photo" alt="Foto della casa">
                </div>
            </div>

            <div class="d-flex justify-content-around mt-3">
                <div class="caratteristiche">
                    <h5>CARATTERISTICHE:</h5>
                    <div class="col-12, col-sm-12, col-md-6, col-lg-6, d-flex, flex-column, justify-content-center, gap-2, order-2, car">
                        <li class="d-flex">
                            <b class="fst-italic">Rooms: </b>
                            <div> {{ showHouse.rooms }}</div>
                        </li>
                        <li class="d-flex">
                            <b class="fst-italic">Beds: </b>
                            <div> {{ showHouse.beds }}</div>
                        </li>
                        <li class="d-flex">
                            <b class="fst-italic">address: </b>
                            <div> {{ showHouse.address }}</div>
                        </li>
                        <li class="d-flex">
                            <b class="fst-italic">MQ: </b>
                            <div> {{ showHouse.mq }}</div>
                        </li>
                        <li class="d-flex">
                            <b class="fst-italic">Type: </b>
                            <div> {{ showHouse.type }}</div>
                        </li>
                        <li class="d-flex">
                            <b class="fst-italic">Latitude: </b>
                            <div> {{ showHouse.latitude }}</div>
                        </li>
                        <li class="d-flex">
                            <b class="fst-italic">Longitude: </b>
                            <div> {{ showHouse.longitude }}</div>
                        </li>
                    </div>
                </div>

                <div class="row">
                    <div id="map-div"></div>
                </div>
            </div>


            <div class="center">
                <h1>Contact us</h1>
                <form @submit.prevent="submitMessage(showHouse.id)" novalidate>
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" v-model="name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="email" name="email" id="email" v-model="email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="message">Message</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="10" v-model="message"></textarea>
                    </div>

                    <div>
                        <input class="form-check-input" type="checkbox" name="newsletter" id="newsletter" checked>
                        <label class="form-check-label" for="newsletter">Iscrivimi alla newsletter</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
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
            API_KEY: '20u8gZALO9mr83SwluzAwlAqG0wNedfs',
            name : '',
            email : '',
            message : '',
        }
    },

    methods : {
        submitMessage($id){
            // console.log('funziona');    //se clicco Send mi stampa 'funziona' nella console

            axios.post('/api/messages/', {
                id : $id,
                name : this.name,
                email : this.email,
                message : this.message,
            })
            .then(res => console.log(res.data));
        }
    },

    mounted() {
        let tomTomScript = document.createElement('script')
        tomTomScript.setAttribute('src', 'https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps-web.min.js')
        document.head.appendChild(tomTomScript)

        let tomTomCss = document.createElement('link')
        tomTomCss.setAttribute('rel', 'stylesheet')
        tomTomCss.setAttribute('type', 'text/css')
        tomTomCss.setAttribute('href', 'https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.5.0/maps/maps.css')
        document.head.appendChild(tomTomCss)

    },
    props: {
        id: String,
    },
    created() {
        axios.get('/api/houses/' + this.id)
            .then(res => {
                if (res.data.success) {
                    this.showHouse = res.data.result
                    var map = tt.map({
                        key: this.API_KEY,
                        container: 'map-div',
                        center: { lng: this.showHouse.longitude, lat: this.showHouse.latitude },
                        zoom: 12
                    });

                    var marker = new tt.Marker()
                        .setLngLat({lng: this.showHouse.longitude, lat: this.showHouse.latitude})
                        .addTo(map);
                    console.log(result)
                }
            })
    }
}
</script>

<style lang="scss" scoped>

    .row {
        display: flex;
        width: 100%;
        height: 500px;
        justify-content: center;
        margin-top: 50px;

        #map-div {
            height: 500px;
            width: 500px;
        }
    }
</style>
