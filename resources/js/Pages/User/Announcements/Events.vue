<script setup>

    import UserLayout from '../../Layouts/UserLayout.vue'
    import PostCard from '../../Components/PostCard.vue'
    defineOptions({ layout: UserLayout })
    defineProps({ posts: Object, barangay: String })
    
</script>
<template>
    <v-container class="my-6">
        <p class="text-h4">Barangay {{ barangay }} events</p>

        <PostCard v-for="post in posts" :post="post" :key="post.id" class="my-5" />

        <v-card color="grey" height="250" class="d-flex align-center justify-center my-6" v-if="posts.length == 0">
            <v-card-text class="text-center text-h5">
                <v-icon>mdi-alert-circle-outline</v-icon> No events found.
            </v-card-text>
        </v-card>

    </v-container>
</template>