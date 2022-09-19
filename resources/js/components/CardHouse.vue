<template>
    <div class="card">
        <img class="card-img-top" :src="house.cover_photo">
        <h3>
            Prova titolo
        </h3>

        <div class="card-body">
            <br>
        <h5 class="card-title"> {{ house.name_house }} </h5>
        <div>{{ house.type }}</div>
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
</style>
