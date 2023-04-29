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

<style>
::-webkit-scrollbar {
  width: 8px; /* Ancho del scrollbar */
  border-radius: 8px; /* Radio de la esquina del scrollbar */
}

::-webkit-scrollbar-thumb {
  background-color: #888; /* Color del botón del scrollbar */
  border-radius: 8px; /* Radio de la esquina del botón */
}

::-webkit-scrollbar-thumb:hover {
  background-color: #555; /* Color del botón del scrollbar al pasar el ratón */
}

::-webkit-scrollbar-track {
  border-radius: 8px; /* Radio de la esquina de la pista del scrollbar */
}
</style>
