<script setup>

    import {ref, watch} from 'vue'
    defineProps({ auth: Object })
    const panels = ref([])
    const showPanels = ref(false)

    watch(showPanels, () => {
        console.log(showPanels.value)
        if(showPanels.value == true) {
            panels.value = ["all"]
        }
        else {
            panels.value = []
        }
    })

</script>
<template>
  <v-card>
    <v-layout>
      <v-navigation-drawer :width="335" color="grey-darken-3">
        
        <v-list-item class="ma-2">
            <template v-slot:prepend>
                <v-avatar size="50">
                    <v-img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Municipality_of_Cordova_Official_Seal.png/768px-Municipality_of_Cordova_Official_Seal.png"></v-img>
                </v-avatar>
            </template>
            <p class="text-h6">Municipality admin</p>
            <!-- <template v-slot:append>
                <v-btn icon="mdi-menu-open" variant="text" @click="drawer = !drawer"></v-btn>
            </template> -->
        </v-list-item>

        <v-divider></v-divider>

        <v-list density="compact" nav>
            <Link href="/municipal-admin/cordova-municipality">
                <v-list-item prepend-icon="mdi mdi-home" value="dashboard"> 
                    {{ auth.user.barangay.name }}
                </v-list-item>
            </Link>
            <Link href="/municipal-admin/manage-posts">
                <v-list-item value="Municipality" prepend-icon="mdi-note-edit">
                    Manage posts
                </v-list-item>
            </Link>
            <Link href="/municipal-admin/pending-posts">
                <v-list-item value="Request" prepend-icon="mdi-note-multiple"> 
                    <template v-slot:append>
                        <v-chip>n</v-chip>
                    </template>
                    Pending posts
                </v-list-item>
            </Link>
            <Link href="/municipal-admin/questions">
                <v-list-item value="Contact" prepend-icon="mdi-chat-question">
                    <template v-slot:append>
                        <v-chip>n</v-chip>
                    </template> 
                    Questions
                </v-list-item>
            </Link>
            <Link href="/municipal-admin/email-notify-lists">
                <v-list-item value="ss" prepend-icon="mdi-email-multiple">
                    <template v-slot:append>
                        <v-chip>n</v-chip>
                    </template> 
                    Email notify list
                </v-list-item>
            </Link>
            <Link href="/municipal-admin/admins">
                <v-list-item value="admins" prepend-icon="mdi-account">
                    Admins
                </v-list-item>
            </Link>
            <!-- <Link href="/municipal-admin/visitor">
                <v-list-item value="dash3board" prepend-icon="mdi mdi-account-group">
                    Visitors
                </v-list-item>
            </Link> -->
            <v-list-item prepend-icon="mdi-account-group" @click="showPanels = !showPanels" :append-icon="showPanels ? 'mdi-chevron-up' : 'mdi-chevron-down'">Visitors</v-list-item>
            <v-expansion-panels variant="accordion" v-model="panels">
                <v-expansion-panel value="all" class="bg-grey-darken-3" elevation="0">
                    <template v-slot:text>
                        <v-list-item prepend-icon="mdi-car" value="1">Essential travel facts</v-list-item>
                        <v-list-item prepend-icon="mdi-island" value="2">Must see sites</v-list-item>
                        <v-list-item prepend-icon="mdi-shopping" value="3">Entertainment, shopping and leisures </v-list-item>
                        <v-list-item prepend-icon="mdi-bed" value="4">Bed and dine </v-list-item>
                        <v-list-item prepend-icon="mdi-map" value="5">Moving around the city </v-list-item>
                        <v-list-item prepend-icon="mdi-cash" value="6">Money exchange center</v-list-item>
                        <v-list-item prepend-icon="mdi-bullhorn" value="7">Events, festivals and activities</v-list-item>
                    </template>
                </v-expansion-panel>
            </v-expansion-panels>
            <!-- <Link href="/municipal-admin/posts">
                <v-list-item value="Post" prepend-icon="mdi mdi-post-outline">
                    The municipal
                </v-list-item>
            </Link> -->
           
            
            
        </v-list>
        <template v-slot:append>
            <Link href="/logout" method="GET">
                <div class="pa-2">
                    <v-btn block color="white" prepend-icon="mdi-logout">
                        Logout
                    </v-btn>
                </div>
            </Link>
        </template>

      </v-navigation-drawer>

      <v-main class="bg-grey-lighten-2">
        <slot> </slot>
      </v-main>
    </v-layout>
  </v-card>
</template>

<style scoped>

    a{
        text-decoration: none;
        color: white;
    }

</style>


