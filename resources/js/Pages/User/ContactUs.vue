<script setup>

    defineOptions({ layout: Layout })
    import Layout from "../Layouts/UserLayout.vue"
    import { useForm } from "@inertiajs/vue3"
    import {ref} from 'vue'

    const snackbar = ref(false)
    const questionForm = useForm({
        name: null,
        email: null,
        contact_no: null,
        question: null
    })

    function submitQuestionForm() {
        questionForm.post('/create-question', {
            onSuccess: () => {
                snackbar.value = true
                questionForm.reset()
            }
        })
    }

</script>

<template>

    <v-container>
        <v-card class="pa-5">
           <v-form @submit.prevent>
                <v-row>
                    <v-col cols="6" class="text-start fill-height" style="margin: auto">
                        <p class="text-h4">Contact Us</p>
                        <p>
                        Poblacion, Cordova Cebu Philippines <br />
                        Telephone: 123-456-789 <br />
                        Fax No: 123-56-123 <br />
                        Email Address: cordova.cebu@gmail.com <br />
                        </p>
                    </v-col>
                    <v-col cols="6">
                        <v-card title="Ask us question" elevation="0" class="pa-2">
                            <v-text-field prepend-inner-icon="mdi-account" :error-messages="questionForm.errors.name" v-model="questionForm.name" label="Name"></v-text-field>
                            <v-text-field prepend-inner-icon="mdi-email" v-model="questionForm.email" label="Email (optional)"></v-text-field>
                            <v-text-field prepend-inner-icon="mdi-phone" v-model="questionForm.contact_no" label="Contact number (optional)"></v-text-field>
                            <v-textarea prepend-inner-icon="mdi-message" :error-messages="questionForm.errors.question" v-model="questionForm.question" label="Your question..."></v-textarea>
                        </v-card>
                    </v-col>
                </v-row>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn type="submit" :loading="questionForm.processing" @click="submitQuestionForm" >Send</v-btn>
                </v-card-actions>
           </v-form>
        </v-card>
    </v-container>

    <v-snackbar v-model="snackbar" location="top">
        Sucessfully submitted a question.
    </v-snackbar>

  </template>