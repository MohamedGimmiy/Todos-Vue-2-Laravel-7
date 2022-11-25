<template>
    <div class="addItem">
        <input type="text" class="input" placeholder="Add Todo">
        <button type="submit" class="addButton"></button>
    </div>
</template>

<script>

    export default {

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
</style>
