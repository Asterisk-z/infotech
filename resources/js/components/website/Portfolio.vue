<template>


        <nav-section/>


        <hero-section text="Portfolio"/>


        <portfolio-section/>

        <footer-section/>


</template>

<script>
    import NavSection from '../../components/sections/Nav.vue';
    import FooterSection from '../../components/sections/Footer.vue'
    import HeroSection from '../../components/sections/Hero.vue'
    import PortfolioSection from '../../components/sections/Portfolio.vue'

    export default {

        components: {

            NavSection,
            FooterSection,
            HeroSection,
            PortfolioSection,

        },

        setup: () => ({

            greeting: 'Hello World from Vue 3!'

        }),

        data() {

            return {

                greeting: 'Hello World from Vue 3!',
                teams: [
                    {
                        image: 'assets/img/team/munish.jpg',
                        name: 'Munish Rana',
                        designation: 'Chief Executive Officer'
                    },
                    {
                        image: 'assets/img/team/andor.jpg',
                        name: 'Andor E. Ofre',
                        designation: 'Software Engineer'
                    },
                    {
                        image: 'assets/img/team/ankush.jpg',
                        name: 'Ankush Bhatia',
                        designation: 'Social Media Expert'
                    },
                    {
                        image: 'assets/img/team/olang.jpg',
                        name: 'Olang A.O. Daniel',
                        designation: 'Software Engineer'
                    },
                    {
                        image: 'assets/img/team/patrick.jpg',
                        name: 'Patrick Odey',
                        designation: 'Software Engineer'
                    },
                ]


            }

        },

        computed: {

            image() {
                return 'assets/img/cover-img14.png';
            },

            image_two() {
                return 'assets/img/list-icon.svg';
            }

        }

    }
</script>


<style>


</style>
