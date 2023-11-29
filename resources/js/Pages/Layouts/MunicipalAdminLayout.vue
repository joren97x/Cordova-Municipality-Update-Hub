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




          <Link href="/municipal-admin/dashboard"><v-list-item prepend-icon="mdi mdi-view-dashboard-edit-outline" value="dashboard"> <p class="custom-text"> Dashboard </p> </v-list-item></Link>
          <Link href="/municipal-admin/municipality"><v-list-item value="Municipality" prepend-icon="mdi mdi-bank"> <p >Municipality</p> </v-list-item></Link>
          <Link href="/municipal-admin/posts"><v-list-item value="Post" prepend-icon="mdi mdi-post-outline"> <p >Post</p> </v-list-item></Link>
          <Link href="/municipal-admin/requests"><v-list-item value="Request" prepend-icon="mdi mdi-account-question-outline"> <v-badge size="25"  offset-x="-11" offset-y="2" content="9+" color="red"><p>Request</p></v-badge> </v-list-item></Link>
          <Link href="/municipal-admin/contact-us"><v-list-item value="Contact" prepend-icon="mdi mdi-card-account-phone-outline">  <p > Contact Us </p> </v-list-item></Link>
          <Link href="/municipal-admin/email-notify-lists"><v-list-item value="ss" prepend-icon="mdi mdi-message-badge-outline"> <p >Email notify list</p> </v-list-item></Link>
          <Link href="/municipal-admin/visitor"><v-list-item value="dash3board" prepend-icon="mdi mdi-account-group"> <p >Visitor</p> </v-list-item></Link>
          <Link href="/municipal-admin/the-municipal"><v-list-item value="dashsboard"  prepend-icon="mdi mdi-bank-outline"> <p >The municipal</p> </v-list-item></Link>


          <Link href="/logout" method="GET">
            <v-btn
              prepend-icon="mdi-logout"
              width="300"
              title="LOGOUT"
              style="
                margin-top: 105%;
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
    padding-top: 20px;
}

.custom-list-item {
    display: flex;
    font-size: 25px;
  }

  .custom-text {
    display: flex;

  }
</style>
