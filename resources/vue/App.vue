<template>
    <div id="app_wrapper">

        <header-component
            :is-auth="isAuth"></header-component>

        <main-component></main-component>

        <footer-component></footer-component>

        <auth-modal></auth-modal>


    </div>
</template>

<script>

    import HeaderComponent from './layouts/HeaderComponent.vue';
    import MainComponent from './layouts/MainComponent.vue';
    import FooterComponent from './layouts/FooterComponent.vue';
    import AuthModal from './modals/AuthModal.vue';

    export default {
        components: {
            HeaderComponent,
            MainComponent,
            FooterComponent,
            AuthModal,
        },

        beforeCreate() {
            store.dispatch('setAuthUser');
        },

        computed: {
            isAuth () {
                return (state.authUser) ? true : false;
            }
        }
    }
</script>
