<template>
    <div class="Search__wrapper">
        <div class="container">
            <form v-on:submit.prevent="handleFormSubmit">
                <input
                        type="text"
                        class="form-control"
                        v-model="searchString">
            </form>
        </div>
    </div>
</template>

<script>
    import Search from './Search';

    export default {
        data() {
            return {
                searchString: '',
            }
        },

        methods: {
            handleFormSubmit() {
                window.eventBus.$emit('searchForYoutubeStarted');

                Search({
                    apiKey: 'AIzaSyAr6HXyB0GO3Vj_rtxy4lSszRxVHROyrbY',
                    term: this.searchString,
                    items: 10,
                }, data => {
                    window.eventBus.$emit('searchResultFromYoutube', data);
                });
            }
        }
    }
</script>

<style scoped>
    .Search__wrapper {
        margin-bottom: 10px;
    }
</style>