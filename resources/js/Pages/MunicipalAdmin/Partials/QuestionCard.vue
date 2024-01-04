<script setup>

    import {useForm} from '@inertiajs/vue3'
    import {ref} from 'vue'
    import { format } from 'date-fns';

    const props = defineProps({question: Object})
    const emit = defineEmits(['questionDeleted', 'questionAnswered', 'questionFeatured'])
    
    const deleteQuestionDialog = ref(false)
    const featureQuestionDialog = ref(false)
    const answerQuestionForm = useForm({ answer: props.question.answer })
    const deleteQuestionForm = useForm({})
    const featureQuestionForm = useForm({})
    const editAnswer = ref(false)

    function submitFeatureQuestionForm(id) {
        featureQuestionForm.put(`/municipal-admin/feature-question/${id}`, { 
            onSuccess: () => { 
                featureQuestionDialog.value = false
                emit('questionFeatured') 
            },
            preserveScroll: true,   
        })
    }

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
        answerQuestionForm.put(`/municipal-admin/answer-question/${id}`, { 
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

            <v-textarea label="Question" active readonly :value="question.question">
            </v-textarea>
            <v-form @submit.prevent>
                <v-text-field label="Your answer..." :readonly="question.status != 'unanswered'" v-model="answerQuestionForm.answer" clearable :loading="answerQuestionForm.processing">
                    <template v-slot:append-inner>
                        <v-fade-transition>
                            <v-btn type="submit" @click="submitAnswerQuestionForm(question.id)" :loading="answerQuestionForm.processing" variant="text" v-if="answerQuestionForm.answer || editAnswer" color="blue" icon="mdi-send"></v-btn>
                        </v-fade-transition>
                    </template>
                </v-text-field>
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
        <v-card title="Feature question">
            <v-card-item>
                <v-alert icon="mdi-star" color="orange-lighten-2" class="text-white">
                    Yo, do you want to feature this question?
                </v-alert>

            </v-card-item>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn @click="featureQuestionDialog = false">Cancel</v-btn>
                <v-btn color="blue" :loading="featureQuestionForm.processing" @click="submitFeatureQuestionForm(question.id)" >Feature</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>

</template>