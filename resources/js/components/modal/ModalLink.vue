<template>
	<div>
		<span v-if="item">
			<button type="button"  @click="preencheFormulario()" data-toggle="modal" :data-target="'#'+nome" :class="estilo">{{descricao}}</button>
		</span>
		<span v-if="!item">
			<button type="button" data-toggle="modal" :data-target="'#'+nome" :class="estilo">{{descricao}}</button>
		</span>
	</div>
</template>
<script>
export default{
	props:['item','nome','descricao','estilo','url'],
	methods:{
		preencheFormulario: function(){
			axios.get(this.url + this.item.id).then(res=>{
				this.$store.commit('setItem',res.data);
			});
		}	
	}
};
</script>