<?php

    include "autoload.php";

    $cadastro = new Cadastro();

    $post = $_POST;

    if(isset($post)){

        switch ($post['id']) {
            case '0':
                
                $retorno = $cadastro->insertCadastro($post);
                if($retorno){

                    $return = [

                        "ok" => 1,
                        "msg" => "Cadastrado com sucesso"

                    ];
                    echo json_encode($return);
                    exit();
                }else{

                    $return = [

                        "ok" => 0,
                        "msg" => "Erro ao cadastrar"

                    ];
                    echo json_encode($return);
                    exit();

                }
            break;
            
            default:

                $retorno = $cadastro->updateCadastro($post);

                if($retorno){

                    $return = [

                        "ok" => 1,
                        "msg" => "Atualizado com sucesso"

                    ];
                    echo json_encode($return);
                    exit();
                }else{
                    
                    $return = [

                        "ok" => 0,
                        "msg" => "Erro ao atualizar"

                    ];
                    echo json_encode($return);
                    exit();

                }

            break;

        }

    }