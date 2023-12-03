<script setup>

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
          <v-list>
            <v-list-item prepend-avatar="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Municipality_of_Cordova_Official_Seal.png/768px-Municipality_of_Cordova_Official_Seal.png">
              <div class="title">Barangay</div>
            </v-list-item>
          </v-list>
  
          <v-divider></v-divider>
  
          <v-list density="compact" nav>
            <Link href="/barangay-admin/posts">
                  <v-list-item value="Post" prepend-icon="mdi mdi-post-outline">
                      Barangay
                  </v-list-item>
              </Link>
              <Link href="#">
                  <v-list-item prepend-icon="mdi mdi-home" value="dashboard"> 
                      Posts
                  </v-list-item>
              </Link>
              <Link href="/barangay-admin/manage-posts">
                  <v-list-item value="Municipality" prepend-icon="mdi mdi-post-outline">
                      Pending posts
                  </v-list-item>
              </Link>
              <Link href="/barangay-admin/pending-posts">
                  <v-list-item value="Request" prepend-icon="mdi mdi-account-question-outline"> 
                      Local news
                  </v-list-item>
              </Link>
              <Link href="/barangay-admin/questions">
                  <v-list-item value="Contact" prepend-icon="mdi mdi-card-account-phone-outline">
                      Events
                  </v-list-item>
              </Link>
              <Link href="/barangay-admin/email-notify-lists">
                  <v-list-item value="ss" prepend-icon="mdi mdi-message-badge-outline">
                      Sports
                  </v-list-item>
              </Link>
              <Link href="/barangay-admin/visitor">
                  <v-list-item value="dash3board" prepend-icon="mdi mdi-account-group">
                      Health and wellness
                  </v-list-item>
              </Link>
              
              
              
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
  
  
  