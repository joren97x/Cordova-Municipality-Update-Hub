<script setup>
import Layout from "../Layouts/UserLayout.vue";
defineOptions({
  layout: Layout,
});
defineProps({
  barangay: Object,
  SKofficials: Object,
  BOofficials: Object,
});
</script>
<template>
    <v-card width="100%" class="text-center" elevation="0">
        <v-card-item>
          <div class="logo-container">
            <v-img src="../forgotpassword-logo.png" cover width="250"></v-img>
          </div>
        </v-card-item>
      </v-card>
      <v-card width="100%" elevation="0">
        <v-card-title class="text-center text-h3 mt-5">Reset Password</v-card-title>
        <v-card-item>
          <v-text-field
            label="Email"
            variant="outlined"
            clearable
            class="mt-2 input-field"
            prepend-inner-icon="mdi-account"
          >
          </v-text-field>
          <v-btn
            id="login-button"
            color="pink"
            class="login-button"
            >Reset</v-btn
          >
          <p class="text-red mt-12 text-center" style="margin-bottom: 5%;">FOR CORDOVA WEB PORTAL STAFF ONLY</p>
        </v-card-item>
      </v-card>
</template>

<style>
.logo-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 5%;
  }

  .logo {
    font-size: 24px;
    font-weight: bold;
    margin-top: 10px;
  }

  .sign-in {
    font-size: 18px;
  }

  .input-field {
    max-width: 500px;
    margin: 0 auto;
  }

  #login-button {
    display: flex;
    justify-content: center;
    width: 15%;
    margin: 0 auto;
    margin-top: 1%;
    border-radius: 600px;
    margin-bottom: 2.1%;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
  }

  #login-button:hover {
    background-color: red;
    color: white;
  }

</style>
