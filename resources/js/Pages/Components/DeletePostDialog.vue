<script setup>

    import { router } from "@inertiajs/vue3"
    import {ref} from 'vue'
    const props = defineProps({ deletePostDialog: Boolean, post:Object })
    const emit = defineEmits(['closeDeletePostDialog', 'postDeleted'])
    const loading = ref(false)

    function submitDeletePost() {
        loading.value = true
        router.delete(`/delete-post/${props.post.id}`, {
            onSuccess: () => {
                loading.value = false
                emit('postDeleted')
            }
        })
    }

</script>
<template>
    <v-dialog v-model="props.deletePostDialog" width="50%">
        <v-card title="Delete post">
            <v-card-text>
                Are you sure you want to delete this post?
            </v-card-text>
            <v-card-actions>
                <v-spacer/>
                <v-btn  @click="emit('closeDeletePostDialog')">Cancel</v-btn>
                <v-btn color="red" @click="submitDeletePost" :loading="loading">DELETE</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>