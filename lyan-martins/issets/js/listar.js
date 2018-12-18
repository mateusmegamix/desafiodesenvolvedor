jQuery(document).ready(function($) {

});

function exclui($id){
	swal("OI");
	console.log($id);
	Swal({
	  title: 'Quer realmente exluir?',
	  text: "Você não podera reverter isso!",
	  type: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Sim'
	}).then((result) => {
	  if (result.value) {
		   $.get('../dao/excluir.php?id='+$id, function(data) {
		   	 	var retorno = $.parseJSON(data);
		   	 	console.log(retorno['msg']);
		   	 	if (retorno['ok'] == 1) {

					Swal(retorno['msg'], '',  'success');
					
					setTimeout(function(){ location.reload(); }, 1000);

		   	 	}else{

					Swal(retorno['msg'], '',  'error');


		   	 	}
		   });
	  }
	})
}