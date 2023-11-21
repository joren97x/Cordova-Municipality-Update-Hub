<script setup>
import Layout from "../Layouts/UserLayout.vue";
defineOptions({
  layout: Layout,
});
</script>

<template>
    <div class="contact-container">
      <div class="contact-section">
        <h1>Contact Us</h1>
        <p class="contact-info">
          Poblacion, Cordova Cebu Philippines <br />
          Telephone: 123-456-789 <br />
          Fax No: 123-56-123 <br />
          Email Address: cordova.cebu@gmail.com <br />
        </p>
        <div class="icon-container">
          <v-btn
            class="ma-2 icon-button"
            color="indigo"
            height="100px"
            width="100px"
            icon="mdi-facebook"
            style="font-size: 40px"
          ></v-btn>
          <v-btn
            class="ma-2 icon-button"
            color="indigo"
            height="100px"
            width="100px"
            icon="mdi-google"
            style="font-size: 40px"
          ></v-btn>
        </div>
      </div>
      <div class="help-section">
        <h1 class="head">We're here to support you!</h1>
        <v-text-field
        label="Full Name"
        variant="outlined"
        clearable
        prepend-inner-icon="mdi-account"
      ></v-text-field>
        <v-text-field
        label="Email"
        variant="outlined"
        clearable
        prepend-inner-icon="mdi-email"
        ></v-text-field>
        <v-text-field
        label="Contact Number"
        variant="outlined"
        clearable
        prepend-inner-icon="mdi-phone"
        ></v-text-field>
        <v-textarea
        label="Message"
        variant="outlined"
        clearable
        prepend-inner-icon="mdi-message"
    ></v-textarea>
        <v-btn flat color="red" class="send-button" style="margin-bottom: 12%;">Send</v-btn>
      </div>
    </div>
  </template>

  <style>
    .contact-container {
      display: flex;
    }

    .contact-section {
      margin-left: 10%;
      text-align: left;
      margin-top: 10.5%;
    }

    .contact-info {
      justify-content: left;
      display: flex;
      margin-left: 1%;
      font-size: 20px;
      text-align: center;
    }

    .icon-container {
      justify-content: left;
      display: flex;
      margin-left: 25.5%;
      text-align: center;
    }

    .help-section {
      margin-left: 12%; /* Adjust the margin as needed */
      margin-top: 4%;
    }

    .head {
      font-size: 60px;
      display: flex;
      justify-content: right;
    }


   @media only screen and (max-width: 800px) {
        .contact-info {
            justify-content: center;
            display: flex;
        }

        .contact-container {
            flex-direction: column;
          }
    }

     @media only screen and (max-width: 1650px) {
        h1 {
           margin-left: 5%;
            text-align: center;
        }
        .icon-container {
            margin-right: 20%;
        }

        .help-section {
            margin-right: 5%;
        }
    }
  </style>


