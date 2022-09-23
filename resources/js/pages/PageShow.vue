<template>
    <div class="contenitore bg-dark text-white">
        <div class="center titolo">
            <b>{{ showHouse.name_house }}</b>
        </div>

        <div class="center">
            <img :src="showHouse.cover_photo" alt="Foto della casa">
        </div>
        <div class="dati mt-5 d-flex justify-content-around">
            <b>CARATTERISTICHE:</b>
            <ul
                class="col-12, col-sm-12, col-md-6, col-lg-6, d-flex, flex-column, justify-content-center, gap-2, order-2, car">
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
            </ul>
        </div>
        <div class="row">
            <div id="map-div"></div>
        </div>
        <div class="center"><b>CONTATTACI</b></div>
        <div class="bordo">
            <form action="">
                <div class="center">
                    <div>
                        Inserisci Email:
                    </div>
                    <input class="email" type="text">
                    <button>invia</button>
                </div>
                <div class="center">
                    <div>
                        Inserisci Testo:
                    </div>
                    <input class="text" type="text">
                    <button>invia</button>

                </div>
            </form>

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

.email {
    width: 80%;
}

.text {
    width: 80%;
    height: 80px;
}

.bordo {
    border: 2px solid aqua;
    padding: 10px;
    margin-left: 20%;
    margin-right: 20%;
    -bottom: 10%;
}

.contenitore {
    color: black
}


body {
    height: 90vh;
    width: 100vh;
}

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
