<template>


        <nav-section/>


        <main-section/>


        <about-section/>


        <portfolio-section/>


        <footer-section/>



</template>

<script>
    import NavSection from '../../components/sections/Nav.vue';
    import FooterSection from '../../components/sections/Footer.vue'
    import MainSection from '../../components/sections/Main.vue'
    import AboutSection from '../../components/sections/About.vue'
    import PortfolioSection from '../../components/sections/Portfolio.vue'

    export default {

        components: {

            NavSection,
            FooterSection,
            MainSection,
            AboutSection,
            PortfolioSection,

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
