<script setup>

    import {ref} from 'vue'
    import MunicipalAdminLayout from '../Layouts/MunicipalAdminLayout.vue'
    import QuestionCard from './Partials/QuestionCard.vue'

    defineOptions({ layout: MunicipalAdminLayout })
    defineProps({ questions: Object, shared: Object, page_title: Object })

    const message = ref('')
    const snackbar = ref(false)
    function showSnackbar(msg) {
        message.value = msg
        snackbar.value = true
    }
   
</script>
<template>
    <v-row class="ma-3">
        <p class="text-h4 ma-1 text-capitalize"> {{ page_title }} Questions</p>
        <v-slide-x-transition group>
            <v-col cols="12" v-for="question in questions" :key="question.id">
                <QuestionCard :question="question" @questionDeleted="showSnackbar('Question deleted.')" @questionAnswered="showSnackbar('Answered succesfully')"  />
            </v-col>
        </v-slide-x-transition>
    </v-row>
    <p v-if="questions.length == 0" class="text-center">No questions found.</p>

    <v-snackbar v-model="snackbar">
        {{ message }}
    </v-snackbar>

</template>
