<template>


        <nav-section/>


        <hero-section text="Meet Our Team"/>



        <div class="feature-main">
            <div class="container-fluid">
                <div class="row row-custom">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-otr" v-for="team in teams">
                        <div class="col-inr box-1 text-center">
                            <div class="cover-img-otr">
                                <a href="#">
                                    <img class="cover-img" :src="team.image" alt="" id="team">
                                </a>
                            </div>
                            <a href="#" class="art-name heading-MB">{{ team.name }}</a>
                            <a href="#" class="art-name heading-SB">{{ team.designation }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer-section/>


</template>

<script>
    import NavSection from '../../components/sections/Nav.vue';
    import FooterSection from '../../components/sections/Footer.vue'
    import HeroSection from '../../components/sections/Hero.vue'
    import AboutSection from '../../components/sections/About.vue'

    export default {

        components: {

            NavSection,
            FooterSection,
            HeroSection,
            AboutSection,

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
                        image: 'assets/img/team/patrick.jpg',
                        name: 'Patrick Odey',
                        designation: 'Software Engineer'
                    },
                    {
                        image: 'assets/img/team/kuldeep.jpg',
                        name: 'Kuldeep Singh',
                        designation: 'Sales Manager'
                    },
                    {
                        image: 'assets/img/team/olang.jpg',
                        name: 'Olang A.O. Daniel',
                        designation: 'Software Engineer'
                    },
                    {
                        image: 'assets/img/team/ravi.jpg',
                        name: 'Ravi Kumar',
                        designation: 'Sales Manager'
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
