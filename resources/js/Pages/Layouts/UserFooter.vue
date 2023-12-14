<script setup>

    import {ref} from 'vue'
    const email = ref('')

    const icons = [
        'mdi-facebook',
        'mdi-twitter',
        'mdi-linkedin',
        'mdi-instagram',
      ]

</script>
<template>
    <v-card class="pa-4">
        <v-row justify="center" class="d-flex">
            <v-col>
                <p class="text-h6">Get connected with us on social networks!</p>
            </v-col>
            <v-col cols="4" class="justify-center d-flex">
                <v-btn
                    v-for="icon in icons"
                    :key="icon"
                    class="mx-4"
                    :icon="icon"
                    variant="text"
                ></v-btn>
            </v-col>
        </v-row>
        <p class="text-center text-h5 font-weight-bold">Dont miss a moment!</p>
        <p class="text-center text-h6 mb-3">Sign up to receive the latest updates.</p>
        <v-row justify="center" class="d-flex">
            <v-col cols="8" class="justify-center d-flex">
                <v-text-field v-model="email" variant="outlined" label="Email address">
                    <template v-slot:append-inner>
                        <v-fade-transition>
                            <v-btn icon="mdi-send" v-show="email" variant="text"></v-btn>
                        </v-fade-transition>
                    </template>
                </v-text-field>
            </v-col>
        </v-row>
        <div class="px-4 py-2  text-center w-100">
           <strong>Copyright {{ new Date().getFullYear() }} - All Rights Reserved | Municipality of Cordova</strong>
        </div>
    </v-card>
</template>