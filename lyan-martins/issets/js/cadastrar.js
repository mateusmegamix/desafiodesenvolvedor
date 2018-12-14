$(document).ready(function () {
    
    $("#frmCadastro").submit(function (e) { 
        e.preventDefault();
        $.post("../dao/cadastro.php", $( this ).serialize(),function (data, textStatus, jqXHR) {
            var retorno = JSON.parse(data);
            console.log(data)
            if (retorno['ok']==1) {
                
                Swal(retorno['msg'], '',  'success');
					
                setTimeout(function(){ location = "../index.php";}, 1000);

            }else{

                Swal(retorno['msg'], '',  'error');


            }

        });
    });

    $("#radioM").click(function (e) { 
        
        console.log("M");
        $("#radioF").prop( "checked" ,false)

        
    });
    $("#radioF").click(function (e) { 
        
        console.log("F");
        $( "#radioM").prop( "checked" ,false)
    
        
    });

    var path = window.location.search;
    path = path.replace("?","")
    if(path != ""){

        $("h1").text("Atualizar Cadastro");
    }
    
});