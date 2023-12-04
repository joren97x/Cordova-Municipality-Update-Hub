<script setup>

    import {ref} from 'vue'
    import BarangayAdminLayout from '../Layouts/BarangayAdminLayout.vue'
    import PostCard from '../Components/PostCard.vue'
    import CreatePostDialog from '../Components/CreatePostDialog.vue';

    const showCreatePostDialog = ref(false)
    const successSnackbar = ref(false)
    defineOptions({
        layout: BarangayAdminLayout
    })
    
</script>
<template>
    <v-container>
       
        <v-row class="ma-1">
            <p class="text-h4">Posts</p>
            <v-spacer></v-spacer>
            <v-btn prepend-icon="mdi-plus" @click="showCreatePostDialog = true" color="green">New post</v-btn>
        </v-row>

        <v-row>
            <v-col cols="12">
                <PostCard v-for="n in 4" :key="n" ></PostCard>
            </v-col>
        </v-row>
    
        <CreatePostDialog :createPostDialog="showCreatePostDialog" @showSuccessSnackbar="() => { successSnackbar = true; showCreatePostDialog = false }" @closeCreatePostDialog="showCreatePostDialog = false" />
        <v-snackbar v-model="successSnackbar" location="top" color="green">
            Post successful! Please wait for approval.
        </v-snackbar>
    </v-container>
</template>
