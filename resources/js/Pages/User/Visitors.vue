<script setup>
    import Layout from "../Layouts/UserLayout.vue"
    defineOptions({ layout: Layout })
</script>
<template>
  <v-container fluid fill-height>
        <v-row align="center" justify="center">
            <v-col cols="3">
                <Link href="/visitors/essential-travel-facts">
                    <v-card class="mx-auto card-hover-shadow" max-width="400" style="margin-bottom: 4%; margin: 3%">
                        <v-img class="text-white image-zoom" height="200" src="/images/Travel-sites.jpg" cover></v-img>
                        <v-card-title class="text-truncate custom-title">
                            Essential Travel Facts
                        </v-card-title>
                        <v-card-actions>
                            <v-btn>Explore</v-btn>
                        </v-card-actions>
                    </v-card>
                </Link>
            </v-col>

            <v-col cols="3">
                <Link href="/visitors/must-see-sites">
                    <v-card class="mx-auto card-hover-shadow" max-width="400" style="margin-bottom: 4%; margin: 3%">
                        <v-img class="text-white image-zoom" height="200" src="/images/Must-see-sites.jpg" cover></v-img>
                        <v-card-title class="text-truncate custom-title">
                            Must see sites
                        </v-card-title>
                        <v-card-actions>
                            <v-btn>Explore</v-btn>
                        </v-card-actions>
                    </v-card>
                </Link>
            </v-col>

            <v-col cols="3">
                <Link href="/visitors/entertainment">
                    <v-card class="mx-auto card-hover-shadow" max-width="400" style="margin-bottom: 4%; margin: 3%">
                        <v-img class="text-white image-zoom" height="200" src="/images/Entertainment-shopping-leisure.jpg" cover></v-img>
                        <v-card-title class="text-truncate custom-title">
                            Entertainment, Shopping and Leisure
                        </v-card-title>
                        <v-card-actions>
                            <v-btn>Explore</v-btn>
                        </v-card-actions>
                    </v-card>
                </Link>
            </v-col>

            <v-col cols="3">
                <Link href="/visitors/bed-and-dine">
                    <v-card class="mx-auto card-hover-shadow" max-width="400" style="margin-bottom: 4%; margin: 3%">
                        <v-img class="text-white image-zoom" height="200" src="/images/Bed-dine.jpg" cover></v-img>
                        <v-card-title class="text-truncate custom-title">
                            Bed and dine
                        </v-card-title>
                        <v-card-actions>
                            <v-btn>Explore</v-btn>
                        </v-card-actions>
                    </v-card>
                </Link>
            </v-col>

            <v-col cols="3">
                <Link href="/visitors/around-the-city">
                    <v-card class="mx-auto card-hover-shadow" max-width="400" style="margin-bottom: 4%; margin: 3%">
                        <v-img class="text-white image-zoom" height="200" src="/images/Moving-city.jpg" cover></v-img>
                        <v-card-title class="text-truncate custom-title">
                            Moving Around the City
                        </v-card-title>
                        <v-card-actions>
                            <v-btn>Explore</v-btn>
                        </v-card-actions>
                    </v-card>
                </Link>
            </v-col>

            <v-col cols="3">
                <Link href="/visitors/money-exchange-centers">
                    <v-card class="mx-auto card-hover-shadow" max-width="400" style="margin-bottom: 4%; margin: 3%">
                        <v-img class="text-white image-zoom" height="200" src="/images/Money-exchange.jpg" cover></v-img>
                        <v-card-title class="text-truncate custom-title">
                            Money Exchange Centers
                        </v-card-title>
                        <v-card-actions>
                            <v-btn>Explore</v-btn>
                        </v-card-actions>
                    </v-card>
                </Link>
            </v-col>

            <v-col cols="3">
                <Link href="/visitors/events">
                    <v-card class="mx-auto card-hover-shadow" max-width="400" style="margin-bottom: 4%; margin: 3%">
                        <v-img class="text-white image-zoom" height="200" src="/images/Events-festivals.jpg" cover></v-img>
                        <v-card-title class="text-truncate custom-title">
                            Events, Festivals and Activities
                        </v-card-title>
                        <v-card-actions>
                            <v-btn>Explore</v-btn>
                        </v-card-actions>
                    </v-card>
                </Link>
            </v-col>
        </v-row>
  </v-container>
</template>

<style scoped>
    a {
        text-decoration: none;
    }
</style>
