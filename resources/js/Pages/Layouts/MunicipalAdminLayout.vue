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




          <Link href="/municipal-admin/dashboard"><v-list-item value="dashboard" > <p> Dashboard </p> </v-list-item></Link>
          <Link href="/municipal-admin/municipality"><v-list-item value="Municipality" > <p >Municipality</p> </v-list-item></Link>
          <Link href="/municipal-admin/posts"><v-list-item value="Post" > <p >Post</p> </v-list-item></Link>
          <Link href="/municipal-admin/requests"><v-list-item value="Request" > <v-badge size="20"  offset-x="-12" offset-y="45" content="5" color="red"><p>Request</p></v-badge> </v-list-item></Link>
          <Link href="/municipal-admin/contact-us"><v-list-item value="Contact" >  <p > Contact Us </p> </v-list-item></Link>
          <Link href="/municipal-admin/email-notify-lists"><v-list-item value="ss" > <p >Email notify list</p> </v-list-item></Link>
          <Link href="/municipal-admin/visitor"><v-list-item value="dash3board" > <p >Visitor</p> </v-list-item></Link>
          <Link href="/municipal-admin/the-municipal"><v-list-item value="dashsboard" > <p >The municipal</p> </v-list-item></Link>


          <Link href="/logout" method="GET">
            <v-btn
              prepend-icon="mdi-logout"
              width="300"
              title="LOGOUT"
              style="
                margin-top: 200px;
                background-color: black;
                color: rgb(255, 255, 255);
                font-size: 20px;
              "
              >LOGOUT</v-btn
            >
          </Link>
        </v-list>

      </v-navigation-drawer>

      <v-main>
        <slot> <h1>Hello World</h1> </slot>
      </v-main>
    </v-layout>
  </v-card>
</template>


<style scoped>

a {
    text-decoration: none;
    font-size: 20px;
    color: black;
    font-weight: bold;
    margin-bottom: 40px;
    text-transform: uppercase;


}
.v-list-item {
    padding-bottom: 20px;
}

p {
    margin-top: 30px;
}
</style>
