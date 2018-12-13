<template>
	<div>
		<ol class="breadcrumb">
			<li v-for="item in lista" ><a v-if="item.url" :class="defineClass" :href="item.url">{{item.titulo}}</a><span v-if="!item.url">&nbsp;/ {{item.titulo}}</span></li>
		</ol>
	</div>
</template>

<script>
export default {
	props:['lista'],
	computed:{
		defineClass: function(){
			if(this.url){
				return "breadcrumb-item active";
			}else{
				return "breadcrumb-item";
			}
		}
	}
};
</script>
