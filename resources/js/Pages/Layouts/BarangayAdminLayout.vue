<script setup>

    import {ref, watch} from 'vue'
    defineProps({ auth: Object })
    const panels = ref(["all"])
    const showPanels = ref(true)

    watch(showPanels, () => {
        console.log(showPanels.value)
        if(showPanels.value == true) {
            panels.value = ["all"]
        }
        else {
            panels.value = []
        }
    })

    const items = [
        'Sports',
        'Events',
        'Health and wellness',
        'Local news'
    ]

</script>
<template>
    <v-card>
      <v-layout>
        <v-navigation-drawer :width="312" color="grey-darken-3">
            <v-list-item class="ma-2">
            <template v-slot:prepend>
                <v-avatar size="60">
                    <v-img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Municipality_of_Cordova_Official_Seal.png/768px-Municipality_of_Cordova_Official_Seal.png"></v-img>
                </v-avatar>
            </template>
            <p class="text-h6">Barangay admin</p>
            <p class="text-caption">{{ auth.user.email }}</p>
        </v-list-item>
  
          <v-divider></v-divider>
  
          <v-list density="compact" nav>
            <Link :href="`/barangay-admin/barangay/${auth.user.barangay.name}`">
                <v-list-item value="barangay" prepend-icon="mdi-home">
                    {{ auth.user.barangay.name }}
                </v-list-item>
            </Link>
            <Link href="/barangay-admin/posts">
                <v-list-item prepend-icon="mdi-note" value="posts"> 
                    Posts
                </v-list-item>
            </Link>
            <Link href="/barangay-admin/pending-posts">
                <v-list-item value="pending-posts" prepend-icon="mdi-note-multiple">
                    Pending posts
                </v-list-item>
            </Link>
            <!-- <Link href="/barangay-admin/officials">
                <v-list-item value="officials" prepend-icon="mdi-note-multiple">
                    Officials
                </v-list-item>
            </Link> -->
            <v-list-item prepend-icon="mdi-bullhorn" @click="showPanels = !showPanels" :append-icon="showPanels ? 'mdi-chevron-up' : 'mdi-chevron-down'">Announcements</v-list-item>
                <v-expansion-panels variant="accordion" v-model="panels">
                    <v-expansion-panel value="all" class="bg-grey-darken-3" elevation="0">
                        <template v-slot:text>
                            <Link href="/barangay-admin/announcements/local-news">
                                <v-list-item prepend-icon="mdi-newspaper" value="1">Local news</v-list-item>
                            </Link>
                            <Link href="/barangay-admin/announcements/events">
                                <v-list-item prepend-icon="mdi-basketball" value="2">Events</v-list-item>
                            </Link>
                            <Link href="/barangay-admin/announcements/sports">
                                <v-list-item prepend-icon="mdi-calendar-multiple" value="3">Sports</v-list-item>
                            </Link>
                            <Link href="/barangay-admin/announcements/health-and-wellness">
                                <v-list-item prepend-icon="mdi-medication" value="4">Health and wellness</v-list-item>
                            </Link>
                        </template>
                    </v-expansion-panel>
                </v-expansion-panels>
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
  
  
  