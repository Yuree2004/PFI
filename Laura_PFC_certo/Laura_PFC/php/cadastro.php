<?php 

    require_once  'classe.php' ;
    $ u = new usuario();

    if (isset( $ _POST [ 'login' ])){
        $ login = addlashes( $ _POST [ 'login' ]);
        $ senha = addlashes( $ _POST [ 'senha' ]);

        if (!vazio( $ login ) && !vazio( $ senha )){
            $ u ->( 'logindatabase' , ' localhost' , 'root' , '123mudar' );
            echo " $ mensagem ";
            if ( $ u -> msg == ""){
                if ( $ u -> cadastrar ( $ login , $ senha )){
                    echo " <script language='javascript' type='text/javascript'>alert('O usuário foi cadastrado com sucesso!')</script> ";
                    echo " <script language='javascript' type='text/javascript'>window.location.href='login.html'</script> ";
                } senão {
                    echo " <script language='javascript' type='text/javascript'>alert('O usuário já está cadastrado no sistema. Tente outro!')</script> ";
                    echo " <script language='javascript' type='text/javascript'>window.location.href='cadastro.html';</script> ";
                }
            } senão {
                echo " Erro: ". $ u -> msg ;
            }
        } senão {
            echo " <script language='javascript' type='text/javascript'>alert('Prenha todos os campos!')</script> ";
            echo " <script language='javascript' type='text/javascript'>window.location.href='cadastro.html';</script> ";
        }
    }

?>