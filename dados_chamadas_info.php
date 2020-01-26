<?foreach($chamados as $chamado) { 

    $chamado_dados = explode('#', $chamado); 

    if($_SESSION['perfil_id'] == 2) {
        //Só exibe o chamado se for criado pelo usuário
        if($_SESSION['id'] != $chamado_dados[0]) {
            continue;
        };
    }

    if(count($chamado_dados) < 3) {
        continue;
    } ?>
        <!-- O indice 0 esta sendo pulado, pois nele esta a infrmacao de id do usuario 
        utilizado para controlar a visualização -->
        <article class="informacao">
            <p id="titulo"> 
                <?=$chamado_dados[1]?>
            </p>
            <p id="categoria">
                <?=$chamado_dados[2]?>
            </p>
            <p id="descricao">
                <?=$chamado_dados[3]?>
            </p>
        </article>                        
<? } ?>