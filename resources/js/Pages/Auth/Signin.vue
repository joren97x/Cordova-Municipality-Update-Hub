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
                <v-img src="../fakelogo.jpg" cover width="250"></v-img>
            </div>
            <p class="text-center text-h3">Sign in</p>
            {{ Loginform }}
            <v-card-item>
                <v-text-field
                    label="Email"
                    variant="outlined"
                    clearable
                    class="mt-2"
                    prepend-inner-icon="mdi-account"
                    v-model="Loginform.email"
                    :error-messages="Loginform.errors.email">
                </v-text-field>
                <v-text-field
                    label="Password"
                    variant="outlined"
                    clearable
                    prepend-inner-icon="mdi-lock"
                    v-model="Loginform.password"
                    :error-messages="Loginform.errors.password">
                </v-text-field>
                
                <v-btn
                    color="pink"
                    block
                    class="login-button"
                    @click="Loginform.post('/signin')"
                    type="submit">
                Login
                </v-btn>
                <Link href="/forgot-password">
                    <p class="text-end" @click="forgotPassword">
                        <v-icon>mdi-close</v-icon>
                        Forgot Password</p>
                </Link>
                <p class="text-red mt-5 text-center" style="margin-bottom: 3.5%;">FOR CORDOVA WEB PORTAL STAFF ONLY</p>
            </v-card-item>
        </v-card>
    </v-container>
</template>