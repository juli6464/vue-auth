export default [
    {
        path: "/reset-password/:token",
        name: "ResetPassword",
        component: () => import(/* webpackChunkName: "ResetPassword" */ "../../views/auth/ResetPasswordView.vue"),
        meta: {
            title: "Restablecer contraseña"
        }
    }
];
