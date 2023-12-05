<script setup>
    import Layout from "../Layouts/UserLayout.vue"
    import { useForm } from "@inertiajs/vue3"

    defineOptions({
        layout: Layout,
    })

    const Loginform = useForm({
        email: "",
        password: "",
    })
</script>

<template>
    <v-container class="justify-center d-flex">
        <v-card width="50%" elevation="0">
            <div class="logo-container">
                <v-img src="../fakelogo.jpg" cover width="180"></v-img>
            </div>
            <p class="text-center text-h4">Sign in</p>
            <p class="text-center text-red my-2">FOR CORDOVA WEB PORTAL STAFF ONLY</p>
            <v-card-item>
                <v-form @submit.prevent="Loginform">
                    <v-text-field
                        label="Email"
                        variant="outlined"
                        clearable
                        class="mt-2"
                        color="red"
                        prepend-inner-icon="mdi-account"
                        v-model="Loginform.email"
                        :error-messages="Loginform.errors.email">
                    </v-text-field>
                    <v-text-field
                        label="Password"
                        variant="outlined"
                        clearable
                        color="red"
                        type="password"
                        prepend-inner-icon="mdi-lock"
                        v-model="Loginform.password"
                        :error-messages="Loginform.errors.password">
                    </v-text-field>
                    
                    <v-btn
                        color="red"
                        block
                        :loading="Loginform.processing"
                        :disabled="Loginform.processing"
                        class="login-button"
                        @click="Loginform.post('/signin')"
                        type="submit">
                    Login
                    </v-btn>
                </v-form>
                <Link href="/forgot-password">
                    <p class="text-end my-3" @click="forgotPassword">
                        Forgot Password</p>
                </Link>
            </v-card-item>
        </v-card>
    </v-container>
</template>

<style scoped>
 a{
    text-decoration: none;
 }

 a:hover {
    text-decoration: underline;
 }

</style>