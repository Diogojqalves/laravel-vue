<template>
    <div v-for="list in listing" :key="list.id">
      <div>
      <Link :href="`/listing/${list.id}`">
        <ListingAddress :listing="list" />
      </Link>
    </div>
    <div>
      <Link :href="`/listing/${list.id}/edit`">Edit</Link>
    </div>
    <div>
      <Link :href="`/listing/${list.id}`" method="DELETE" as="button">Delete</Link>
    </div>

    </div>
  </template>
  
<script setup>

import {Link} from '@inertiajs/inertia-vue3'
import ListingAddress from '@/Components/ListingAddress.vue'
  defineProps({
    listing: Array,
  })

</script>