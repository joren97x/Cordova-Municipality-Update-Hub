<script setup>

    import {ref} from 'vue'
    import BarangayAdminLayout from '../Layouts/BarangayAdminLayout.vue'
    import DeletePostDialog from '../Components/DeletePostDialog.vue'
    import EditPostDialog from '../Components/EditPostDialog.vue'
    import PostCard from '../Components/PostCard.vue'

    const deletePostDialog = ref(false)
    const editPostDialog = ref(false)
    const selectedPost = ref(null)
    const msg = ref('')
    const snackbar = ref(false)
    defineOptions({ layout: BarangayAdminLayout })
    defineProps({ posts: Object, auth: Object })

    function showEditPostDialog(post) {
        selectedPost.value = post
        editPostDialog.value = true
    }
    
    function showDeletePostDialog(post) {
        selectedPost.value = post
        deletePostDialog.value = true
    }

    function onPostDeleted() {
        msg.value = "Post deleted successfully"
        snackbar.value = true
        deletePostDialog.value = false
    }
    
</script>
<template>
    <v-container>
        <p class="text-h4">Pending posts</p>
        <v-row class="my-2">
            <v-col cols="12" v-for="post in posts" :key="post.id">
                <PostCard :post="post" :auth="auth" @showDeletePostDialog="showDeletePostDialog(post)" @showEditPostDialog="showEditPostDialog(post)" />
            </v-col>

        </v-row>
        <p v-if="posts.length == 0" class="text-center">No pending posts found.</p>

        <DeletePostDialog @postDeleted="onPostDeleted" @closeDeletePostDialog="deletePostDialog = false" :deletePostDialog="deletePostDialog" :post="selectedPost" />
        <EditPostDialog @closeEditPostDialog="editPostDialog = false" :editPostDialog="editPostDialog"  :post="selectedPost" />
    </v-container>

    <v-snackbar v-model="snackbar" location="top">
        {{ msg }}
    </v-snackbar>

</template>
