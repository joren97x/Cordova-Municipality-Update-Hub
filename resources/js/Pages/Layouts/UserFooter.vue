<script setup>

    import { useForm } from '@inertiajs/vue3'
    import {ref} from 'vue'
    const snackbar = ref(false)
    const emailForm = useForm({
        email: null
    })
    const icons = [
        'mdi-facebook',
        'mdi-twitter',
        'mdi-linkedin',
        'mdi-instagram',
    ]

    function submit() {
        emailForm.post("/email-notify", {
            onSuccess: () => {
                snackbar.value = true
                emailForm.reset()
            },
            preserveScroll: true
        })
    }

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
            <v-col cols="8">
                <v-form @submit.prevent>
                    <v-text-field v-model="emailForm.email" :error-messages="emailForm.errors.email" color="red" variant="outlined" label="Email address">
                        <template v-slot:append-inner>
                            <v-fade-transition>
                                <v-btn icon="mdi-send" type="submit" :loading="emailForm.processing" @click="submit" v-show="emailForm.email" variant="text"></v-btn>
                            </v-fade-transition>
                        </template>
                    </v-text-field>
                </v-form>
            </v-col>
        </v-row>
        <div class="px-4 py-2  text-center w-100">
           <strong>Copyright {{ new Date().getFullYear() }} - All Rights Reserved | Municipality of Cordova</strong>
        </div>
    </v-card>
    <v-snackbar v-model="snackbar">
        You will get notified.
    </v-snackbar>
</template>