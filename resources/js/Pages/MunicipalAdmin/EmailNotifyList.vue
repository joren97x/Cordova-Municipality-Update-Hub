<script setup>

    import emailjs from '@emailjs/browser'
    import { ref } from 'vue'
    import { useForm } from '@inertiajs/vue3'
    import MunicipalAdminLayout from '../Layouts/MunicipalAdminLayout.vue'
    defineOptions({ layout: MunicipalAdminLayout })
    defineProps({ emails: Object })
    
    const deleteEmailForm = useForm({ user: null })
    const deleteEmailDialog = ref(false)
    const snackbar = ref(false)
    const msg = ref(null)
    const headers = [
        { title: 'Id', align: 'center', key: 'id', value: "id", sortable: true },
        { title: 'Email', align: 'center', key: 'email', value: "email" },
        { title: 'Actions', align: 'center', key: 'Actions', value: "Actions" }
    ]

    function notify(user) {
        console.log(user)
        emailjs.send('service_950dhig', 'template_xzp03ja', {
            sendername: `Municipal admin`,
            to: user.email,
            subject: "Cordova Municipality Update Hub Notification",
            replyto: `Municipal admin`,
            message: `
                Tbh i dont really know what to notify u :/ 
            `
        }, 'eEt-YCYeYc0LoTRxJ').then(
            (response) => {
                msg.value = 'User notified'
                snackbar.value = true
                console.log('SUCCESS!', response.status, response.text)
            },
            (error) => {
                loading.value = false
                console.log('FAILED...', error)
            },
        )
    }

    function deleteEmail(id) {
        deleteEmailForm.delete(`/municipal-admin/delete-email/${id}`, {
            onSuccess: () => {
                deleteEmailDialog.value = false
                msg.value = 'Email successfully deleted'
                snackbar.value = true
            },
            preserveScroll: true
        })
    }

    function selectEmail(email) {
        deleteEmailForm.user = email
        deleteEmailDialog.value = true
    }

</script>
<template>
    
    <v-container>
        <p class="text-h4 ma-1">Email notify lists</p>
        <v-data-table :headers="headers" :items="emails">
            <template v-slot:item="{item}">
                <v-slide-y-transition group>
                    <tr>
                        <td class="text-center">{{ item.id }}</td>
                        <td class="text-center">{{ item.email }}</td>
                        <td class="text-center">
                            <v-btn size="small" prepend-icon="mdi-bell" class="me-2" @click="notify(item)">Notify</v-btn>
                            <v-btn size="small" prepend-icon="mdi-delete-empty" @click="selectEmail(item)">Delete</v-btn>
                        </td>
                    </tr>
                </v-slide-y-transition>
            </template>            
        </v-data-table>

        <v-dialog v-model="deleteEmailDialog" width="50%">
            <v-card title="Delete email">
                <v-card-item>
                    <v-alert icon="mdi-alert" color="red-lighten-1" class="text-white">
                        Are you sure you want to delete this email? It cannot be undone.
                    </v-alert>
                    <p> Email: <span class="text-h6">{{ deleteEmailForm.user.email }} </span> </p>
                </v-card-item>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn @click="deleteEmailDialog = false">Cancel</v-btn>
                    <v-btn color="red" :loading="deleteEmailForm.processing" @click="deleteEmail(deleteEmailForm.user.id)" >Delete</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>

        <v-snackbar v-model="snackbar">
            {{ msg }}
        </v-snackbar>

    </v-container>
</template>
