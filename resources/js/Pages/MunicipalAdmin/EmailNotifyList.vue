<script setup>

    import MunicipalAdminLayout from '../Layouts/MunicipalAdminLayout.vue';
    defineOptions({
        layout: MunicipalAdminLayout
    })
    const emails = []
    for(let i = 0; i < 11; i++) {
        emails.push({
            email: `wagamama${i}00${i+1}@email.com`
        })
    }

    const headers = [
        { title: 'Id', align: 'start', key: 'Id', value: "Id", sortable: true },
        { title: 'Email', align: 'start', key: 'Email', value: "Email" },
        { title: 'Actions', align: 'start', key: 'Actions', value: "Actions" }
    ]

    const emailArr = [
        {
            id: 1,
            email: "email2@email.com",
        },
        {
            id: 2,
            email: "email1@email.com",
        },
        {
            id: 3,
            email: "email3@email.com",
        },
        {
            id: 5,
            email: "email5@email.com",
        },
    ]

</script>
<template>
    
    <v-container>
        <v-data-table :headers="headers" :items="emailArr">
            <template v-slot:item="{item}">
                <tr>
                    <td>{{ item.id }}</td>
                    <td>{{ item.email }}</td>
                    <td>
                        <v-btn size="small" prepend-icon="mdi-bell">Notify</v-btn>
                    </td>
                </tr>
            </template>            
        </v-data-table>
    </v-container>

</template>
