<script setup>

    import {ref} from 'vue'    
    const props = defineProps({createPostDialog: Boolean, auth: Object})
    const emit = defineEmits('closeCreatePostDialog', 'showSuccessSnackbar')
    import {useForm} from '@inertiajs/vue3'
    const inline = ref()

    const postForm = useForm({
        banner: null,
        title: null,
        category: null,
        description: null,
        area_type: null
    })

    function submit() {
        postForm.post('/create-post', {
            onSuccess: () => {
                emit('closeCreatePostDialog')
            }
            
        })
    }

</script>
<template>
    <v-dialog v-model="props.createPostDialog" width="80%">
        <v-form>
            <v-card title="Create post">
                <v-card-text>
                    <v-file-input label="Banner" color="red" :error-messages="postForm.errors.banner" v-model="postForm.banner"></v-file-input>
                    <v-text-field label="Post title" color="red" :error-messages="postForm.errors.title" v-model="postForm.title"></v-text-field>
                    <v-row>
                        <v-col cols="4">
                            <v-radio-group :error-messages="postForm.errors.area_type" v-model="postForm.area_type" inline label="Where to post" color="red">
                                <v-radio :error="postForm.errors.area_type" label="Municipality" value="municipal"></v-radio>
                                <v-radio :error="postForm.errors.area_type" label="Current barangay" value="current-barangay" v-if="auth.user.role == 'barangay_admin'"></v-radio>
                            </v-radio-group>
                        </v-col>
                        <v-col cols="8">
                            <v-select color="red" v-model="postForm.category" :error-messages="postForm.errors.category" :items="['Local news', 'Events', 'Sports', 'Health and wellness']" label="Category"></v-select>
                        </v-col>
                    </v-row>
                    <v-textarea color="red" v-model="postForm.description" :error-messages="postForm.errors.description" label="Description"></v-textarea>
                </v-card-text>
                <v-card-actions>
                    <v-spacer/>
                    <v-btn @click="emit('closeCreatePostDialog')">Cancel</v-btn>
                    <v-btn color="green" @click="submit" :loading="postForm.processing" >Fordago</v-btn>
                </v-card-actions>
            </v-card>
        </v-form>
    </v-dialog>
</template>