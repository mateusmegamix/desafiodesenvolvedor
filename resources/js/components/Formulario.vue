<template>
	<form :class="css" :action="action" :method="defineMethod" :enctype="enctype">
		<input v-if="alterMethod" type="hidden" name="_method" :value="alterMethod">
		<input v-if="token" type="hidden" name="" :value="token">
		<slot></slot>
	</form>
</template>

<script>
export default {
	props:['css','action','method','enctype','token'],
	data: function(){
		return {
			alterMethod:""
		}
	},
	computed:{
		defineMethod:function(){
			if(this.method.toLowerCase() == "post" || this.method.toLowerCase() == "get"){
				return this.method.toLowerCase();
			}

			if(this.method.toLowerCase() == "put"){
				this.alterMethod = "put";
			}

			if(this.method.toLowerCase() == "delete"){
				this.alterMethod = "DELETE";
			}

			return "post";	
		}
	}
};
</script>
