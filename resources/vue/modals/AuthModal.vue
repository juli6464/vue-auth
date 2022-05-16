<template>
            <!-- This is the modal -->
        <div id="auth-modal" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <!-- This is the form title section -->
                <ul class="uk-tab uk-flex-center" uk-grid uk-switcher="animation: uk-animation-fade">
                    <li><a href="#">Acceso</a></li>
                    <li><a href="#">Registro</a></li>
                    <li class="uk-hidden"><a>Recuperar contraseña</a></li>
                </ul>
                <!-- This is the  form -->
                <ul class="uk-switcher uk-margin">
                    <!-- This is the registration form -->
                    <li>
                        <login-form
                            @submit="submitForm"></login-form>
                    </li>
                    <!-- This is the login form -->
                    <li>
                        <register-form
                            @submit="submitForm"></register-form>
                    </li>
                    <!-- This is the forgot password form -->
                    <li>
                        <reset-pass-form
                            @submit="submitForm"></reset-pass-form>
                    </li>
                </ul>
            </div>
        </div>
</template>

<script>

    import LoginForm from '../forms/LoginForm.vue';
    import RegisterForm from '../forms/RegisterForm.vue';
    import ResetPassForm from '../forms/ResetPassForm.vue';

    export default {
        components: {
            LoginForm,
            RegisterForm,
            ResetPassForm,

        },

        methods: {
            submitForm(payload) {

                //console.log(payload);

                store.dispatch('setAuthUser');

                UIkit.notification({
                    message: payload.message,
                    status: 'success',
                });

                UIkit.modal('#auth-modal').hide();

                // ...
            }
        }
    }
</script>
