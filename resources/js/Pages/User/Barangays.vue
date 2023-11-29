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
      <v-col cols="3" v-for="(brgy, index) in barangays" :key="brgy">
        <Link :href="`/barangay/${brgy.id}`">
          <transition name="fade" mode="out-in">
            <v-card key="brgy" class="animated-card">
              <v-img
                :src="`../images/${brgy.image}`"
                class="align-end"
                gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                height="200px"
                cover
              >
                <v-card-title class="text-white text-center">{{
                  brgy.name
                }}</v-card-title>
              </v-img>
            </v-card>
          </transition>
        </Link>
      </v-col>
    </v-row>
  </v-container>
</template>

<style scoped>
.animated-card {
  border: 1px solid #ccc;
  border-radius: 5px;
  transition: box-shadow 0.3s;
}

.animated-card:hover,
.animated-card:hover v-img {
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
a {
  text-decoration: none;
}
</style>
