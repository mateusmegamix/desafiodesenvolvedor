<?php
            $pasta = "images/fotos"; //pasta de destino após o update
                $permitidos = array(".jpg",".jpeg",".JPEG",".gif",".png", ".bmp"); //extensões permitidas

                $nome_imagem    = $_FILES['img_prod']['name']; //nome da imagem
                $tamanho_imagem = $_FILES['img_prod']['size']; //tamanho da imagem

                if ($nome_imagem == "") { //se nome da imagem for vazio, o usuário não informou no formulario
                    echo "empty image"; exit; //disparo um erro pra tratar no front
                } else {
                    $ext = strtolower(strrchr($nome_imagem,".")); //pego a extensão da imagem
                    if(in_array($ext,$permitidos)){ //se a extensão for permitida entro nesse if
                        $tamanho = round($tamanho_imagem / 1024); //pego o tamanho total da imagem e divido por 1024 para saber quantos MB ela tem
                        if($tamanho < 2048){ //se imagem for até 2MB envia
                            $nome_atual = md5(uniqid(time())).$ext; //nome que dará a imagem e que vou salvar no banco
                            $tmp = $_FILES['img_prod']['tmp_name']; //caminho temporário da imagem
                            if(move_uploaded_file($tmp,$pasta.$nome_atual)){ //faço o upload

                            } else {
                                echo "error no upload"; exit; //disparo o erro
                            }
                        } else {
                            echo "error tamanho maior que o permitido"; exit;
                        }
                    } else {
                        echo "error arquivo não é de imagem"; exit;
                    }
                }

                $processacadastro = $this->ProdutosModel->cadastrarprodutos($dados, $nome_atual);
                if($processacadastro){
                    echo "cadastro efetuado com sucesso";
                }
                
                ?>