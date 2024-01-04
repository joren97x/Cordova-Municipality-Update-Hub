<script setup>

    import MunicipalAdminLayout from '../Layouts/MunicipalAdminLayout.vue';
    defineOptions({ layout: MunicipalAdminLayout })
    defineProps({ emails: Object })
    
    const headers = [
        { title: 'Id', align: 'center', key: 'Id', value: "Id", sortable: true },
        { title: 'Email', align: 'center', key: 'Email', value: "Email" },
        { title: 'Actions', align: 'center', key: 'Actions', value: "Actions" }
    ]

</script>
<template>
    
    <v-container>
        <p class="text-h4 ma-1">Email notify lists</p>
        <v-data-table :headers="headers" :items="emails">
            <template v-slot:item="{item}">
                <tr>
                    <td class="text-center">{{ item.id }}</td>
                    <td class="text-center">{{ item.email }}</td>
                    <td class="text-center">
                        <v-btn size="small" prepend-icon="mdi-bell" class="me-2">Notify</v-btn>
                        <v-btn size="small" prepend-icon="mdi-delete-empty">Delete</v-btn>
                    </td>
                </tr>
            </template>            
        </v-data-table>
    </v-container>

</template>
