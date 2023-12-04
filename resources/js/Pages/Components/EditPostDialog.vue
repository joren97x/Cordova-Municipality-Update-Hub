<script setup>


    const props = defineProps({editPostDialog: Boolean})
    const emit = defineEmits('closeEditPostDialog')

</script>
<template>
    <v-dialog v-model="props.editPostDialog" width="69%">
        <v-img class="align-end" src="https://t4.ftcdn.net/jpg/05/57/46/03/360_F_557460386_dKs9K9peVkWWi6VpnMFIKGciQJzRyCX6.jpg" height="200" cover>
            <v-file-input label="Banner" class="mx-8" variant="solo"></v-file-input>
        </v-img>
        <v-card>
            <v-card-item>
                <v-text-field label="Title" active value="Lorem ispum">
                </v-text-field>
                <v-select label="Catefory" active value="Sports" :items="['Sports', 'Events', 'Local news', 'Health and wellness']"></v-select>
                <v-textarea label="Description" active value="Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quos expedita iste id vero cumque reiciendis explicabo commodi accusantium exercitationem! Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, omnis. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, aspernatur?">
                </v-textarea>
            </v-card-item>
            <v-card-actions>
                <v-spacer/>
                <v-btn  @click="emit('closeEditPostDialog')">Cancel</v-btn>
                <v-btn color="blue" @click="emit('closeEditPostDialog')">Update</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
</template>