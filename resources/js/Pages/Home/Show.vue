<script setup>
import MacTerminal from "@/components/MacTerminal.vue";
import AnonymousImage from "../../Components/AnonymousImage.vue";
import { defineProps } from 'vue';

const props = defineProps({
  clientIP: {
    type: String,
    required: true
  }
});
</script>

<template>
  <div class="relative bg-black/95 h-screen w-screen overflow-hidden">
    <MacTerminal :clientIP="clientIP"/>
    <AnonymousImage/>
  </div>
</template>