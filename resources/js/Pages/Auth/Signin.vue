<script setup>
import Layout from "../Layouts/UserLayout.vue";
defineOptions({
  layout: Layout,
});

import { useForm } from "@inertiajs/vue3";

const Loginform = useForm({
  email: "",
  password: "",
});
</script>

<template>
  <v-row class="my-6">
    <v-card width="100%" class="text-center" elevation="0">
      <v-card-item>
        <div class="logo-container">
          <v-img src="../fakelogo.jpg" cover width="250"></v-img>
        </div>
      </v-card-item>
    </v-card>
    <v-card width="100%" elevation="0">
      <v-card-title class="text-center text-h3">Sign in</v-card-title>
      <v-card-item>
        <v-text-field
          label="Email"
          variant="outlined"
          clearable
          class="mt-2 input-field"
          prepend-inner-icon="mdi-account"
          v-model="Loginform.email"
          :error-messages="Loginform.errors.email"
        >
        </v-text-field>
        <v-text-field
          label="Password"
          variant="outlined"
          clearable
          class="input-field"
          prepend-inner-icon="mdi-lock"
          v-model="Loginform.password"
          :error-messages="Loginform.errors.password"
        >
        </v-text-field>
        <Link href="/forgot-password">
          <span class="forgot-password-link" @click="forgotPassword">Forgot Password</span>
        </Link>
        <v-btn
          id="login-button"
          color="pink"
          class="login-button"
          @click="Loginform.post('/signin')"
          type="submit"
          >Login</v-btn
        >
        <p class="text-red mt-5 text-center" style="margin-bottom: 3.5%;">FOR CORDOVA WEB PORTAL STAFF ONLY</p>
      </v-card-item>
    </v-card>
  </v-row>
</template>

<style scoped>
.logo-container {
  display: flex;
  flex-direction: column;
  align-items: center;
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

.forgot-password-link {
  margin-left: 55%;
}

.forgot-password-link {
  cursor: pointer;
  color: primary;
  transition: color 0.3s;
}
.forgot-password-link:hover {
  color: red;
}
</style>
