<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";
export default {
  components: {
    AdminLayout,
  },
  props: ["cats"],
  data() {
    return {
      casList: this.cats,
      url: null,
      form: {
        name: "",
        categ: "",
        image: "",
        description: "",
        price: "",
      },
    };
  },
  methods: {
    submit() {
      if (this.$refs.photo) {
        this.form.image = this.$refs.photo.files[0];
      }
      this.$inertia.post("/storearticle", this.form);
    },
    previewImage(e) {
      const file = e.target.files[0];
      this.url = URL.createObjectURL(file);
    },
    selectChange(e) {
      const currentValue = e.target.value;
    },
  },
};
</script>

<template>
  <AdminLayout>
    <div class="w-[80%] m-[auto] h-[auto]">
      <div class="rounded shadow h-[auto]">
        <div class="text-[30px]">Vendre un article</div>
        <div class="w-[80%] m-[auto] my-3">
          <form
            method="post"
            @submit.prevent="submit"
            enctype="multipart/form-data"
          >
            <div class="mb-4">
              <label class="block gray-700 text-sm font-bold mb-2" for="name">
                Nom de l'article
              </label>
              <input
                type="text"
                v-model="form.name"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                placeholder="nom du project"
                id="name"
              />
            </div>
            <div class="mb-4">
              <label class="block gray-700 text-sm font-bold mb-2" for="cat">
                Categorie
              </label>
              <select
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="cat"
                @change="selectChange"
                v-model="form.categ"
              >
                <option
                  v-for="index in this.casList"
                  :key="index.id"
                  :value="index.id"
                >
                  {{ index.title }}
                </option>
              </select>
            </div>
            <div class="mb-4">
              <label class="block gray-700 text-sm font-bold mb-2" for="name">
                Selectionner l'image
              </label>

              <input
                type="file"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name"
                @change="previewImage"
                ref="photo"
              />
              <img
                v-if="url"
                :src="url"
                alt="image du projet"
                class="w-[400px] h-[300px]"
              />
            </div>

            <div class="mb-4">
              <label
                class="block text-gray-700 text-sm font-bold mb-2"
                for="msg"
              >
                Descrition
              </label>
              <textarea
                name="msg"
                v-model="form.description"
                id="msg"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                cols="30"
                rows="5"
                placeholder="description"
              ></textarea>
            </div>
            <div class="mb-4">
              <label class="block gray-700 text-sm font-bold mb-2" for="name">
                Price
              </label>
              <input
                type="number"
                v-model="form.price"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name"
              />
            </div>

            <div class="w-full flex justify-right">
                <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 rounded focus:outline-none focus:shadow-outline px-2"
                type="submit"
                >
                Publish
                </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </AdminLayout>
</template>