<script setup>
import Layout from "../Layouts/UserLayout.vue";
defineOptions({
  layout: Layout,
});

defineProps({
  barangays: Object,
});
</script>


<template>
  <v-container fluid fill-height>
    <v-row align="center" justify="center">
        <v-col cols="4" v-for="brgy in barangays" :key="brgy">
            <Link :href="`/barangay/${brgy.id}`">
                <v-hover v-slot="{ isHovering, props }" open-delay="200">
                    <v-card key="brgy" class="animated-card" v-bind="props" :elevation="isHovering ? 16: 0">
                        <v-img
                            :src="`../images/${brgy.image}`"
                            class="align-end"
                            gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                            height="200px"
                            cover
                        >
                            <v-card-title class="text-white text-center text-h5">
                                {{ brgy.name }}
                            </v-card-title>
                    </v-img>
                    </v-card>
                </v-hover>
            </Link>
        </v-col>
    </v-row>
  </v-container>
</template>

<style scoped>

    a {
        text-decoration: none;
    }

</style>
