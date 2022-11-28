<template>
    <div class="item">
        <input type="checkbox" @change="updateTodo()" v-model="item.completed">
        <span :class="['itemText', item.completed? 'completed' : '']">{{item.todos}}</span>
        <button class="edit">
            <font-awesome-icon icon="edit" />
        </button>
        <button class="delete">
            <font-awesome-icon icon="trash" />
        </button>
    </div>
</template>

<script>
export default {
    props: ['item'],
    methods: {
        updateTodo(){
            axios.post('api/todos/update/' + this.item.id, {
                completed: this.item.completed
            }).then(res => {
                if(res.status == 201 || res.status == 200 || res.status == 'success'){
                    alert('Item Updated successfully');
                }
            })
        }
    }
}
</script>

<style>
    .item{
        display:flex;
        justify-content: center;
        align-items: center;
    }
    .completed {
        text-decoration: line-through;
        color: #999999;
    }
    .itemText {
        width: 100%;
        margin-left: 20px;
        font-weight: 800;
        font-size: 20px;
    }
    .edit{
        color: blue;
        border-radius: 5px;
        outline: none;
        border: none;
        margin-right: 5px;
        background-color: white;
        font-size: 17px;
    }
    .delete{
        color: red;
        border-radius: 5px;
        border: none;
        outline: none;
        background-color: white;
        font-size: 17px;
    }
</style>
