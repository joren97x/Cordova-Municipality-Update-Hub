<script setup>
    import Layout from '../Layouts/UserLayout.vue'
    import {format} from 'date-fns'
    defineOptions({
        layout: Layout
    })
    const items = [
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg',
          },
        ]
</script>
<template>
    <p class="text-h2 text-white text-center font-weight-bold" id="title">WELCOME TO THE MUNICIPALITY OF CORDOVA</p>
    <v-carousel hide-delimiters cycle :show-arrows="false" style="filter: brightness(60%);">
        <v-carousel-item v-for="(item,i) in items" :key="i" :src="item.src" cover>
        </v-carousel-item>
    </v-carousel>
  
    <v-container>
        <v-toolbar color="white" class="mb-4" id="toolbar-title">
                <p class="ms-6 text-h4">Cordova's Latest News</p>
        <v-spacer></v-spacer>
        
        <v-btn color="blue" variant="flat">
            Show all
        </v-btn>
        </v-toolbar>
        <v-row>
            <v-col cols="4" v-for="n in 6" :key="n">
                <v-card class="mx-auto" max-width="374">
                    <v-img cover height="250" src="https://cdn.vuetifyjs.com/images/cards/cooking.png">
                    </v-img>
                    <v-card-item>
                        <v-card-subtitle>
                            <span class="me-1">{{ format(new Date, 'EEE MMM d Y') }}</span>
                        </v-card-subtitle>
                        <v-card-title>Headline {{ n }} </v-card-title>
                        <v-card-text>
                            <span class="me-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore earum fugiat consectetur sapiente?</span>
                            <v-icon color="error" icon="mdi-fire-circle" size="small">
                            </v-icon>
                        </v-card-text>
                    </v-card-item>
                    <v-card-actions>
                        <v-btn class="text-none" color="deep-purple-lighten-2" variant="text" @click="reserve">
                            Read more
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>

        <v-toolbar color="white" class="my-4" id="toolbar-title">
                <p class="ms-6 text-h4">Cordova's Latest Events</p>
        <v-spacer></v-spacer>
        
        <v-btn color="blue" variant="flat">
            Show all
        </v-btn>
        </v-toolbar>
        <v-row>
            <v-col cols="4" v-for="n in 4" :key="n">
                <v-card class="mx-auto" max-width="374">
                    <v-img cover height="250" src="https://cdn.vuetifyjs.com/images/carousel/sky.jpg">
                    </v-img>
                    <v-card-item>
                        <v-card-subtitle>
                            <span class="me-1">{{ format(new Date, 'EEE MMM d Y') }}</span>
                        </v-card-subtitle>
                        <v-card-title>Headline {{ n }} </v-card-title>
                        <v-card-text>
                            <span class="me-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore earum fugiat consectetur sapiente?</span>
                            <v-icon color="error" icon="mdi-fire-circle" size="small">
                            </v-icon>
                        </v-card-text>
                    </v-card-item>
                    <v-card-actions>
                        <v-btn class="text-none" color="deep-purple-lighten-2" variant="text" @click="reserve">
                            Read more
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>

        <v-toolbar color="white" class="my-4" id="toolbar-title">
                <p class="ms-6 text-h4">Sports Events</p>
        <v-spacer></v-spacer>
        
        <v-btn color="blue" variant="flat">
            Show all
        </v-btn>
        </v-toolbar>
        <v-row>
            <v-col cols="4" v-for="n in 4" :key="n">
                <v-card class="mx-auto" max-width="374">
                    <v-img cover height="250" src="https://cdn.vuetifyjs.com/images/carousel/sky.jpg">
                    </v-img>
                    <v-card-item>
                        <v-card-subtitle>
                            <span class="me-1">{{ format(new Date, 'EEE MMM d Y') }}</span>
                        </v-card-subtitle>
                        <v-card-title>Headline {{ n }} </v-card-title>
                        <v-card-text>
                            <span class="me-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore earum fugiat consectetur sapiente?</span>
                            <v-icon color="error" icon="mdi-fire-circle" size="small">
                            </v-icon>
                        </v-card-text>
                    </v-card-item>
                    <v-card-actions>
                        <v-btn class="text-none" color="deep-purple-lighten-2" variant="text" @click="reserve">
                            Read more
                        </v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>

    </v-container>

</template>

<style scoped>

    #title {
        position: absolute; 
        z-index: 10;
        margin-top: 7%;
    }

    #toolbar-title {
        border-bottom: 1px solid black;
    }

</style>