<template>
	<div>
		<div class="form-group pull-right">
			<input type="search" class="form-control" placeholder="Buscar" v-model="buscar"/>
		</div>
		<div v-if="criar">
			<p>
				<modallink nome="criar" descricao="Criar" estilo="btn btn-primary"></modallink>
			</p>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col" v-for="(titulo,index) in titulos">{{titulo}}</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="(item,index) in lista" style="word-break: break-word">
					<td v-for="i in item">{{i}}</td>
					<td v-if="detalhe || editar || deletar" class="row">
						<span v-if="editar">
							<modallink nome="editar" descricao="Editar" estilo="btn btn-primary" url="usuarios/" :item="item"></modallink>
						</span>
						<span v-if="detalhe">
							<modallink nome="detalhe" descricao="Detalhe" estilo="btn btn-primary" url="usuarios/" :item="item"></modallink>
						</span v-if="deletar">
						<modallink :item="item" descricao="Deletar" nome="deletar" url="usuarios/"  estilo="btn btn-danger"></modallink>
					</form>
				</td>
			</tr>
		</tbody>
	</table>	
</div>
</template>

<script>
export default{
	props:['titulos','itens','criar','editar','deletar','action','detalhe','token'],
	data: function(){
		return {
			buscar: ''
		}
	},
	mounted(){
		//Seta usuários para store
		axios.get('all').then(res=>{
			this.$store.commit('setUsers',res.data);
		});
	},
	computed:{
		lista(){
			let lista = this.itens.data;
			if(this.buscar){//Se existir uma busca
				let todos = this.$store.state.users;
				return todos.filter(res => {
					res = Object.values(res);//transformando em um array de valores
					for(let k = 0; k<res.length; k++){
						if((res[k] + "").toLowerCase().indexOf(this.buscar.toLowerCase()) >= 0){
							
							return true;
						}				
					}
					return false;
				})			
			}
			return lista;
		}
	}
};
</script>

<style>

</style>