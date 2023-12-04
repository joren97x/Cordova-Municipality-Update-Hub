<script setup>

    import BarangayAdminLayout from '../Layouts/BarangayAdminLayout.vue'
    import PostCard from '../Components/PostCard.vue'
    defineOptions({
        layout: BarangayAdminLayout
    })
    
</script>
<template>
    <v-container>
       
        <v-row class="ma-1">
            <p class="text-h4">Posts</p>
            <v-spacer></v-spacer>
            <v-btn prepend-icon="mdi-plus" color="green">New post</v-btn>
        </v-row>

        <v-row>
            <v-col cols="12">
                <PostCard v-for="n in 4" :key="n" ></PostCard>
            </v-col>
        </v-row>
    
    </v-container>
</template>
