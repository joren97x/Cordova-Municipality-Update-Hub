<script setup>

    import {format} from 'date-fns'
    const props = defineProps({ post: Object, auth: Object })
    console.log(props)
</script>
<template>

    <v-card>
        <v-img :src="`/images/banner/${post.banner}`" height="210" cover></v-img>
        <v-card-title>
            {{ post.title }} <v-chip color="red" v-if="post.status == 'pending'" prepend-icon="mdi-alert-circle">Pending</v-chip>
        </v-card-title>
        <v-card-subtitle>
            <v-icon>mdi-circle-medium</v-icon>
            {{ format(new Date(post.created_at), 'PPPP') }}
            <v-icon>mdi-circle-medium</v-icon>
            {{ post.category }}
        </v-card-subtitle>
        <v-card-text>
            {{ post.description }}
        </v-card-text>
        <v-card-actions v-if="post.status == 'pending' && auth.user.role == 'barangay_admin'">
            <v-spacer/>
            <v-btn color="blue">Edit</v-btn>
            <v-btn color="red">Delete</v-btn>
        </v-card-actions>
        <v-card-actions v-if="post.status == 'pending' && auth.user.role == 'municipal_admin'">
            <v-spacer/>
            <v-btn color="red">Decline</v-btn>
            <v-btn color="green">Approve</v-btn>
        </v-card-actions>
    </v-card>
    
</template>