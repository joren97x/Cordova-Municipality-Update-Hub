<script setup>

    import {useForm} from '@inertiajs/vue3'
    import {ref} from 'vue'
    import { format } from 'date-fns';

    defineProps({question: Object})
    // const emit = defineEmits(['questionDeleted', 'questionAnswered'])
    const emit = defineEmits(['questionDeleted', 'questionAnswered'])
    
    const deleteQuestionDialog = ref(false)
    const answerQuestionForm = useForm({
        answer: null
    })

    const deleteQuestionForm = useForm({
        id: null
    })

    function submitDeleteQuestionForm(id) {
        deleteQuestionForm.delete(`/municipal-admin/delete-question/${id}`, { 
            onSuccess: () => { 
                deleteQuestionDialog.value = false
                emit('questionDeleted') 
            },
            preserveScroll: true,   
        })
    }

    function submitAnswerQuestionForm(id) {
        answerQuestionForm.post(`/municipal-admin/answer-question/${id}`, { 
            onSuccess: () => { 
                deleteQuestionDialog.value = false
                emit('questionAnswered') 
            },
            preserveScroll: true,   
        })
    }


</script>

<template>
    <v-card>
        <v-card-item>
            <v-list-item 
            prepend-avatar="https://m.media-amazon.com/images/M/MV5BMzcyOTM2NDA5OF5BMl5BanBnXkFtZTgwMTYzMTQzNzM@._V1_.jpg"
            :title="question.name"
            :subtitle="question.email"
            class="mb-2"
            >
            <template v-slot:title>
                <p class="font-weight-bold"> {{ question.name }} 
                    <span class="font-weight-thin text-medium-emphasis text-caption">
                        <v-icon>mdi-circle-small</v-icon> 
                        {{ format(new Date(question.created_at), 'PPPP') }} 
                    </span> 
                </p> 
            </template>
            <template v-slot:append>
                <v-btn variant="text" color="red" prepend-icon="mdi-close" @click="deleteQuestionDialog = true">
                    Remove
                </v-btn>
            </template>
            </v-list-item>

            <v-textarea label="Question" active readonly :value="question.question">
            </v-textarea>

            <v-form @submit.prevent>
                <v-text-field label="Your answer..." v-model="answerQuestionForm.answer" clearable :loading="answerQuestionForm.processing">
                    <template v-slot:append-inner>
                        <v-fade-transition>
                            <v-btn type="submit" @click="submitAnswerQuestionForm(question.id)" :loading="answerQuestionForm.processing" variant="text" v-if="answerQuestionForm.answer" color="blue" icon="mdi-send"></v-btn>
                        </v-fade-transition>
                    </template>
                </v-text-field>
            </v-form>

        </v-card-item>
    </v-card>

    <v-dialog v-model="deleteQuestionDialog" width="50%">
        <v-card title="Are you sure you want to delete this question?">
            
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn @click="deleteQuestionDialog = false">Cancel</v-btn>
                <v-btn color="red" :loading="deleteQuestionForm.processing" @click="submitDeleteQuestionForm(question.id)" >Delete</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>

</template>