<template>
    <div class="team-card card">
        <!-- <div class="card-image image">
            <img :src="house.cover_photo">
        </div> -->

        <div class="card-text">
            <h3 class="card-title text-center"> {{ house.name_house }} </h3>
            <!-- <ul>
                <li>{{ house.type }}</li>
                <li>{{ house.address }}</li>
            </ul> -->
            <div class=" mt-2">
                <img :src="`/storage/${house.cover_photo}`" class="card-img-top" :alt="house.title">
                <router-link :to="{name: 'show', params: {id: house.id} }" class="nav-link active bg-white">
                <p class="read">Read</p>
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'CardHouse',
    props: {
        house: Object,
    }
}
</script>

<style lang="scss" scoped>

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.team-card {
  flex-basis: 370px;

  margin-top: 50px;
  margin-right: 28px;
}

.team-container::after {
  flex: auto;

  content: "";
}

.card-image {
  overflow: hidden;

  cursor: pointer;
}

.card-image img {
  display: block;

  max-width: 100%;

  transition: all 1s;
}

.card-image:hover img {
  transform: scale(1.1, 1.1);

  opacity: .9;
}

.card-text {
  padding: 10px;
  text-align: center;
  background-color: #fff;
}

.card-text h3 {
  font-family: "Vidaloka", serif;
  font-size: 22px;
  font-weight: 400;
}

.image {
    width: 100%;
    height: 200px;

    img {
        width: 100%;
        height: 100%;
    }
}

.read {
    font-size: 13px;
    width: 20%;
    margin: 0 auto;
    background-color: black;
    color: white;
}
</style>
