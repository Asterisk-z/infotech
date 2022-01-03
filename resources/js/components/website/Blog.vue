<template>


        <nav-section/>


        <hero-section text="Blog"/>


        <div class="blog-main-inr">
            <div class="container-fluid">
                <div class="row row-custom">
                    <div class="col-lg-4 col-md-6 col-otr">
                        <div class="col-inr box-1">
                            <a href="#" class="img-otr">
                                <img class="blog-img" :src="image" alt="blog">
                            </a>
                            <div class="content-otr">
                                <a href="#" class="heading heading-h4">Welcome to Akshiptika infotech</a>
                                <p class="date-otr heading-S">Olang Daniel  |  <span class="date-inr">1st January, 2022</span></p>
                                <p class="desc heading-S">Mollis pellentesque pellentesque feugiat risus ut amet nunc. Volutpat nam convallis urna sollicitudin nunc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-otr">
                        <div class="col-inr box-1">
                            <a href="#" class="img-otr">
                                <img class="blog-img" :src="image" alt="blog">
                            </a>
                            <div class="content-otr">
                                <a href="#" class="heading heading-h4">Welcome to Akshiptika infotech</a>
                                <p class="date-otr heading-S">Olang Daniel  |  <span class="date-inr">1st January, 2022</span></p>
                                <p class="desc heading-S">Mollis pellentesque pellentesque feugiat risus ut amet nunc. Volutpat nam convallis urna sollicitudin nunc.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-otr">
                        <div class="col-inr box-1">
                            <a href="#" class="img-otr">
                                <img class="blog-img" :src="image" alt="blog">
                            </a>
                            <div class="content-otr">
                                <a href="#" class="heading heading-h4">Welcome to Akshiptika infotech</a>
                                <p class="date-otr heading-S">Olang Daniel  |  <span class="date-inr">1st January, 2022</span></p>
                                <p class="desc heading-S">Mollis pellentesque pellentesque feugiat risus ut amet nunc. Volutpat nam convallis urna sollicitudin nunc.</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-12 col-btn-otr">
                        <div class="col-btn-inr">
                            <a href="#" class="btn-primary-2 btn-more heading-SB">Load More</a>
                        </div>
                    </div> -->
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


            }

        },

        computed: {

            image() {
                return 'images/logo.png';
            },

            image_two() {
                return 'assets/img/list-icon.svg';
            },

            image_three() {
                return 'assets/img/list-icon.svg';
            },

            image_four() {
                return 'assets/img/list-icon.svg';
            }

        }

    }
</script>


<style>


</style>
