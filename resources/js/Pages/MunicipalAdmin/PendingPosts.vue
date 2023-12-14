<script setup>

    import {ref} from 'vue'
    import MunicipalAdminLayout from '../Layouts/MunicipalAdminLayout.vue'
    import PostCard from '../Components/PostCard.vue'
    import { router } from '@inertiajs/vue3'

    defineOptions({ layout: MunicipalAdminLayout })
    defineProps({ barangays: Object , auth: Object})

    const tab = ref('0')
    const loading = ref(false)
    const msg = ref('')
    const snackbar = ref(false)
    const selectedPost = ref(null)
    const approvePostDialog = ref(false)
    const declinePostDialog = ref(false)
    function showApprovePostDialog(post) {
        selectedPost.value = post
        approvePostDialog.value = true
    }

    function showDeclinePostDialog(post) {
        selectedPost.value = post
        declinePostDialog.value = true
    }

    function submitApprovePost() {
        loading.value = true
        router.put(`/municipal-admin/approve-post`, { id: selectedPost.value.id }, {
            onSuccess: () => {
                loading.value = false
                snackbar.value = true
                msg.value = "Approved successfully"
                approvePostDialog.value = false
            },
            onFinish: () => {
                loading.value = false
            }
        })
    }

    function submitDeclinePost() {
        loading.value = true
        router.put(`/municipal-admin/decline-post`, { id: selectedPost.value.id }, {
            onSuccess: () => {
                loading.value = false
                snackbar.value = true
                msg.value = "Declined successfully"
                declinePostDialog.value = false
            },
            onFinish: () => {
                loading.value = false
            }
        })
    }

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
                                    <PostCard :post="post" :auth="auth" @approvePost="showApprovePostDialog(post)" @declinePost="showDeclinePostDialog(post)" />
                                </v-col>
                            </div>
                        </v-window-item>
                    </v-window>
                </v-card-text>
            </div>
        </v-card>


        <v-dialog v-model="approvePostDialog" width="69%">
            <v-card title="Approve post">
                <v-card-text>Are you sure you want to <strong class="text-green">approve</strong> this post?</v-card-text>
                <v-card-actions>
                    <v-spacer/>
                    <v-btn @click="approvePostDialog = false">Cancel</v-btn>
                    <v-btn color="green" @click="submitApprovePost" :loading="loading">Approve</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>

        <v-dialog v-model="declinePostDialog" width="80%">
            <v-card title="Decline post">
                <v-card-text>Are you sure you want to <strong class="text-red">decline</strong> this post?</v-card-text>
                <v-card-actions>
                    <v-spacer/>
                    <v-btn @click="declinePostDialog = false">Cancel</v-btn>
                    <v-btn color="red" @click="submitDeclinePost" :loading="loading">Decline</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>

        <!-- <v-dialog v-model="declinePostDialog" width="50%">
            <v-card title="Decline post">
                <v-card-text>
                    Are you sure you want to decline this post?
                </v-card-text>
                <v-card-actions>
                    <v-spacer/>
                    <v-btn  @click="declinePostDialog = false">Cancel</v-btn>
                    <v-btn color="red" @click="submitDeclinePost" :loading="loading">Decline</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog> -->

        <v-snackbar v-model="snackbar" location="top" timeout="2500">
            {{ msg }}
        </v-snackbar>

    </v-container>
</template>
