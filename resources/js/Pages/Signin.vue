<script>
import { Head, Link } from '@inertiajs/vue3';
import MyBeauty from '@/Layouts/MyBeauty.vue';

export default{
    data() {
        return {
            form: {
                name: "",
                mail: "",
                mdp: "",
                
            },
            url: null,
        }
    },
    methods: {
        submit(){
            this.$inertia.post('/store', this.form)
        }
    }
}
</script>

<template>
    <div>
        <div class="w-[400px] h-[500px] m-[auto] pt-4 mt-[80px]">
            <div class="m-[auto] w-full flex justify-center ">
                <img src="images/male_user.png" width="80" height="80" alt="">
            </div>
            <div class="m-[auto] w-full flex justify-center">
                <span class="text-black text-[40px]">Signin</span>
            </div>
            <form method="post" @submit.prevent="submit">
                <input type="text" 
                    class="h-[35px] w-[400px] rounded-lg mt-3" 
                    v-model="form.name" placeholder="Name"
                >
                <input type="text" 
                    class="h-[35px] w-[400px] rounded-lg mt-3" 
                    v-model="form.mail" placeholder="Mail"
                >
                <input type="text" 
                    class="h-[35px] w-[400px] rounded-lg mt-3" 
                    v-model="form.mdp" placeholder="Password"
                >
                <button class="bg-[#616161] mt-4 hover:bg-blue-700 text-white font-bold py-2 rounded-lg 
                    focus:outline-none w-full focus:shadow-outline px-2" type="submit">
                        Login
                </button>
            </form>
        </div>
        
    </div>
</template>