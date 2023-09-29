<script setup>

    import Layout from '../Layouts/UserLayout.vue';
    defineOptions({
        layout: Layout
    })

</script>
<template>
    <v-row class="my-6">
        <v-card width="48%" class="text-center" elevation="0">
            <v-card-item>
                <v-img src="../fakelogo-transformed.jpeg" cover width="250"></v-img>
                <p class="text-h4">ganahan nako ma tug</p>
            </v-card-item>
        </v-card>
        <v-card  width="50%" elevation="0">
            <v-card-title class="text-center text-h5">Sign in</v-card-title>
            <v-card-item>
                <v-text-field label="Username" variant="outlined" clearable class="mt-2"></v-text-field>
                <v-text-field label="Password" variant="outlined" clearable></v-text-field>
                <!-- <v-checkbox label="Remember me"></v-checkbox> -->
                <v-btn block color="pink">Login</v-btn>
                <p class="text-red mt-3 text-center">FOR CORDOVA WEB PORTAL STAFF ONLY</p>
            </v-card-item>
        </v-card>
    </v-row>
</template>