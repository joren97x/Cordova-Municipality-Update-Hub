<script setup>

    import {ref} from 'vue'
    import {format} from 'date-fns'
    import MunicipalAdminLayout from '../Layouts/MunicipalAdminLayout.vue';
    defineOptions({
        layout: MunicipalAdminLayout
    })
    defineProps({
        barangays: Object
    })

    const tab = ref(null)

</script>
<template>
    <v-container>
        <p class="text-h4 ma-1">Pending posts</p>
        <v-card>
            <div class="d-flex flex-row">
                <v-tabs v-model="tab" bg-color="grey-darken-2" direction="vertical">
                    <v-tab value="0">
                        All barangays
                    </v-tab>
                    <v-tab :value="barangay.id" v-for="barangay in barangays" :key="barangay.id">
                            {{ barangay.name }} 
                            <v-chip color="red" variant="flat" size="x-small">{{ barangay.id }}</v-chip>
                    </v-tab>
                </v-tabs>

                <v-card-text>
                    <v-window v-model="tab">
                        <v-window-item :value="barangay.id" v-for="barangay in barangays" :key="barangay.id">
                            <p class="text-h5">{{ barangay.name }}</p>
                            <v-row>
                                <v-col cols="12">
                                    <v-card v-for="n in 3" :key="n" class="my-5">
                                        <v-img src="https://t4.ftcdn.net/jpg/05/57/46/03/360_F_557460386_dKs9K9peVkWWi6VpnMFIKGciQJzRyCX6.jpg" height="180" cover></v-img>
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
                                            <v-btn color="red">Decline</v-btn>
                                            <v-btn color="green">Approve</v-btn>
                                        </v-card-actions>
                                    </v-card>
                                </v-col>
                            </v-row>
                        </v-window-item>
                        <v-window-item value="0">
                            <p class="text-h5">All barangays</p>
                            <p>All pending posts from all barangays</p>
                        </v-window-item>
                    </v-window>
                </v-card-text>
            </div>
        </v-card>


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
