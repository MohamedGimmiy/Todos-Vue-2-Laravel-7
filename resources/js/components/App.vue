<template>
    <div>
        <h1 style="margin-top: 200px; text-align: center;">Todo List</h1>
        <div class="todoListContainer">
            <add-item-form-vue />
            <list-view-vue />
        </div>
    </div>
</template>

<script>
    import addItemFormVue from './addItemForm.vue';
    import listViewVue from './listView.vue';
        export default {
            components: {
                addItemFormVue,
                listViewVue,
            }
        }
</script>


<style scoped>
    .todoListContainer {
        width: 400px;
        margin: auto;
        margin-top: 50px;
    }
</style>
