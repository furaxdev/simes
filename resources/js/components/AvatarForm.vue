<template>
  <div>
    <div class="level">
      <img :="avatar" width="50" height="50" class="mr-1" />
      <h1 v-text="avatar"></h1>
    </div>

    <form v-if="canUpdate" method="POST" enctype="multipart/form-data">
      <image-upload name="avatar" class="mr-1" @loaded="onLoad"></image-upload>
    </form>
  </div>
</template>

<script>
import ImageUpload from "./ImageUpload.vue";
export default {
  props: ["user"],
  components: { ImageUpload },
  data() {
    return {
      avatar: "/storage/" + this.user.avatar_path
    };
  },
  computed: {
    canUpdate() {
      return this.authorize(user => user.id === this.user.id);
    }
  },
  methods: {
    onLoad(avatar) {
      this.avatar = avatar.src;
      this.persist(avatar.file);
    },
    persist(avatar) {
      let data = new FormData();
      data.append("avatar", avatar);
      console.log(data.avatar);
      axios
        .post(`/api/users/${this.user.name}/avatar`, {
          avatar: avatar
        })
        .then(() => flash("Avatar uploaded!"))
        .catch(error => {
          console.log(error.response);
        });
    }
  }
};
</script>
