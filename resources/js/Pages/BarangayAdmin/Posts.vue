<script setup>

    import {ref} from 'vue'
    import BarangayAdminLayout from '../Layouts/BarangayAdminLayout.vue'
    import PostCard from '../Components/PostCard.vue'
    import CreatePostDialog from '../Components/CreatePostDialog.vue';

    const showCreatePostDialog = ref(false)
    const successSnackbar = ref(false)
    defineOptions({ layout: BarangayAdminLayout })
    defineProps({auth: Object, posts: Object})
    
</script>
<template>
    <v-container>
       
        <v-row class="ma-1">
            <p class="text-h4">Posts</p>
            <v-spacer></v-spacer>
            <v-btn prepend-icon="mdi-plus" @click="showCreatePostDialog = true" color="green">New post</v-btn>
        </v-row>

        <v-row v-if="posts.length > 0">
            <v-col cols="12" v-for="post in posts" :key="post" >
                <PostCard :post="post" :auth="auth" />
            </v-col>
        </v-row>

        <p v-else class="text-center fill-height align-self-center"> No posts found. </p>
    
        <CreatePostDialog :createPostDialog="showCreatePostDialog" @showSuccessSnackbar="() => { successSnackbar = true; showCreatePostDialog = false }" @closeCreatePostDialog="showCreatePostDialog = false" :auth="auth" />
        <v-snackbar v-model="successSnackbar" location="top" color="green">
            Post successful! Please wait for approval.
        </v-snackbar>
    </v-container>
</template>
