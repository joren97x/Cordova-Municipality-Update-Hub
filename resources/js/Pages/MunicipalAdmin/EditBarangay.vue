<script setup>

    import {ref} from 'vue'
    import { useForm } from "@inertiajs/vue3";

    import MunicipalAdminLayout from "../Layouts/MunicipalAdminLayout.vue";
    defineOptions({
        layout: MunicipalAdminLayout
    })
    const {barangay} = defineProps({barangay: Object})
    const editable = ref(true)
    const updateBarangayForm = useForm({
        name: barangay.name,
        about: barangay.about,
        mission: barangay.mission,
        vision: barangay.vision,
        feast: barangay.feast,
        // image: barangay.image
    })

</script>
<template>

    <v-btn class="mb-5"  @click="editable = !editable" :prepend-icon="editable ? 'mdi-close' : 'mdi-pencil'" style="margin-top: 5%; margin-left:5%">Edit</v-btn>
    <div v-if="editable">
        <v-container class="w-75">
            <v-text-field label="Name" append-inner-icon="mdi-rename-box" v-model="updateBarangayForm.name"></v-text-field>
            <v-textarea label="About" append-inner-icon="mdi-rename-box" v-model="updateBarangayForm.about"></v-textarea>
            <v-textarea label="Mission" append-inner-icon="mdi-rename-box" v-model="updateBarangayForm.mission"></v-textarea>
            <v-textarea label="Vission" append-inner-icon="mdi-rename-box" v-model="updateBarangayForm.vision"></v-textarea>
            <v-textarea label="Feast" append-inner-icon="mdi-rename-box" v-model="updateBarangayForm.feast"></v-textarea>            <!-- <v-file-input label="File input" ></v-file-input> -->
            <v-btn class="" color="blue" :loading="updateBarangayForm.processing" @click="updateBarangayForm.post(`/municipal-admin/update-barangay/${barangay.id}`)">Update</v-btn>
        </v-container>
    </div>
</template>

<style>

</style>
