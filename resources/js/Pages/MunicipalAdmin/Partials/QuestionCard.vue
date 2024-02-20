<script setup>

    import { useForm } from '@inertiajs/vue3'
    import { ref } from 'vue'
    import { format } from 'date-fns'
    import emailjs from '@emailjs/browser'

    const props = defineProps({question: Object})
    const emit = defineEmits(['questionDeleted', 'questionAnswered', 'questionFeatured', 'answerUpdated'])
    
    const deleteQuestionDialog = ref(false)
    const featureQuestionDialog = ref(false)
    const editAnswer = ref(false)
    const answerQuestionForm = useForm({ answer: props.question.answer })
    const deleteQuestionForm = useForm({})
    const featureQuestionForm = useForm({ status: props.question.status })
    const updateQuestionAnswerForm = useForm({ answer: props.question.answer })

    function submitFeatureQuestionForm(id, status) {
        featureQuestionForm.put(`/municipal-admin/feature-question/${id}`, { 
            onStart: () => {
                featureQuestionDialog.value = false
                emit('questionFeatured', status)
            },
            preserveScroll: true,   
        })
    }

    function submitDeleteQuestionForm(id) {
        deleteQuestionForm.delete(`/municipal-admin/delete-question/${id}`, { 
            onStart: () => {
                deleteQuestionDialog.value = false
                emit('questionDeleted', 'Question deleted')
            },
            preserveScroll: true,   
        })
    }

    function submitAnswerQuestionForm(question) {
        console.log(question)
        answerQuestionForm.put(`/municipal-admin/answer-question/${question.id}`, { 
            onStart: () => {
                deleteQuestionDialog.value = false
                emit('questionAnswered', 'Successfully answered question and reply sent to user via email')
                emailjs.send('service_950dhig', 'template_xzp03ja', {
                    sendername: `Municipal admin`,
                    to: question.email,
                    subject: "The answer to your question",
                    replyto: `Municipal admin`,
                    message: `Dear ${question.name},
                        Your question:
                            ${question.question}
                        Answer:
                            ${answerQuestionForm.answer}
                    `
                }, 'eEt-YCYeYc0LoTRxJ').then(
                    (response) => {
                        console.log('SUCCESS!', response.status, response.text)
                    },
                    (error) => {
                        console.log('FAILED...', error)
                    },
                )
            },
            preserveScroll: true,   
        })
    }

    function submitUpdateAnswerQuestionForm(id) {
        updateQuestionAnswerForm.put(`/municipal-admin/update-answer/${id}`, { 
            onStart: () => {
            },
            onSuccess: () => {
                emit('answerUpdated', 'Answer successfully updated')
                editAnswer.value = false
            },
            preserveScroll: true,   
        })
    }



</script>

<template>
    <v-card>
        <v-card-item>
            <v-list-item 
            prepend-avatar="https://www.postendekker.nl/wp-content/uploads/2021/10/dummy-profile.jpg"
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
                <v-tooltip text="Delete question" location="bottom">
                    <template v-slot:activator="{ props }">
                        <v-btn v-bind="props" icon="mdi-delete-empty-outline" @click="deleteQuestionDialog = true" variant="text" color="red"></v-btn>
                    </template>
                </v-tooltip>
                <v-tooltip :text="editAnswer ? 'Cancel' : 'Edit answer'" location="bottom">
                    <template v-slot:activator="{ props }">
                        <v-btn v-bind="props" :icon="editAnswer ? 'mdi-close-box-outline': 'mdi-square-edit-outline'" @click="editAnswer = !editAnswer" variant="text" color="blue" v-show="question.status !== 'unanswered'"></v-btn>
                    </template>
                </v-tooltip>
                <v-tooltip text="Feature question" location="bottom">
                    <template v-slot:activator="{ props }">
                        <v-btn v-bind="props" :icon="question.status == 'featured' ? 'mdi-star-off-outline' : 'mdi-star-outline'" @click="featureQuestionDialog = true" variant="text" color="orange" v-show="question.status !== 'unanswered'"></v-btn>
                    </template>
                </v-tooltip>
            </template>
            </v-list-item>
            {{ question.question }}
            <v-divider class="my-4" />
            <v-form @submit.prevent>
                <v-textarea rows="1" v-if="question.status == 'unanswered'" :error-messages="answerQuestionForm.errors.answer" label="Your answer..." v-model="answerQuestionForm.answer" :clearable="question.status == 'unanswered'" :loading="answerQuestionForm.processing">
                    <template v-slot:append-inner>
                        <v-fade-transition>
                            <v-btn type="submit" @click="submitAnswerQuestionForm(question)" :loading="answerQuestionForm.processing" variant="text" color="blue" icon="mdi-send"></v-btn>
                        </v-fade-transition>
                    </template>
                </v-textarea>
                <v-textarea v-else rows="1" :error-messages="updateQuestionAnswerForm.errors.answer" auto-grow label="Your answer..." :readonly="!editAnswer" v-model="updateQuestionAnswerForm.answer" :clearable="question.status == 'unanswered'" :loading="updateQuestionAnswerForm.processing">
                    <template v-slot:append-inner>
                        <v-fade-transition>
                            <v-btn type="submit" @click="submitUpdateAnswerQuestionForm(question.id)" :loading="updateQuestionAnswerForm.processing" variant="text" v-if="editAnswer" color="blue" icon="mdi-send"></v-btn>
                        </v-fade-transition>
                    </template>
                </v-textarea>
            </v-form>

        </v-card-item>
    </v-card>

    <v-dialog v-model="deleteQuestionDialog" width="50%">
        <v-card title="Delete question">
            <v-card-item>
                <v-alert icon="mdi-alert" color="red-lighten-1" class="text-white">
                    Are you sure you want to delete this question? It cannot be undone.
                </v-alert>

            </v-card-item>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn @click="deleteQuestionDialog = false">Cancel</v-btn>
                <v-btn color="red" :loading="deleteQuestionForm.processing" @click="submitDeleteQuestionForm(question.id)" >Delete</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>

    <v-dialog v-model="featureQuestionDialog" width="50%">
        <v-card :title="question.status == 'featured' ? 'Unfeature question' : 'Feature question'">
            <v-card-item>
                <v-alert icon="mdi-star" color="orange-lighten-2" class="text-white">
                    Yo, do you want to {{ question.status == 'featured' ? 'unfeature' : 'feature' }} this question?
                </v-alert>
            </v-card-item>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn @click="featureQuestionDialog = false">Cancel</v-btn>
                <v-btn color="blue" :loading="featureQuestionForm.processing" @click="submitFeatureQuestionForm(question.id, question.status == 'featured' ? 'Question has been unfeatured' : 'Question set to featured')" >
                    {{ question.status == 'featured' ? 'UNFEATURE' : 'feature' }}
                </v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>

    <v-snackbar v-model="snackbar">
        {{ message }}
    </v-snackbar>

</template>