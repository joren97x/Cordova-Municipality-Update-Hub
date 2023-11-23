<template>
  <v-card>
    <v-layout>
      <v-navigation-drawer :width="312">
        <v-list>
          <v-list-item prepend-avatar="logo-copy.png">
            <div class="title">Municipal</div>
          </v-list-item>
        </v-list>

        <v-divider></v-divider>

        <v-list density="compact" nav style="font-size: 20px; font-weight: bold">
          <v-list-item
            v-for="item in menuItems"
            :key="item.value"
            :prepend-icon="item.icon"
            :title="item.title"
            @click="showContent(item.value)"
          ></v-list-item>
          <Link href="/municipal-admin/dashboard"><v-list-item value="dashboard" class="pa-2"> Dashboard </v-list-item></Link>
          <Link href="/municipal-admin/municipality"><v-list-item value="Municipality" class="pa-2"> Municipality </v-list-item></Link>
          <Link href="/municipal-admin/posts"><v-list-item value="Post" class="pa-2"> <p class="ma-2">Post</p> </v-list-item></Link>
          <Link href="/municipal-admin/requests"><v-list-item value="Request" class="pa-2"> <v-badge size="20" class="ma-2" offset-x="-10" content="5" color="red">Request</v-badge> </v-list-item></Link>
          <Link href="/municipal-admin/contact-us"><v-list-item value="Contact" class="pa-2">  Contact us </v-list-item></Link>
          <Link href="/municipal-admin/email-notify-lists"><v-list-item value="ss" class="pa-2"> Email notify list </v-list-item></Link>
          <Link href="/municipal-admin/visitor"><v-list-item value="dash3board" class="pa-2"> Visitor </v-list-item></Link>
          <Link href="/municipal-admin/the-municipal"><v-list-item value="dashsboard" class="pa-2"> The municipal </v-list-item></Link>
        </v-list>
      </v-navigation-drawer>

      <v-main>
        <slot> <h1>Hello World</h1> </slot>
      </v-main>
    </v-layout>
  </v-card>
</template>
