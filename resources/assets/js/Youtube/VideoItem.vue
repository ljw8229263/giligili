<template>
    <div class="VideoItem__wrapper">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" :src="videoImage" :alt="videoImage">
            <div class="card-body">
                <h5 class="card-title">{{videoTitle}}</h5>
                <p class="card-text">{{videoDescription}}</p>
                <router-link :to="{name: 'youtube-video', params: {id: video.id.videoId, video: video}}" class="btn btn-primary">
                    Show Video
                </router-link>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['video'],

        computed: {
            videoTitle() {
                return this.video.snippet.title;
            },

            videoDescription() {
                return this.video.snippet.description;
            },

            videoImage() {
                return this.video.snippet.thumbnails.high.url;
            },
        }
    }
</script>

<style scoped>
    .VideoItem__wrapper {

    }
    .card {
        margin: 0px 5px 0px 0px;
        .card-img-top {
            max-height: 210px;
        }
    }
</style>