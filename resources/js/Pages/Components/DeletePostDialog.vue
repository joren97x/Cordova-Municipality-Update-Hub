<script setup>

    const props = defineProps({deletePostDialog: Boolean})
    const emit = defineEmits('closeDeletePostDialog')

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
                <v-btn color="red" @click="emit('closeDeletePostDialog')">DELETE</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>