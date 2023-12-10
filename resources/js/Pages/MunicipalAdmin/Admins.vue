<script setup>

    import { ref, watch } from 'vue'
    import { useForm } from '@inertiajs/vue3';
    import MunicipalAdminLayout from '../Layouts/MunicipalAdminLayout.vue';
    defineOptions({ layout: MunicipalAdminLayout })
    defineProps({ admins: Object , barangays: Object})

    const editAdminDialog = ref(false)
    const deleteAdminDialog = ref(false)
    const createAdminDialog = ref(false)
    const showPassword = ref(false)
    const disableBarangaySelect = ref(false)
    const snackbar = ref(false)
    const message = ref('')

    const createAdminForm = useForm({
        email: null,
        password: null,
        role: null,
        area_id: null
    })

    const updateAdminForm = useForm({
        id: null,
        email: null,
        role: null,
        area_id: null
    })

    const deleteAdminForm = useForm({
        id: null,
        email: null,
    })

    watch(createAdminForm, () => {
        if(createAdminForm.role === 'municipal_admin') {
            createAdminForm.area_id = 14
            disableBarangaySelect.value = true
        }
        if(createAdminForm.role === 'barangay_admin') {
            if(createAdminForm.area_id == 14) {
                createAdminForm.area_id = null
            }
            disableBarangaySelect.value = false
        }
    })

    function setUpdateAdminForm(admin) {
        updateAdminForm.id = admin.id
        updateAdminForm.email = admin.email
        updateAdminForm.role = admin.role
        updateAdminForm.area_id = admin.area_id
        editAdminDialog.value = true
    }

    function setDeleteAdminForm(admin) {
        deleteAdminForm.id = admin.id
        deleteAdminForm.email = admin.email
        deleteAdminDialog.value = true
    }

    function submitCreateAdminForm() {
        createAdminForm.post('/municipal_admin/create-admin', {
            onSuccess: () => {
                createAdminDialog.value = false
                createAdminForm.reset()
                snackbar.value = true
                message.value = "Created admin successfully"
            }
        })
    }

    function submitDeleteAdminForm() {
        deleteAdminForm.post(`/municipal_admin/delete-admin/${deleteAdminForm.id}`, {
            onSuccess: () => {
                deleteAdminDialog.value = false
                deleteAdminForm.reset()
                snackbar.value = true
                message.value = "Deleted admin successfully"
            }
        })
    }

    function submitUpdateAdminForm() {
        updateAdminForm.post(`/municipal_admin/update-admin/${updateAdminForm.id}`, {
            onSuccess: () => {
                editAdminDialog.value = false
                updateAdminForm.reset()
                snackbar.value = true
                message.value = "Updated admin successfully"
            }
        })
    }

</script>
<template>
    <v-container>
        <v-row>
            <v-col cols="10">
                <p class="text-h4">Admins</p>
            
            </v-col>
            <v-col>
                <v-spacer/>
                <v-btn prepend-icon="mdi-plus" color="green" @click="createAdminDialog = true">New admin</v-btn>
            </v-col>
        </v-row>
        <v-table class="mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Barangay</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="admin in admins" :key="admin.id">
                    <td> {{ admin.id }} </td>
                    <td>{{ admin.email }}</td>
                    <td>{{ barangays[admin.area_id-1].name }}</td>
                    <td>{{ admin.role == "barangay_admin" ? "Barangay admin" : "Municipal admin" }}</td>
                    <td>
                        <v-btn class="me-2" prepend-icon="mdi-square-edit-outline" @click="setUpdateAdminForm(admin)" color="blue">Edit</v-btn>
                        <v-btn color="red" prepend-icon="mdi-delete-empty-outline" @click="setDeleteAdminForm(admin)">Delete</v-btn>
                    </td>
                </tr>
            </tbody>
        </v-table>
    </v-container>

    <v-dialog v-model="editAdminDialog" width="69%">
        <v-card title="Edit admin">
            <v-form @submit.prevent @submit="submitUpdateAdminForm">
                <v-card-item>
                    <v-text-field label="Email" :error-messages="updateAdminForm.errors.email" v-model="updateAdminForm.email" clearable></v-text-field>
                    <v-row>
                        <v-col cols="6">
                            <v-select label="Role" :error-messages="updateAdminForm.errors.role" v-model="updateAdminForm.role" item-title="title" item-value="value" :items="[{ title: 'Barangay admin', value: 'barangay_admin' }, { title: 'Municipal admin', value: 'municipal_admin' }]" ></v-select>
                        </v-col>
                        <v-col cols="6">
                            <v-select label="Barangay" :error-messages="updateAdminForm.errors.area_id ? 'The barangay field is required' : ''" :disabled="disableBarangaySelect" id="barangay_title"  v-model="updateAdminForm.area_id" item-title="name" item-value="id" :items="barangays" ></v-select>
                        </v-col>
                    </v-row>
                </v-card-item>
                <v-card-actions>
                    <v-spacer/>
                    <v-btn @click="editAdminDialog = false">Close</v-btn>
                    <v-btn color="blue" type="submit" :loading="updateAdminForm.processing">Update</v-btn>
                </v-card-actions>   
            </v-form>
        </v-card>
    </v-dialog>

    <v-dialog v-model="deleteAdminDialog" width="50%">
        <v-card title="Delete admin">
            <v-form @submit.prevent @submit="submitDeleteAdminForm">
                <v-card-text>
                    Are you sure you want to delete <strong class="text-red">{{ deleteAdminForm.email }}</strong> ?
                </v-card-text>
                <v-card-actions>
                    <v-spacer/>
                    <v-btn @click="deleteAdminDialog = false">Close</v-btn>
                    <v-btn color="red" type="submit" :loading="deleteAdminForm.processing">Delete</v-btn>
                </v-card-actions>
            </v-form>
        </v-card>
    </v-dialog>

    <v-dialog v-model="createAdminDialog" width="69%" persistent>
        <v-card title="Create admin">
            <v-form @submit.prevent @submit="submitCreateAdminForm">
                <v-card-item>
                    <v-row>
                        <v-col cols="6">
                            <v-text-field label="Email" :error-messages="createAdminForm.errors.email" v-model="createAdminForm.email" clearable></v-text-field>
                        </v-col>
                        <v-col cols="6">
                            <v-text-field label="Password" :error-messages="createAdminForm.errors.password" v-model="createAdminForm.password" :type="showPassword ? 'text' : 'password'">
                                <template v-slot:append-inner>
                                    <v-btn variant="text" :icon="showPassword ? 'mdi-eye-off-outline' : 'mdi-eye-outline'" size="small" @click="showPassword = !showPassword"></v-btn>
                                </template>
                            </v-text-field>
                        </v-col>
                        <v-col cols="6">
                            <v-select label="Role" :error-messages="createAdminForm.errors.role" v-model="createAdminForm.role" item-title="title" item-value="value" :items="[{ title: 'Barangay admin', value: 'barangay_admin' }, { title: 'Municipal admin', value: 'municipal_admin' }]" ></v-select>
                        </v-col>
                        <v-col cols="6">
                            <v-select label="Barangay" :error-messages="createAdminForm.errors.area_id ? 'The barangay field is required' : ''" :disabled="disableBarangaySelect" id="barangay_title"  v-model="createAdminForm.area_id" item-title="name" item-value="id" :items="barangays" ></v-select>
                        </v-col>
                    </v-row>
                </v-card-item>
                <v-card-actions>
                    <v-spacer/>
                    <v-btn @click="createAdminDialog = false">Close</v-btn>
                    <v-btn color="green" type="submit" :loading="createAdminForm.processing">Create</v-btn>
                </v-card-actions>   
            </v-form>
        </v-card>
    </v-dialog>

    <v-snackbar v-model="snackbar" color="green">
        {{ message }}
    </v-snackbar>

</template>
