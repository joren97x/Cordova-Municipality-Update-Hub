<script setup>

    import BarangayAdminLayout from '../../Layouts/BarangayAdminLayout.vue'
    import PostCard from '../../Components/PostCard.vue'
    defineOptions({ layout: BarangayAdminLayout })
    defineProps({ posts: Object })

</script>

<template>
    <v-container>
        <v-row class="ma-1">
            <p class="text-h4">Events</p>
        </v-row>
        <v-row v-if="posts.length > 0">
            <v-col cols="12" v-for="post in posts" :key="post" >
                <PostCard :post="post" :auth="auth" />
            </v-col>
        </v-row>
        <p v-else class="text-center fill-height align-self-center"> No posts found. </p>
    </v-container>
</template>