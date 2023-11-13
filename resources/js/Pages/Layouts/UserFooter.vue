<script setup>
import { ref } from "vue";
const email = ref("");
</script>
<template>
  <footer class="text-center justify-center d-flex border">
    <v-card elevation="0" width="50%">
      <p class="text-h5 font-weight-bold">DON'T MISS A MOMENT!</p>
      <p>Sign up to receive lastest update</p>
      <v-text-field
        label="Email address"
        v-model="email"
        color="pink"
        variant="outlined"
        placeholder="example@email.com"
      >
        <template v-slot:append-inner>
          <v-expand-transition>
            <v-btn append-icon="mdi-bell" class="rounded-pill" color="pink" v-if="email"
              >Notify me</v-btn
            >
          </v-expand-transition>
        </template>
      </v-text-field>
    </v-card>
  </footer>
</template>
