<template>
    <div class="uk-margin">
        <div class="uk-inline uk-width-1-1">
            <span
                v-if="hasIcon"
                class="uk-form-icon"
                :uk-icon="iconAttr"></span>
            <input class="uk-input uk-form-large"
                    :class="customClass"
                    :type="type"
                    :name="name"
                    :placeholder="placeholder"
                    :data-validators="validators"
                    :data-min_lenght="min_lenght"
                    :data-max_lenght="max_lenght"
                    v-model="value">
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            icon: {
                type: String,
                required: false,
                default: ""
            },
            customClass: {
                type: String,
                required: false,
            },
            type: {
                type: String,
                required: true,
            },
            name: {
                type: String,
                required: true,
            },
            placeholder: {
                type: String,
                required: false,
            },
            validators: {
                type: String,
                required: false,
            },
            min_lenght: {
                type: String,
                required: false,
            },
            max_lenght: {
                type: String,
                required: false,
            },
            modelValue: {
                type: String,
                default: "",
            },

        },

        emits: ['update:modelValue'],

        computed: {

            value: {
                get() {
                    return this.modelValue;
                },
                set(value) {
                    this.$emit('update:modelValue', value);
                }
            },

            hasIcon() {
                return (this.icon == "")? false : true;
            },
            iconAttr() {
                return (this.icon == "")? "" : `icon: ${this.icon}`;
            }
        }
    }
</script>
