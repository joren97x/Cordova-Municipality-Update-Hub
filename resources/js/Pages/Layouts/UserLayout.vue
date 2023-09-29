<script setup>

    import Footer from './UserFooter.vue'

</script>
<template>
    <v-layout>
        <v-app-bar height="30" color="grey-lighten-4" elevation="0" border>
        THE OFFICIAL WEB PORTAL OF MUNICIPALITY OF CORDOVA | {{ new Date }}
        <v-spacer/>

        <Link href="/sign-in"><v-btn>sign in</v-btn></Link>
        <Link href="/support"><v-btn>support</v-btn></Link>
        <Link href="/contact-us"><v-btn>contact us</v-btn></Link>

        </v-app-bar>
        <v-app-bar>
            <v-app-bar-title>
                REPUBLIC OF BASTA KAPOY
            </v-app-bar-title>
            <v-spacer/>
            <Link href="/" :id="$page.component == 'User/Index' ? 'border_bottom' : ''"><v-btn>Home</v-btn></Link>
            <Link href="/municipal" :id="$page.component == 'User/Municipal' ? 'border_bottom' : ''"><v-btn>the municipal</v-btn></Link>
            <Link href="/barangays" :id="$page.component == 'User/Barangays' ? 'border_bottom' : ''"><v-btn>barangays</v-btn></Link>
            <Link href="/visitors" :id="$page.component == 'User/Visitors' ? 'border_bottom' : ''"><v-btn>visitors</v-btn></Link>
        </v-app-bar>
        <v-main>
            <v-container>
                <slot></slot>
            </v-container>
            <Footer/>
        </v-main>

    </v-layout>
</template>

<style scoped>

    #border_bottom {
        border-bottom: 1px solid red;
    }

    a {
        color: black;
    }

</style>