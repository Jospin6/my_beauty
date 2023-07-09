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
            <div class="pt-4 pr-3 flex">
                <span><a :href="route('home')"><img src="images/user.png" class="w-[20px] ml-2 h-[20px]" alt=""></a></span>
            </div>
        </div>

        <main>
            <slot />
        </main>
    </div>
</template>