<template>


    <div class="logo-otr">
        <a href="#" class="logo-a">

            <img class="logo-img" v-bind:src="logo" alt="brand-logo" v-if="contrast == 'dark' ">
            <img class="logo-img" v-bind:src="darklogo" alt="brand-logo" v-else>
        </a>
    </div>

</template>

<script>



    export default {

        components: {



        },

        props: {
            contrast: String
        },

        setup: () => ({
            greeting: 'HeadLogo'
        }),

        data() {

            return {

            }

        },

        computed: {

            logo() {
                return 'images/logo-light.svg'
            },

            darklogo() {
                return 'images/logo.svg'
            },

        }


    }
</script>
