<script setup>

    import {ref} from 'vue'
    const email = ref('')

</script>
<template>
    <v-toolbar title="Get connected with us with social networks">

        <v-spacer></v-spacer>
        <v-btn icon color="blue">
            <v-icon>mdi-facebook</v-icon>
        </v-btn>
        <v-btn icon color="red">
            <v-icon>mdi-youtube</v-icon>
        </v-btn>
        <v-btn icon color="purple">
            <v-icon>mdi-instagram</v-icon>
        </v-btn>
        <v-btn icon color="blue">
            <v-icon>mdi-twitter</v-icon>
        </v-btn>
    </v-toolbar>

    <footer class="border">
        
        <v-row class="text-center mt-1" justify="center">
            <v-col cols="5">
                <p class="text-h5">DON'T MISS A MOMENT!</p> 
            <p>Sign up to receive latest update</p>
            <v-text-field class="mt-4" label="Email address" v-model="email" color="pink" variant="outlined" placeholder="example@email.com">
                <template v-slot:append-inner>
                    <v-expand-transition>
                        <v-btn append-icon="mdi-bell" class="rounded-pill" color="pink" v-if="email">Notify me</v-btn>
                    </v-expand-transition>
                </template>
            </v-text-field>
            </v-col>
        </v-row>
        <v-divider class="mb-5"/>
        <v-row>
            <v-col cols="4">
                <v-img src="images/cordova.jpeg" width="100%" height="70%"></v-img>
            </v-col>
            <v-col cols="3">
                <v-list>
                    <v-list-item>
                        <p class="text-h5">Useful Links</p>
                    </v-list-item>
                    <Link href="/news"><v-list-item> News and information</v-list-item></Link>
                    <Link href="/tourism"><v-list-item> Tourism</v-list-item></Link>
                    <Link href="route('index')"><v-list-item> Index</v-list-item></Link>
                    <Link href="/news"><v-list-item> News and information</v-list-item></Link>
                </v-list>
            </v-col>
            <v-col cols="3">
                <v-list>
                    <v-list-item>
                        <p class="text-h5">Contact</p>
                    </v-list-item>
                    <v-list-item prepend-icon="mdi-home"> Cordova, Cebu</v-list-item>
                    <v-list-item prepend-icon="mdi-email"> News and information</v-list-item>
                    <v-list-item prepend-icon="mdi-phone"> News and information</v-list-item>
                </v-list>
            </v-col>
        </v-row>
    </footer>
</template>