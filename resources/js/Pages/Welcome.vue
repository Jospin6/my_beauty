<script>
import { Head, Link } from '@inertiajs/vue3';
import MyBeauty from '@/Layouts/MyBeauty.vue';
export default {
  components: {
    MyBeauty,
  },
  props: ["prods"],
  data() {
    return {
      prodList: this.prods,
      
    };
  },
  methods: {
    
  },
};
</script>

<template>
    <MyBeauty title="Home">
        <!-- <div class=" lg:gap-6 flex justify-center block"> -->
            <div class="grid lg:grid-cols-4 gap-6 w-[80%] m-[auto] h-[auto]">
                <!-- the card here -->
                <div v-for="prod in this.prodList" :key="prod.id">
                    <div class="overflow-hidden rounded shadow relative">
                        <img :src="prod.image" class="w-full h-[250px]" alt="">
                        <div>{{ prod.name }}</div>
                        <div class="w-full flex justify-between">
                            <span>${{ prod.price }}</span>
                            <span class="py-[2px] cursor-pointer px-[5px] rounded-lg bg-green-500 mr-2 mb-2 text-white">Buy</span>
                        </div>
                        <div class="absolute top-0 w-full flex justify-between p-2">
                            <span class="bg-[#616161] w-[25px] h-[25px] px-[2px] py-[2px] rounded-lg"><img src="images/heart_out.png" class="w-[20px] h-[20px]" alt=""></span>
                            <span class="bg-[#616161] w-[25px] h-[25px] px-[2px] py-[2px] rounded-lg"><img src="images/cartwhite.png" class="w-[20px] h-[20px]" alt=""></span>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </MyBeauty>
</template>

