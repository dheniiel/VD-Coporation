/* Início listar os registros do banco de dados */
const tbody = document.querySelector(".listar-usuarios");

// Função para listar os registros do banco de dados
const listarUsuarios = async (pagina) => {

    // Fazer a requisição para o arquivo PHP responsável por recuperar os registros do banco de dados
    const dados = await fetch("./list.php?pagina=" + pagina);

    // Ler o objeto retornado pelo arquivo PHP
    const resposta = await dados.json();

    // Acessa o IF quando não encontrar nenhum registro no banco de dados
    if (!resposta['status']) {
        // Envia a mensagem de erro para o arquivo HTML que deve ser apresentada para o usuário
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];
    } else {
        // Recuperar o seletor do HTML que deve receber os registros
        const conteudo = document.querySelector(".listar-usuarios");

        // Somente acessa o IF quando existir o seletor ".listar-usuarios"
        if (conteudo) {

            // Enviar os dados para o arquivo HTML
            conteudo.innerHTML = resposta['dados'];
        }
    }
}

// Chamar a função para listar os registros do banco de dados
listarUsuarios(1);

/* Fim listar os registros do banco de dados */

/* Início substituir o texto pelo campo na tabela */
// Função responsável por substituir o texto pelo campo na tabela e receber o ID do registro que será editado

function editar_registro(id) {
    // Ocultar o botão editar
    document.getElementById("botao_editar" + id).style.display = "none";

    // Apresentar o botão salvar
    document.getElementById("botao_salvar" + id).style.display = "block";

    // Recuperar os valores do registro que está na tabela
    var nome = document.getElementById("valor_nome" + id);
    var email = document.getElementById("valor_email" + id);

    // Substituir o texto pelo campo e atribuir para o campo o valor que estava na tabela
    nome.innerHTML = "<input type='text' id='nome_text" + id + "' value='" + nome.innerHTML + "'>";
    email.innerHTML = "<input type='text' id='email_text" + id + "' value='" + email.innerHTML + "'>";

}

/* Fim substituir o texto pelo campo na tabela */

/* Início editar o registro no banco de dados */
// Função responsável por salvar no banco de dados e receber o ID do registro que deve ser editado

async function salvar_registro(id) {
    // Recuperar os valores dos campos
    var nome_valor = document.getElementById("nome_text" + id).value;
    var email_valor = document.getElementById("email_text" + id).value;

    // Prepara a STRING de valores que deve ser enviada para o arquivo PHP responsável por salvar no banco de dados
    var dadosForm = "id=" + id + "&nome=" + nome_valor + "&email=" + email_valor;

    // Fazer a requisição com o FETCH para um arquivo PHP e enviar através do método POST os dados do formulário
    const dados = await fetch("editar.php", {
        method: "POST",
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: dadosForm
    });

    // Ler o objeto, a resposta do arquivo PHP
    const resposta = await dados.json();

    // Acessa o IF quando não conseguir editar no banco de dados
    if (!resposta['status']) {
        // Envia a mensagem de erro para o arquivo HTML que deve ser apresentada para o usuário
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];
    } else {
        // Envia a mensagem de sucesso para o arquivo HTML que deve ser apresentada para o usuário
        document.getElementById("msgAlerta").innerHTML = resposta['msg'];

        // Chamar a função para remover a mensagem após alguns segundos
        removerMsgAlerta();

        // Substituir os campos pelo texto que estava nos campos
        document.getElementById("valor_nome" + id).innerHTML = nome_valor;
        document.getElementById("valor_email" + id).innerHTML = email_valor;

        // Apresentar o botão editar
        document.getElementById("botao_editar" + id).style.display = "block";

        // Ocultar o botão salvar
        document.getElementById("botao_salvar" + id).style.display = "none";
    }
}

/* Fim editar o registro no banco de dados */

/* Início remover a mensagem em 5 segundos após apresentar a mensagem para o usuário */
function removerMsgAlerta() {
    setTimeout(function () {
        // Substituir a mensagem
        document.getElementById("msgAlerta").innerHTML = "";
    }, 5000);
}
/* Fim remover a mensagem em 5 segundos após apresentar a mensagem para o usuário */
