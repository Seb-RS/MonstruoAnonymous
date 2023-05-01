<script>
export default {
  props: {
    clientIP: String,
  },
  data() {
    return {
      pingList: [],
      currentDate: "",
    };
  },
  methods: {
    addPing() {
      if (this.pingList.length === 20) {
        clearInterval(this.interval);
        return;
      }
      this.pingList.push(
        "64 bytes from " +
          this.clientIP +
          ": icmp_seq=" +
          this.pingList.length +
          " ttl=242 time=" +
          (Math.random() * 10.0 + 20.0).toFixed(3) +
          " ms"
      );
    },
    setActualDate() {
      const date = new Date();
      const formattedDate =
        date.toString().slice(0, 3) +
        " " +
        date.toString().slice(4, 7) +
        " " +
        date.getDate() +
        " " +
        date.getHours() +
        ":" +
        date.getMinutes() +
        ":" +
        date.getSeconds();
      this.currentDate = formattedDate;
    },
  },
  mounted() {
    setInterval(this.addPing, 1000);
    this.setActualDate();
  },
};
</script>

<template>
  <div class="rotateAX absolute flex mt-10 inset-0 m-auto text-white opacity-70 md:ml-56">
    <div class="md:w-[70%] mx-auto">
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
        <div
          class="pl-1 pt-1 md:pt-[1px] text-white font-mono text-xs md:text-lg lg:text-xl h-[95%] overflow-y-auto mt-[1px]"
          id="console"
        >
          <p class="pb-1 md:pb-[1px]">Last login: {{ currentDate }} on ttys002</p>
          <p class="pb-1 md:pb-[1px]">
            Monstruo-Servers-de-Seb-2:~ sebdev$ ping -c 20 {{ clientIP }}
          </p>
          <p class="pb-1 md:pb-[1px]">PING {{ clientIP }}: 56 data bytes</p>
          <p v-for="(ping, index) in pingList" :key="index" class="pb-1 md:pb-[1px]">
            {{ ping }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
.rotateAX {
  transform: rotate3d(1, 0, 0, 6deg) rotate3d(0, 1, 0, 23deg);
}
</style>
