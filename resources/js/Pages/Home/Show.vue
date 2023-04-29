<script setup>
import MacTerminal from "@/components/MacTerminal.vue";
import { defineProps } from 'vue';

const props = defineProps({
  clientIP: {
    type: String,
    required: true
  }
});
</script>

<template>
  <div class="relative bg-black/95 h-screen w-screen">
    <MacTerminal :clientIP="clientIP"/>
  </div>
</template>