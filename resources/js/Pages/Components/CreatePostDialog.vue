<script setup>

    import {ref} from 'vue'    
    const props = defineProps({createPostDialog: Boolean})
    const emit = defineEmits('closeCreatePostDialog', 'showSuccessSnackbar')

    const inline = ref()

</script>
<template>
    <v-dialog v-model="props.createPostDialog" width="80%">
        <v-card title="Create post">
            <v-card-text>
                <v-file-input label="Banner" color="red"></v-file-input>
                <v-text-field label="Post title" color="red"></v-text-field>
                <v-row>
                    <v-col cols="4">
                        <v-radio-group v-model="inline" inline label="Where to post" color="red">
                            <v-radio label="Municipality" value="radio-1"></v-radio>
                            <v-radio label="Current barangay" value="radio-2"></v-radio>
                        </v-radio-group>
                    </v-col>
                    <v-col cols="8">
                        <v-select color="red" :items="['Local news', 'Events', 'Sports', 'Health and wellness']" label="Category"></v-select>
                    </v-col>
                </v-row>
                <v-textarea color="red" label="Description"></v-textarea>
            </v-card-text>
            <v-card-actions>
                <v-spacer/>
                <v-btn color="red" @click="emit('closeCreatePostDialog')">Cancel</v-btn>
                <v-btn @click="emit('showSuccessSnackbar')">Fordago</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>