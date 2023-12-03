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

</script>
<template>
    
    <v-container>
        <v-table>
            <thead>
                <tr>
                    <th class="text-left"> Emails </th>
                    <th class="text-left"> Action </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in emails" :key="item.email">
                    <td>{{ item.email }}</td>
                    <td><v-btn prepend-icon="mdi-bell">Notify</v-btn></td>
                </tr>
            </tbody>
        </v-table>
    </v-container>

</template>
