<script setup>

    import {ref} from 'vue'
    import BarangayAdminLayout from '../Layouts/BarangayAdminLayout.vue'
    import DeletePostDialog from '../Components/DeletePostDialog.vue'
    import EditPostDialog from '../Components/EditPostDialog.vue'
    import PostCard from '../Components/PostCard.vue'
    import {format} from 'date-fns'

    const showDeletePostDialog = ref(false)
    const showEditPostDialog = ref(false)
    defineOptions({ layout: BarangayAdminLayout })
    defineProps({ posts: Object, auth: Object })
    
</script>
<template>
    <v-container>
        <p class="text-h4">Pending posts</p>
        <v-row class="my-2">
            <v-col cols="12" v-for="post in posts" :key="post.id">

                <PostCard :post="post" :auth="auth" />

            </v-col>
        </v-row>

        <DeletePostDialog @closeDeletePostDialog="showDeletePostDialog = false" :deletePostDialog="showDeletePostDialog" />
        <EditPostDialog @closeEditPostDialog="showEditPostDialog = false" :editPostDialog="showEditPostDialog" />
    </v-container>
</template>
