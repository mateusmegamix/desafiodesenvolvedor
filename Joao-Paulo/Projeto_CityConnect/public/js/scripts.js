//Filtro para procurar dados da tabela na página principal
$(document).ready(function(){
  $("#procurar").on("keyup", function() {
    var valor = $(this).val().toLowerCase();
    $("#dadosTabela tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(valor) > -1)
    });
  });
});

//Validação dos formulários
$(function(){
	$("#formCreate").validate();
});

$(function(){
	$("#formEdit").validate();
});