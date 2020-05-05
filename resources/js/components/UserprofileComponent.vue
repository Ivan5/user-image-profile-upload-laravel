<template>
    <form method="POST" enctype="multipart/form-data">
        <div class="custom-file">
            <input
                type="file"
                @change="imageSelected"
                class="custom-file-input"
                id="customFile"
            />
            <label for="customFile" class="custom-file-label"
                >Choose an image</label
            >
        </div>
        <div v-if="imagepreview">
            <img
                class="figure-img img-fluid rounded"
                style="max-height:100px;"
                :src="imagepreview"
                alt=""
            />
        </div>
        <button class="btn btn-success mt-5" type="submit">
            Upload profile
        </button>
    </form>
</template>
<script>
export default {
    data() {
        return {
            image: null,
            imagepreview: null
        };
    },
    methods: {
        imageSelected(e) {
            this.image = e.target.files[0];

            let reader = new FileReader();
            reader.readAsDataURL(this.image);
            reader.onload = e => {
                this.imagepreview = e.target.result;
            };
        }
    }
};
</script>
