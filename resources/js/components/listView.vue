<template>
    <div>
        <div v-for="(item, index) in items" :key="index">
            <list-item-vue
            :item="item"
            class="item"
            />
        </div>
    </div>
</template>

<script>
import listItemVue from "./listItem.vue";
export default {
    components: {
         listItemVue
    },
    data: function () {
        return {
            items: [],
        }
    },
    methods: {
        getTodos () {
            axios.get('api/todos').then(res=> {
                if(res.status == 200){
                    this.items = res.data.todos
                }
            })
        }
    },
    created(){
        this.getTodos()
    }
};
</script>

<style scoped>
    .item{
        padding: 12px;
        margin-top: 5px;
        border-style: solid;
        border-color: blue;
        border-radius: 7px;
        border-width: 1px;

    }
</style>
