<script setup>

    import Layout from '../Layouts/UserLayout.vue';
    defineOptions({
        layout: Layout
    })

    const barangays = [
        'Alegria',
        'Bangbang',
        'Buagsong',
        'Catarman',
        'Cogon',
        'Dapitan',
        'Day-as',
        'Gabi',
        'Gilutongan',
        'Ibabao',
        'Pilipog',
        'Poblacion',
        'San Miguel'
    ]

</script>
<template>
    <v-row>
        <v-col cols="3" v-for="brgy in barangays" :key="brgy">
            <v-card>
                <v-img src="'https://cdn.vuetifyjs.com/images/cards/house.jpg'" class="align-end" gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)" height="200px" cover>
                    <v-card-title class="text-white text-center">{{ brgy }}</v-card-title>
                </v-img>
          </v-card>
        </v-col>
    </v-row>
</template>