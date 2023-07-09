<script>
export default {
  data() {
    return {
    }
  },
  methods: {
    submit()
    {

    }
  }
}
</script>

<template>
    <div>
        <Head :title="title" />
        <div class="w-full h-[100px] text-black flex justify-between">
            <div class="pt-3 pl-4 text-[40px]">MyBeauty</div>
            <div class="mt-4 w-[500px] flex justify-center h-[35px] ">
                <input type="text" class="h-[35px] w-[470px] rounded-l-lg" v-model="searchQuery" placeholder="Rechercher...">
                <div class="w-[30px] h-[35px] bg-[#000129] rounded-r-lg pt-2 pl-1">
                    <img src="images/search.png" class="w-[20px]  mr-2" alt="">
                </div>
            </div>
            <div class="pt-4 pr-3 flex">
                <span class="relative">
                    <img src="images/shopping.png" class="w-[20px] h-[20px] mr-2" alt="">
                    <span class="bg-red-500 text-white rounded-full w-[10px] max-w-[20px] absolute top-1 right-2 text-[8px] text-center pb-[3px] h-[10px] max-h-[20px]">
                        1
                    </span>
                </span> | 
                <span><a :href="route('Login')"><img src="images/user.png" class="w-[20px] ml-2 h-[20px]" alt=""></a></span>
            </div>
        </div>

        <div class="w-full h-[40px] bg-[#000129] mb-2 flex justify-center text-white">
            <div class="leading-9 mr-3">lorem</div>
            <div class="leading-9 mr-3">Ipsum</div>
            <div class="leading-9 mr-3">lorem</div>
            <div class="leading-9 mr-3">Ipsum</div>
            <div class="leading-9 mr-3">lorem</div>
            <div class="leading-9 mr-3">Ipsum</div>
            <div class="leading-9 mr-3">lorem</div>
            <div class="leading-9 mr-3">Ipsum</div>
        </div>

        <main>
            <slot />
        </main>
    </div>
</template>
