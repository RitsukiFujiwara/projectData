<template>
    <div id="app">
        <button v-on:click="show" class="button">show!</button>
        <modal name="hello-world" :draggable="true" :resizable="true">
            <div class="modal-header">
            <h2>Modal title</h2>
            </div>
            <div class="modal-body">
            <p>you're reading this text in a modal!</p>
            <button v-on:click="hide">閉じる</button>
            </div>  
        </modal>
    </div>
</template>

<script>
Vue.use(window["vue-js-modal"].default);

    export default {
        el: '#app',
        methods: {
            show : function() {
            this.$modal.show('hello-world');
            },
            hide : function () {
            this.$modal.hide('hello-world');
            },
        }
    }
</script>