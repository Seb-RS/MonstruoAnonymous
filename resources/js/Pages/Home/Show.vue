<script setup>
import MacTerminal from "@/components/MacTerminal.vue";
import AnonymousImage from "../../Components/AnonymousImage.vue";
import CodingImage from "@/Components/CodingImage.vue";
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
    <CodingImage/>
    <MacTerminal :clientIP="clientIP"/>
    <AnonymousImage/>
  </div>
</template>