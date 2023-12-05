<script setup>

    import {ref} from 'vue'
    import MunicipalAdminLayout from '../Layouts/MunicipalAdminLayout.vue'
    import PostCard from '../Components/PostCard.vue';

    defineOptions({ layout: MunicipalAdminLayout })
    defineProps({ barangays: Object , auth: Object})

    const tab = ref('0')

</script>
<template>
    <v-container>
        <p class="text-h4 ma-1">Pending posts</p>
        {{ posts }}
        <v-card>
            <div class="d-flex flex-row">
                <v-tabs v-model="tab" bg-color="grey-darken-2" direction="vertical">
                    <v-tab value="0">
                        All barangays
                    </v-tab>
                    <v-tab :value="barangay.id" v-for="barangay in barangays" :key="barangay.id">
                        {{ barangay.name }} 
                        <v-chip color="red" variant="flat" v-if="barangay.pendingPostsCount > 0" size="x-small">{{ barangay.pendingPostsCount }}</v-chip>
                    </v-tab>
                </v-tabs>

                <v-card-text>
                    <v-window v-model="tab">
                        
                        <v-window-item :value="barangay.id" v-for="barangay in barangays" :key="barangay.id">
                            <v-row>
                                <v-col cols="12">
                                    <p class="text-h4">{{ barangay.name }}</p>
                                </v-col>
                            </v-row>
                            <v-row v-if="barangay.posts.length > 0">
                                <v-col cols="12" v-for="post in barangay.posts" :key="post.id" class="my-5">
                                    <PostCard :post="post" :auth="auth" />
                                </v-col>
                            </v-row>
                            <p v-else> No posts found. </p>
                        </v-window-item>
                        <v-window-item value="0">
                            <p class="text-h4">All barangays</p>
                            <p>All pending posts from all barangays</p>
                            <div v-for="barangay in barangays" :key="barangay.id">
                                <v-col cols="12" v-for="post in barangay.posts" :key="post.id" class="my-5">
                                    <PostCard :post="post" :auth="auth" />
                                </v-col>
                            </div>
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
