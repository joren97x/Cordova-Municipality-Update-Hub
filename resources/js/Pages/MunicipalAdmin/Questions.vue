<script setup>

    import {ref} from 'vue'
    import MunicipalAdminLayout from '../Layouts/MunicipalAdminLayout.vue';
    defineOptions({
        layout: MunicipalAdminLayout
    })
    const answer = ref('')

</script>
<template>
    <v-row class="ma-3">
    <p class="text-h4 ma-1">Questions</p>
        <v-col cols="12" v-for="n in 4" :key="n">
            <v-card>
                <v-card-item>
                    <v-list-item 
                    prepend-avatar="https://m.media-amazon.com/images/M/MV5BMzcyOTM2NDA5OF5BMl5BanBnXkFtZTgwMTYzMTQzNzM@._V1_.jpg"
                    title="Hev Abi"
                    subtitle="hev@abi.com"
                    >
                    <template v-slot:append>
                        <v-btn variant="text" color="red">
                            Remove
                        </v-btn>
                    </template>
                    </v-list-item>
                    <v-textarea label="Question" active readonly value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni consequatur expedita nihil dicta amet maiores!">
                    </v-textarea>
                    <v-text-field label="Your answer..." clearable v-model="answer">
                        <template v-slot:append-inner>
                            <v-fade-transition>
                                <v-btn v-if="answer" color="blue" append-icon="mdi-send">Send</v-btn>
                            </v-fade-transition>
                        </template>
                    </v-text-field>
                </v-card-item>
            </v-card>
        </v-col>
    </v-row>
</template>
