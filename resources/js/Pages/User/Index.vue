<script setup>

    import Layout from "../Layouts/UserLayout.vue"
    import { format } from "date-fns"
    import PostCard from '../Components/PostCard.vue'
    defineOptions({ layout: Layout })
    defineProps({ lposts: Object, sposts: Object, hposts: Object, eposts: Object, auth: Object })

    const items = [
        {
            src: "../images/Cordova-10K.jpg",
        },
        {
            src: "../images/bangbang.jpg",
        },
        {
            src: "../images/solea-mactan27.jpg",
        },
        {
            src: "../images/gilutongan.jpg",
        },
    ]

</script>
<template>
    <div style="position: relative;">
        <v-carousel cycle height="80vh" hide-delimiters :show-arrows="false">
            <v-carousel-item v-for="(item, i) in items" :src="item.src" :key="i" cover>
                <div class="overlay"></div>
            </v-carousel-item>
        </v-carousel>
        <p class="text-h2 text-white" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">WELCOME TO THE MUNICIPALITY OF CORDOVA</p>
    </div>

    <v-container>
        <v-row>
            <v-col cols="10">
                <p class="text-h4">Local news</p>
            </v-col>
            <v-spacer/>
            <v-col cols="2" class="justify-end d-flex" align-self="end">
                <v-btn>View all</v-btn>
            </v-col>
        </v-row>
        <v-divider class="my-4" />
        <v-row>
            <v-col cols="4" v-for="post in lposts" :key="post.id">
                <PostCard :post="post" />
            </v-col>
            <v-col cols="12" v-if="lposts.length == 0">
                <v-card color="grey" height="250" class="d-flex align-center justify-center my-6">
                    <v-card-text class="text-center text-h5">
                        <v-icon>mdi-alert-circle-outline</v-icon> No local news available at the moment.
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>

    <v-container>
        <v-row>
            <v-col cols="10">
                <p class="text-h4">Events</p>
            </v-col>
            <v-spacer/>
            <v-col cols="2" class="justify-end d-flex" align-self="end">
                <v-btn>View all</v-btn>
            </v-col>
        </v-row>
        <v-divider class="my-4" />
        <v-row>
            <v-col cols="4" v-for="post in eposts" :key="post.id">
                <PostCard :post="post" />
            </v-col>
            <v-col cols="12" v-if="eposts.length == 0">
                <v-card color="grey" height="250" class="d-flex align-center justify-center my-6">
                    <v-card-text class="text-center text-h5">
                        <v-icon>mdi-alert-circle-outline</v-icon> No events found.
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>

    <v-container>
        <v-row>
            <v-col cols="10">
                <p class="text-h4">Sports</p>
            </v-col>
            <v-spacer/>
            <v-col cols="2" class="justify-end d-flex" align-self="end">
                <v-btn>View all</v-btn>
            </v-col>
        </v-row>
        <v-divider class="my-4" />
        <v-row>
            <v-col cols="4" v-for="post in sposts" :key="post.id">
                <PostCard :post="post" />
            </v-col>
            <v-col cols="12" v-if="sposts.length == 0">
                <v-card color="grey" height="250" class="d-flex align-center justify-center my-6">
                    <v-card-text class="text-center text-h5">
                        <v-icon>mdi-alert-circle-outline</v-icon> Sorry, no sports highlights available at the moment.
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>

    <v-container>
        <v-row>
            <v-col cols="10">
                <p class="text-h4">Health and wellness</p>
            </v-col>
            <v-spacer/>
            <v-col cols="2" class="justify-end d-flex" align-self="end">
                <v-btn>View all</v-btn>
            </v-col>
        </v-row>
        <v-divider class="my-4" />
        <v-row>
            <v-col cols="4" v-for="post in hposts" :key="post.id">
                <PostCard :post="post" />
            </v-col>
            <v-col cols="12" v-if="hposts.length == 0">
                <v-card color="grey" height="250" class="d-flex align-center justify-center my-6">
                    <v-card-text class="text-center text-h5">
                        <v-icon>mdi-alert-circle-outline</v-icon> Sorry, no health and wellness posts to show right now.
                    </v-card-text>
                </v-card>
            </v-col>
        </v-row>
    </v-container>

</template>

<style scoped>
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Adjust the alpha value to change the darkness */
    z-index: 0;
}


</style>
