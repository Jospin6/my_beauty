<script>
import { Head, Link } from '@inertiajs/vue3';
import MyBeauty from '@/Layouts/MyBeauty.vue';

export default{
    data() {
        return {
            form: {
                name: "",
                mdp: "",
                check: "",
            },
            url: null,
        }
    },
    methods: {
        submit(){
            this.$inertia.post('/storelog', this.form)
        }
    }
}

</script>

<template>
    <div>
        <div class="w-[400px] h-[500px] m-[auto] pt-4 mt-[80px] relative">
            <div class="m-[auto] w-full flex justify-center ">
                <img src="images/male_user.png" width="80" height="80" alt="">
            </div>
            <div class="m-[auto] w-full flex justify-center">
                <span class="text-black text-[40px]">Login</span>
            </div>
            <form method="post" @submit.prevent="submit">
                <input type="text" 
                    class="h-[35px] w-[400px] rounded-lg mt-3" 
                    v-model="form.name" placeholder="Name"
                >
                <input type="text" 
                    class="h-[35px] w-[400px] rounded-lg mt-3" 
                    v-model="form.mdp" placeholder="Password"
                >
                <div class="flex">
                    <input type="checkbox"
                        class="mt-6 ml-4 border-black focus-none" 
                        v-model="form.check" id="check"
                    >
                    <span class="mt-6 ml-2"><label for="check">rester connecter</label></span>
                </div>
                <button class="bg-[#616161] mt-4 hover:bg-blue-700 text-white font-bold py-2 rounded-lg 
                    focus:outline-none w-full focus:shadow-outline px-2" type="submit">
                        Login
                </button>
            </form>
            <div class="absolute bottom-6 left-0 w-full text-center">
                <span>if you have no count you can <a :href="route('Signin')" class="text-blue-500">signin</a></span>
            </div>
        </div>
        
    </div>
</template>