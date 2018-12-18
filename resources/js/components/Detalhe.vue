<template>
	<ul class="list-group">
		<li class="list-group-item d-flex justify-content-between align-items-center" v-for="(item,index) in lista">
			{{item}}
			<span :class="defineEstilo">{{comparaItem(index)}}</span>
		</li>
	</ul>
</template>
<script> 
export default{
	props:['lista','datas','estilo'],
	computed:{
		defineEstilo(){
			if(this.estilo){
				return 'badge badge-'+this.estilo
			}else{
				return 'badge '
			}
			
		}
	},
	methods:{
		comparaItem: function(item){
			//Compara os itens definidos no props com os itens da store
			//Exibe somente os itens definidos no props
			//Caso seja definido valores de datas no props, retorna a mesma formatada em d/m/Y
			var dados = this.$store.state.item;
			var dataParaFormatar = this.datas;
			$.each(dados,function(chave,valor){
				if(chave == item){//Se o dado da store for igual o item definido no props

					//Realizando a troca de valor ENUM
					if(chave == "admin"){
						valor = (valor == "S")? "Sim":"Não";
					}
					if (chave == "sex"){
						valor = (valor == "F")? "Feminino":"Masculino"
					}

					$.each(dataParaFormatar,function(index,val){//Se houver datas definidas no props
						if(val == chave){//Compara a data definida no props com a data da lista, se for igual, formata
							var data = null;
							var hora = null;
							valor = valor.toString();
							valor = valor.split('-');
							valor[2] = valor[2].split(' ');//separa em espaço para verificar se é datetime:"d/m/Y H:i:s"
							if(valor[2][1]){//se não for vazio é porque possui hora, logo, é datetime

								hora = valor[2][1];
								data = valor[2][0] + '/' + valor[1] + '/' + valor[0] + ' ';

								valor = data+' '+hora;

							}else{//É somente date
								valor = valor[2] + '/' + valor[1] + '/' + valor[0];
							}


						}
					})
					dados = valor;
				}
			})
			return dados;
		},
	}
};
</script>