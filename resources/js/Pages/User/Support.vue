<script setup>

    import Layout from "../Layouts/UserLayout.vue"
    import {ref} from 'vue'
    defineOptions({ layout: Layout })
    defineProps({ questions: Object })

    const panels = ref([])

</script>
<template>
    <v-container style="margin-top: 1%;">
        <p class="text-h4 text-center my-3">Frequently Asked Questions</p>
        <v-expansion-panels v-model="panels" multiple>
            <v-expansion-panel v-for="question in questions" :key="question.title" :value="question.id">
                <v-expansion-panel-title expand-icon="mdi-plus" collapse-icon="mdi-minus">
                    {{ question.question }}
                </v-expansion-panel-title>
                <v-expansion-panel-text>
                    {{ question.answer }}
                </v-expansion-panel-text>
            </v-expansion-panel>
        </v-expansion-panels>
        <div class="text-center my-6">
            <p class="text-h5">Hey, do you have any questions?</p>
            <Link href="/contact-us">
                <v-btn class="my-2" color="red">
                    Ask a question
                </v-btn>
            </Link>
        </div>
    </v-container>
</template>

