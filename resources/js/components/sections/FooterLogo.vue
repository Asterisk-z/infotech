<template>


 
    <div class="logo-otr">
        <a href="#" class="logo-inr">
            <img class="img-logo" :src="logo" alt="Logo">
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
