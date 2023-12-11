<script setup>

    import BarangayAdminLayout from '../Layouts/BarangayAdminLayout.vue'
    defineOptions({ layout: BarangayAdminLayout })
    defineProps({ officials: Object })

</script>
<template>
    {{ officials }}
    <h1>Officials info page</h1>
</template>
