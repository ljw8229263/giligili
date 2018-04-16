<template>
    <div class="YoutubeDash__wrapper">
        <finder></finder>
        <div v-if="!loading">
            <video-group :videos="this.videos"></video-group>
        </div>

        <div v-if="loading">Loading...</div>
    </div>
</template>

<script>
    import VideoGroup from './VideoGroup';
    import Finder from './Finder';

    import Search from './Search';

    export default {

        components: {
            VideoGroup,
            Finder
        },

        created() {
            Search({
                apiKey: 'AIzaSyAr6HXyB0GO3Vj_rtxy4lSszRxVHROyrbY',
                term: 'x-men',
                items: 10,
            }, response => this.handleSearchResults(response));

            window.eventBus.$emit('searchForYoutubeStarted', () => {
                this.loading = true;
            });

            window.eventBus.$on('searchResultFromYoutube', videos => {
                console.log('search videos', videos);
                this.loading = false;
                this.videos = videos;
            });
        },

        data() {
          return {
              videos: null,
              loading: true,
          }
        },

        methods: {
            handleSearchResults(result) {
                this.loading = false;
                this.videos = result;
            }
        }
    }
</script>

<style scoped>
    .YoutubeDash__wrapper {

    }
</style>