let salvar = document.getElementById("b_salvar");
let nome = document.getElementById("c_nome");
let rg = document.getElementById("c_rg");
let cpf = document.getElementById("c_cpf");
let telefone = document.getElementById("c_telefone");
let celular = document.getElementById("c_celular");
let cnpj = document.getElementById("c_cnpj");
let cargo = document.getElementById("c_cargo");
let login = document.getElementById("c_login");
let senha = document.getElementById("c_senha");
let carteira_trabalho = document.getElementById("c_carteira_trabalho");
let salario = document.getElementById("c_salario");
let quantidade = document.getElementById("c_quantidade");
let codigo_barras = document.getElementById("c_codigo_barras");
let preco_compra = document.getElementById("c_preco_compra");
let preco_a_vista = document.getElementById("c_preco_a_vista");

let erros = [];
salvar.addEventListener("click", (event) => {
    event.preventDefault();
    erros.push();
});

class Mensagem {
    static exibeMensagemErro2(campo) {
        let mensagem = "Campo " + campo + " esta vazio";
        return mensagem;
    }
}

class ValidacaoCampos {
    static exibeMensagemErro(campo) {
        let mensagem = "Campo " + campo + " esta vazio";
        return mensagem;
    }

    static validaCampoTexto(campo) {
        texto = campo.value;
        if (texto.length <= 0) {
            this.colocaMensagemCampo(campoMensagem.value);
        }
    }

    static pegaCampoMensagem(campo) {
        return campo;
    }
    
    static colocaMensagemCampo(campo) {
        let campoMensagem = this.pegaCampoMensagem();
        campoMensagem.value = this.exibeMensagemErro(campo.value);
    }
}

// let b_salvar = document.getElementById("b_salvar");
// let c_nome = document.getElementById("c_nome");
// let c_rg = document.getElementById("c_rg");
// let c_cpf = document.getElementById("c_cpf");
// let c_telefone = document.getElementById("c_telefone");
// let c_celular = document.getElementById("c_celular");
// let c_nome_texto = c_nome.value;
// let c_rg_texto = c_rg.value;
// let c_cpf_texto = c_cpf.value;
// let c_telefone_texto = c_telefone.value;
// let c_celular_texto = c_celular.value;
// c_rg_texto = c_rg_texto.replace(/[\.\-]/, "")
// c_cpf_texto = c_cpf_texto.replace(/[\.\-]/, "")
// c_telefone_texto = c_telefone_texto.replace(/[\(\)\.]/, "")
// c_celular_texto = c_celular_texto.replace(/[\(\)\.]/, "")
// let nome_mensagem = document.getElementById("nome_mensagem");
// let rg_mensagem = document.getElementById("rg_mensagem");
// let cpf_mensagem = document.getElementById("cpf_mensagem");
// let telefone_mensagem = document.getElementById("telefone_mensagem");
// let celular_mensagem = document.getElementById("celular_mensagem");
// b_salvar.addEventListener("click", (event)=> {
//     event.preventDefault();
//     if (c_nome_texto.length <= 0) {
//         nome_mensagem.textContent = "Campo vazio";
//         nome_mensagem.setAttribute("class", "alert alert-danger");
//     } else if (c_rg_texto.length <= 0) {
//         rg_mensagem.textContent = "Campo vazio";
//         rg_mensagem.setAttribute("class", "alert alert-danger");
//     } else if (c_cpf_texto.length <= 0) {
//         cpf_mensagem.textContent = "Campo vazio";
//         cpf_mensagem.setAttribute("class", "alert alert-danger");
//     } else if (c_telefone_texto.length <= 0) {
//         telefone_mensagem.textContent = "Campo vazio";
//         telefone_mensagem.setAttribute("class", "alert alert-danger");
//     } else if (c_celular_texto.length <= 0) {
//         celular_mensagem.textContent = "Campo vazio";
//         celular_mensagem.setAttribute("class", "alert alert-danger");
//     }
// });

// let campo_rg = document.getElementById("c_rg");
// let texto_rg = campo_rg.value;
// texto_rg = texto_rg.replace(/[\.\-]/, "");
// let rg_mensagem = document.getElementById("rg_mensagem");
// if (texto_rg.length <= 0) {
//     rg_mensagem.textContent = "Campo vazio";
//     rg_mensagem.setAttribute("class", "alert alert-danger");
// } else {
//     rg_mensagem.textContent = "";
//     rg_mensagem.removeAttribute("class");
// }
