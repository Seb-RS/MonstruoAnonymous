<script>
export default {
  props: {
    clientIP: String,
  },
  data() {
    return {
      pingList: [],
    };
  },
  created() {
    this.pingList.push("64 bytes from " + this.clientIP + " icmp_seq=1 ttl=242 time=");
  },
  methods: {
    addPing() {
      this.pingList.push(
        "64 bytes from " +
          this.clientIP +
          " icmp_seq=" +
          (this.pingList.length + 1) +
          " ttl=242 time="
      );
    },
  },
  mounted() {
    setInterval(this.addPing, 1000); // Agregar un nuevo ping cada 3 segundos
  },
};
</script>

<template>
  <div class="rotateAX absolute flex mt-10 inset-0 m-auto text-white opacity-70">
    <div class="md:w-1/2 mx-auto">
      <div
        class="w-full shadow-2xl subpixel-antialiased rounded max-h-[90%] h-[90%] bg-black border-black mx-auto"
      >
        <div
          class="flex items-center h-6 rounded-t bg-gray-100 border-b border-gray-500 text-center text-black"
          id="headerTerminal"
        >
          <div
            class="flex ml-2 items-center text-center border-red-900 bg-red-500 shadow-inner rounded-full w-3 h-3"
            id="closebtn"
          ></div>
          <div
            class="ml-2 border-yellow-900 bg-yellow-500 shadow-inner rounded-full w-3 h-3"
            id="minbtn"
          ></div>
          <div
            class="ml-2 border-green-900 bg-green-500 shadow-inner rounded-full w-3 h-3"
            id="maxbtn"
          ></div>
          <div class="mx-auto pr-16" id="terminaltitle">
            <p class="text-center text-xs">sebdev — ping {{ clientIP }} — 109x31</p>
          </div>
        </div>
        <div class="pl-1 pt-1 text-white font-mono text-xs h-[95%] overflow-y-auto" id="console">
          <p class="pb-1">Last login: Wed Sep 25 09:11:04 on ttys002</p>
          <p class="pb-1">Monstruo-Servers-de-Seb-2:~ sebdev$ ping {{ clientIP }}</p>
          <p v-for="(ping, index) in pingList" :key="index" class="pb-1">
            {{ ping }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
.rotateAX{
    transform: rotate3d(1, 0, 0, 6deg) rotate3d(0, 1, 0, 20deg);
}
</style>