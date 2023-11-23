<script setup>
import MunicipalAdminLayout from "../Layouts/MunicipalAdminLayout.vue";
defineOptions({ layout: MunicipalAdminLayout });

defineProps({
  barangays: Object,
});
</script>

<template>
  <v-container>
    <v-container fluid fill-height>
        <v-row align="center" justify="center">
          <v-col cols="3" v-for="(brgy, index) in barangays" :key="brgy">
            <Link :href="`/barangay/edit-barangay/${brgy.id}`">
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
  </v-container>
</template>
