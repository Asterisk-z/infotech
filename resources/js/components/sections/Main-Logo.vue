<template>


    <div class="logo-otr">
        <a href="#" class="logo-a">
            <img class="logo-img" v-bind:src="logo" alt="brand-logo">
        </a>
    </div>

</template>

<script>

    

    export default {

        components: {

          

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

        }


    }
</script>
