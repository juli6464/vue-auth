import axios from 'axios';
import { createStore} from 'vuex'

const store = createStore({

    state() {
        return {
            authUser: null,
        }
    },
    mutations: {
        auth(state, user) {
            state.authUser = user
        }
    },
    actions: {
        setAuthUser() {
            axios.get('sanctum/csrf-cookie').then(res => {

                axios.get('api/get-auth-user').then(res => {
                    this.commit('auth', res.data)

                    if(res.data.validation) {

                        this.commit('auth', res.data.user);
                    } else {

                        this.commit('auth', null);
                    }
                })
                .catch( error => {
                 });


        })
        .catch(error => {

            console.log(error);
        })
    }
    }
});


export default store;
