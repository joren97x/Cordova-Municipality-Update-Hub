<script setup>

    import {ref} from 'vue'
    import MunicipalAdminLayout from '../Layouts/MunicipalAdminLayout.vue'
    import CreatePostDialog from '../Components/CreatePostDialog.vue'
    import DeletePostDialog from '../Components/DeletePostDialog.vue'
    import EditPostDialog from '../Components/EditPostDialog.vue'
    import PostCard from '../Components/PostCard.vue'

    defineProps({ auth: Object, posts: Object })
    defineOptions({ layout: MunicipalAdminLayout })

    const showCreatePostDialog = ref(false)
    const showDeletePostDialog = ref(false)
    const showEditPostDialog = ref(false)
    const showSuccessSnackbar = ref(false)

</script>
<template>
    <v-container>
        <v-row class="ma-1">
            <p class="text-h4">Post management</p>
            <v-spacer/>
            <v-btn prepend-icon="mdi-plus" @click="showCreatePostDialog = true" color="green">New post</v-btn>
            <v-col cols="12" v-for="post in posts" :key="post.id">
                <PostCard :post="post" />
            </v-col>
        </v-row>
        <p v-if="posts.length <= 0" class="text-center"> No posts yet. </p>

        <CreatePostDialog :createPostDialog="showCreatePostDialog" @postSucess="() => {showCreatePostDialog = false; showSuccessSnackbar = true}" @closeCreatePostDialog="() => {showCreatePostDialog = false;}" :auth="auth" />
        <DeletePostDialog :deletePostDialog="showDeletePostDialog" @closeDeletePostDialog="showDeletePostDialog = false" />
        <EditPostDialog :editPostDialog="showEditPostDialog" @closeEditPostDialog="showEditPostDialog = false" />
        <!-- <v-dialog v-model="deletePostDialog" width="50%">
            <v-card title="Delete post">
                <v-card-text>
                    Are you sure you want to delete this post?
                </v-card-text>
                <v-card-actions>
                    <v-spacer/>
                    <v-btn  @click="deletePostDialog = false">Cancel</v-btn>
                    <v-btn color="red" @click="deletePostDialog = false">DELETE</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog> -->
        <v-snackbar v-model="showSuccessSnackbar" location="top" timeout="2500">
            Post posted successfully.
        </v-snackbar>
    </v-container>
</template>
