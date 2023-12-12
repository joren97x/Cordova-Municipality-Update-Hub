<script setup>

    import Layout from "../Layouts/UserLayout.vue"
    import { format } from "date-fns";
    defineOptions({ layout: Layout });

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
            <v-col cols="4" v-for="n in 3" :key="n">
                <v-card>
                    <v-img height="200" width="100%" cover src="https://img.freepik.com/premium-vector/latest-news-announcement-banner-with-megaphone_183875-699.jpg"></v-img>
                    <v-card-title>
                        Title
                    </v-card-title>
                    <v-card-text>
                        <p class="text-body text-grey-darken-2 mb-2"> <v-icon>mdi-circle-medium</v-icon> {{ format(new Date(), 'PPPP') }}</p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta aperiam pariatur doloremque quia eius.
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer/>
                        <v-btn>See more</v-btn>
                    </v-card-actions>
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
            <v-col cols="4" v-for="n in 3" :key="n">
                <v-card>
                    <v-img height="200" width="100%" cover src="https://img.freepik.com/premium-vector/latest-news-announcement-banner-with-megaphone_183875-699.jpg"></v-img>
                    <v-card-title>
                        Title
                    </v-card-title>
                    <v-card-text>
                        <p class="text-body text-grey-darken-2 mb-2"> <v-icon>mdi-circle-medium</v-icon> {{ format(new Date(), 'PPPP') }}</p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta aperiam pariatur doloremque quia eius.
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer/>
                        <v-btn>See more</v-btn>
                    </v-card-actions>
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
            <v-col cols="4" v-for="n in 3" :key="n">
                <v-card>
                    <v-img height="200" width="100%" cover src="https://img.freepik.com/premium-vector/latest-news-announcement-banner-with-megaphone_183875-699.jpg"></v-img>
                    <v-card-title>
                        Title
                    </v-card-title>
                    <v-card-text>
                        <p class="text-body text-grey-darken-2 mb-2"> <v-icon>mdi-circle-medium</v-icon> {{ format(new Date(), 'PPPP') }}</p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta aperiam pariatur doloremque quia eius.
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer/>
                        <v-btn>See more</v-btn>
                    </v-card-actions>
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
            <v-col cols="4" v-for="n in 3" :key="n">
                <v-card>
                    <v-img height="200" width="100%" cover src="https://img.freepik.com/premium-vector/latest-news-announcement-banner-with-megaphone_183875-699.jpg"></v-img>
                    <v-card-title>
                        Title
                    </v-card-title>
                    <v-card-text>
                        <p class="text-body text-grey-darken-2 mb-2"> <v-icon>mdi-circle-medium</v-icon> {{ format(new Date(), 'PPPP') }}</p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta aperiam pariatur doloremque quia eius.
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer/>
                        <v-btn>See more</v-btn>
                    </v-card-actions>
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
