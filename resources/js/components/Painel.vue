<template>
    <div class="card">
        <div class="card-header">Painel</div>
        <div class="card-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
};
</script>
