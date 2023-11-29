<script setup>

    import MunicipalAdminLayout from '../Layouts/MunicipalAdminLayout.vue';
    defineOptions({
        layout: MunicipalAdminLayout
    })

</script>


<template>
    <v-container>
        <h1 style="text-align: center;">Municipality</h1>
        <v-row style="justify-content: center; display:flex; align-items: center;">
            <v-col cols="3" style="margin-top: 7.5%;">
                <v-select
                label="Category"
                variant="outlined"
                prepend-inner-icon="mdi mdi-shape-plus-outline"
                :items="[
                  'California',
                  'Colorado',
                  'Florida',
                  'Georgia',
                  'Texas',
                  'Wyoming',
                ]"
              ></v-select>
            </v-col>
            <v-col cols="6">
                <v-text-field
                label="Title for your POST"
                placeholder="Title"
                prepend-inner-icon="mdi mdi-format-title"
                hint="For example, flowers or used cars"
                variant="outlined"
              ></v-text-field>
                <v-textarea
                clearable
                prepend-inner-icon="mdi mdi-text-box-outline"
                clear-icon="mdi-close-circle"
                label="Text"
                variant="outlined"
                placeholder="Type Here."
              ></v-textarea>
              <v-btn
              prepend-icon="mdi-note-check-outline"
              variant="outlined"
              size="x-large"
            >
              EDIT
            </v-btn>
              <v-btn
              prepend-icon="mdi-note-check-outline"
              variant="outlined"
              size="x-large"
              class="float-end"
            >
              EDIT
            </v-btn>
            </v-col>
        </v-row>
    </v-container>
</template>
