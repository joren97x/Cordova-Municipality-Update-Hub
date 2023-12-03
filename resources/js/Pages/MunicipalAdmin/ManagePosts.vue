<script setup>

    import {ref} from 'vue'
    import {format} from 'date-fns'
    import MunicipalAdminLayout from '../Layouts/MunicipalAdminLayout.vue';
    defineOptions({
        layout: MunicipalAdminLayout
    })

    const createPostDialog = ref(false)
    const deletePostDialog = ref(false)

</script>
<template>
    <v-container>
        <v-row class="ma-1">
            <p class="text-h4">Post management</p>
            <v-spacer/>
            <v-btn prepend-icon="mdi-plus" @click="createPostDialog = true" color="green">New post</v-btn>

            <v-col cols="12">
                <v-card v-for="n in 5" :key="n" class="my-5">
                    <v-img src="https://t4.ftcdn.net/jpg/05/57/46/03/360_F_557460386_dKs9K9peVkWWi6VpnMFIKGciQJzRyCX6.jpg" height="200" cover></v-img>
                    <v-card-title>
                        Title Lorem, ipsum {{ n }}
                    </v-card-title>
                    <v-card-subtitle>
                        <v-icon>mdi-circle-medium</v-icon>
                        {{ format(new Date(), 'PPPP') }}
                    </v-card-subtitle>
                    <v-card-text>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quos expedita iste id vero cumque reiciendis explicabo commodi accusantium exercitationem!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, omnis.
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, aspernatur?
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer/>
                        <v-btn color="blue">Edit</v-btn>
                        <v-btn color="red" @click="deletePostDialog = true">Delete</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>

        </v-row>

        <v-dialog v-model="createPostDialog" width="80%">
            <v-card title="Create post">
                <v-card-text>
                    <v-file-input label="Banner"></v-file-input>
                    <v-text-field label="Post title"></v-text-field>
                    <v-select :items="['Local news', 'Events', 'Sports', 'Health and wellness']" label="Category"></v-select>
                    <v-textarea label="Description"></v-textarea>
                </v-card-text>
                <v-card-actions>
                    <v-spacer/>
                    <v-btn color="red" @click="createPostDialog = false">Cancel</v-btn>
                    <v-btn>Fordago</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>

        <v-dialog v-model="deletePostDialog" width="50%">
            <v-card title="Delete post">
                <v-card-text>
                    Are you sure you want to delete this post?
                </v-card-text>
                <v-card-actions>
                    <v-spacer/>
                    <v-btn  @click="deletePostDialog = false">Cancel</v-btn>
                    <v-btn color="red" @click="deletePostDialog = false">DELETE</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>

    </v-container>
</template>
