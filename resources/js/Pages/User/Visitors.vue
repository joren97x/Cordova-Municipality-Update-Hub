<script setup>

    import Layout from '../Layouts/UserLayout.vue';
    defineOptions({
        layout: Layout
    })

    const topics = [
        {
            title: 'Essential Travel Facts',
            image: 'https://cdn.vuetifyjs.com/images/cards/sunshine.jpg'
        },
        {
            title: 'Must see Sites',
            image: 'https://cdn.vuetifyjs.com/images/cards/sunshine.jpg'
        },
        
        {
            title: 'Bed and Dine',
            image: 'https://cdn.vuetifyjs.com/images/cards/sunshine.jpg'
        },
        {
            title: 'Moving around the city',
            image: 'https://cdn.vuetifyjs.com/images/cards/sunshine.jpg'
        },
        {
            title: 'Money Exchange Centers',
            image: 'https://cdn.vuetifyjs.com/images/cards/sunshine.jpg'
        },
        {
            title: 'Entertainment, Shopping and Leisure',
            image: 'https://cdn.vuetifyjs.com/images/cards/sunshine.jpg'
        },
        {
            title: 'Events, Festivals and Activities',
            image: 'https://cdn.vuetifyjs.com/images/cards/sunshine.jpg'
        },
    ]

</script>
<template>
    <v-row>
        <v-col cols="4" v-for="topic in topics" :key="topic">
            <v-card class="mx-auto" max-width="344">
                <v-img :src="topic.image" height="200px" cover></v-img>
                <v-card-title>{{ topic.title }}</v-card-title>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="red" variant="text">
                        Explore
                    </v-btn>
                </v-card-actions>
            </v-card>
        </v-col>
    </v-row>
</template>