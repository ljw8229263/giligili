<template>
    <div class="YoutubeDash__wrapper">
       <video-group :videos="this.videos"></video-group>
    </div>
</template>

<script>
    import VideoGroup from './VideoGroup';

    import Search from './Search';

    export default {

        components: {
            VideoGroup
        },

        created() {
            Search({
                apiKey: 'AIzaSyAr6HXyB0GO3Vj_rtxy4lSszRxVHROyrbY',
                term: 'x-men',
            }, response => this.videos = response);
        },

        data() {
          return {
              videos: null,
          }
        }
    }
</script>

<style scoped>
    .YoutubeDash__wrapper {

    }
</style>