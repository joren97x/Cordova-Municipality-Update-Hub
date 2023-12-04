<script setup>

    import {format} from 'date-fns'

</script>
<template>

    <v-card class="mb-6">
        <v-img src="https://t4.ftcdn.net/jpg/05/57/46/03/360_F_557460386_dKs9K9peVkWWi6VpnMFIKGciQJzRyCX6.jpg" height="200" cover></v-img>
        <v-card-title>
            Title Lorem, ipsum {{ n }}
        </v-card-title>
        <v-card-subtitle>
            <v-icon>mdi-circle-medium</v-icon>
            {{ format(new Date(), 'PPPP') }}
            <v-icon>mdi-circle-medium</v-icon>
            Category
        </v-card-subtitle>
        <v-card-text>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quos expedita iste id vero cumque reiciendis explicabo commodi accusantium exercitationem!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, omnis.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, aspernatur?
        </v-card-text>
        <v-card-actions>
            <v-spacer/>
            <!-- just check the post's status to show or not show the buttons -->
            <!-- <v-btn color="blue">Edit</v-btn>
            <v-btn color="red">Delete</v-btn> -->
        </v-card-actions>
    </v-card>
    
</template>