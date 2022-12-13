<?php
				/* Declaração de Variáveis */
				$user = @$_REQUEST['email'];
				$pass = @$_REQUEST['senha'];
				$submit = @$_REQUEST['submit'];
				
				/* Declaração das variáveis que possuem os usuarios e as senhas */
				$user1 = 'toolmmer';
				$pass1 = 'a1b24d';
				
				$user2 = 'gabrielsooco';
				$pass2 = 'b3gabriel';   
				
				/* Testa se o botão submit foi ativado */
				if($submit){
					
					/* Se o campo usuário ou senha estiverem vazios geramos um alerta */
					if($user == "" || $pass == ""){
						echo "<script:alert('Por favor, preencha todos os campos!');</script>";
					}
					/* Caso o campo usuario e senha não 
						*estejam vazios vamos testar se o usuário e a senha batem 
					*iniciamos uma sessão e redirecionamos o usuário para o painel */
					else{
						if(($user == $user1 ))
						
					}}
                        ?>