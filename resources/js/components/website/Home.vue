<template>


        <nav-section/>


        <main-section/>


        <about-section/>





        <footer-section/>



</template>

<script>
    import NavSection from '../../components/sections/Nav.vue';
    import FooterSection from '../../components/sections/Footer.vue'
    import MainSection from '../../components/sections/Main.vue'
    import AboutSection from '../../components/sections/About.vue'

    export default {

        components: {

            NavSection,
            FooterSection,
            MainSection,
            AboutSection,

        },

        setup: () => ({

            greeting: 'Hello World from Vue 3!'

        }),

        data() {

            return {

                greeting: 'Hello World from Vue 3!',


            }

        },

        computed: {

            logo() {
                return 'images/logo-light.svg'
            },

        }

    }
</script>


<style>


</style>
