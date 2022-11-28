<template>
    <div class="addItem">
        <input type="text" class="input" placeholder="Add Todo" v-model="item.name">
        <button type="submit" class="addButton" @click="addItem()">
            <font-awesome-icon icon="plus" class="plus" />
        </button>
    </div>
</template>

<script>

import listViewVue from './listView.vue';
    export default {
        data: function () {
            return {
                item : {
                    name : ''
                }
            }
        },
        components:{listViewVue},
        methods: {
            addItem() {
                if(this.item.name !== '') {
                    axios.post('api/todos/store/', {
                        todos: this.item.name
                    }).then(res => {
                        if(res.status == 201 || res.status == 200 || res.status == 'success'){
                            alert('Item Added!');
                            this.$emit('reloadTodos');
                        }
                    })
                }
            }
        }
    }
</script>
<style scoped>
    .addItem{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 25px;
    }
    .input{
        border-radius: 4px;
        border: 1px solid blue;
        outline: none;
        padding: 5px;
        height: 30px;
        width: 100%;
    }
    .addButton{
        height: 42px;
        width: 42px;
        border: 1px solid blue;
        border-bottom-right-radius: 4px;
        border-top-right-radius: 4px;
        background-color: white;
    }
    .plus{
        font-size: 20px;
        color: blue;
    }
</style>
