<script setup>

    import Footer from './UserFooter.vue'
    import {format} from 'date-fns'
</script>
<template>
    <v-layout>
        <v-app-bar height="30" color="grey-lighten-4" elevation="0" border>
        THE OFFICIAL WEB PORTAL OF MUNICIPALITY OF CORDOVA | {{ format(new Date, 'MMMM d, y EEEE h:m a') }}
        <v-spacer/>

        <Link href="/sign-in"><v-btn>sign in</v-btn></Link>
        <Link href="/support"><v-btn>support</v-btn></Link>
        <Link href="/contact-us"><v-btn>contact us</v-btn></Link>

        </v-app-bar>
        <v-app-bar>
            <v-app-bar-title>
                <Link href="/">
                    <v-img src="images/logo/Capture.PNG" width="100%" height="60"></v-img>
                </Link>
            </v-app-bar-title>
            <v-spacer/>
            <Link href="/" :id="$page.component == 'User/Index' ? 'border_bottom' : ''"><v-btn>Home</v-btn></Link>
            <Link href="/municipal" :id="$page.component == 'User/Municipal' ? 'border_bottom' : ''"><v-btn>the municipal</v-btn></Link>
            <Link href="/barangays" :id="$page.component == 'User/Barangays' ? 'border_bottom' : ''"><v-btn>barangays</v-btn></Link>
            <Link href="/visitors" :id="$page.component == 'User/Visitors' ? 'border_bottom' : ''"><v-btn>visitors</v-btn></Link>
        </v-app-bar>
        <v-main>
                <slot></slot>
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