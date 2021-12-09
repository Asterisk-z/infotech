<template>


        <nav-section/>








       


        
        <footer-section/>



</template>

<script>
    import NavSection from '../../components/sections/Nav.vue';
    import FooterSection from '../../components/sections/Footer.vue'

    export default {

        components: {

            NavSection,
            FooterSection,

        },

        setup: () => ({

            greeting: 'Hello World from Vue 3!'

        }),

        data() {

            return {
                
                greeting: 'Hello World from Vue 3!'

            }

        },

        computed: {

            logo() {
                return 'images/logo-light.svg'
            },

        }

    }
</script>
