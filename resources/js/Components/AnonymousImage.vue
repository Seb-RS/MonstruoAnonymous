<template>
  <img
    class="absolute inset-0 m-auto opacity-80 w-[200px] h-[200px] md:w-[400px] md:h-[400px] glitch"
    src="/storage/assets/anonymous.png"
    alt="anonymous"
  />
</template>

<script>
import { PowerGlitch } from "powerglitch";
export default {
  mounted() {
    PowerGlitch.glitch(".glitch", {
      timing: {
        duration: 4000,
        easing: "ease-in-out",
      },
    });
  },
};
</script>
