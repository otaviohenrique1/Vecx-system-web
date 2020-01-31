let campoRg = document.getElementById("c_rg");
let campoCpf = document.getElementById("c_cpf");
let campoTelefone = document.getElementById("c_telefone");
let campoCelular = document.getElementById("c_celular");
let mascaraRgTexto = "##.###.###-#";
let mascaraCpfTexto = "###.###.###-##";
let mascaraCnpjTexto = "##.###.###/####-##";
let mascaraTelefoneTexto = "(##)####-####";
let mascaraCelularTexto = "(##)#####-####";
let mascaraDataTexto = "##/##/####";
let regexExemplo1 = /[1-9]{1,31}[\/][1-9]{1,12}[\/][0-9]{1,}/;
let regexExemploRgTexto = /[1-9]{d2}[\.][1-9]{d3}[\.][0-9]{d3}[\-][0-9]/;
let regexExemploCpfTexto = /[1-9]{d3}[\.][1-9]{d3}[\.][0-9]{d3}[\-][0-9]{d2}/;
let regexExemploTelefoneTexto = /[\(][1-9]{1,31}[\/][1-9]{1,12}[\/][0-9]{1,}/;
let regexExemploCelularTexto = /[1-9]{1,31}[\/][1-9]{1,12}[\/][0-9]{1,}/;
let regexExemploDataTexto = /[1-9]{1,31}[\/][1-9]{1,12}[\/][0-9]{1,}/;
let regexExemplo2 = /[0-3]\d\/[01]\d\/[12][0129]\d{2}/g;

function mascaraTelefone(telefone) {
    const textoAtual = telefone.value;
    let textoAjustado;
    if (textoAtual.length === 10) {
        const parte1 = textoAtual.slice(0,1);
        const parte2 = textoAtual.slice(2,5);
        const parte3 = textoAtual.slice(6,10);
        textoAjustado = `(${parte1})${parte2}-${parte3}`;
    }
    telefone.value = textoAjustado;
}

function mascaraCelular(celular) {
    const textoAtual = celular.value;
    let textoAjustado;
    if (textoAtual.length === 11) {
        const parte1 = textoAtual.slice(0,1);
        const parte2 = textoAtual.slice(2,4);
        const parte3 = textoAtual.slice(7,11);
        textoAjustado = `(${parte1})${parte2}-${parte3}`;
    }
    celular.value = textoAjustado;
}

function mascaraRg(rg) {
    const textoAtual = rg.value;
    let textoAjustado;
    if (textoAtual.length === 9) {
        const parte1 = textoAtual.slice(0,1);
        const parte2 = textoAtual.slice(2,5);
        const parte3 = textoAtual.slice(5,7);
        const parte4 = textoAtual.slice(8);
        textoAjustado = `${parte1}.${parte2}.${parte3}-${parte4}`;
    }
    rg.value = textoAjustado;
}

function mascaraCpf(cpf) {
    const textoAtual = cpf.value;
    let textoAjustado;
    if (textoAtual.length === 11) {
        const parte1 = textoAtual.slice(0,2);
        const parte2 = textoAtual.slice(3,5);
        const parte3 = textoAtual.slice(6,8);
        const parte4 = textoAtual.slice(9,10);
        textoAjustado = `${parte1}.${parte2}.${parte3}-${parte4}`;
    }
    cpf.value = textoAjustado;
}

function mascaraCnpj(cnpj) {
    const textoAtual = cnpj.value;
    let textoAjustado;
    if (textoAtual.length === 14) {
        const parte1 = textoAtual.slice(0,1);
        const parte2 = textoAtual.slice(2,4);
        const parte3 = textoAtual.slice(5,7);
        const parte4 = textoAtual.slice(8,11);
        const parte5 = textoAtual.slice(12,13);
        textoAjustado = `${parte1}.${parte2}.${parte3}/${parte4}-${parte5}`;
    }
    cnpj.value = textoAjustado;
}

function mascaraData(data) {
    const textoAtual = data.value;
    let textoAjustado;
    if (textoAtual.length === 10) {
        const parte1 = textoAtual.slice(0,1);
        const parte2 = textoAtual.slice(2,3);
        const parte3 = textoAtual.slice(4,7);
        textoAjustado = `${parte1}/${parte2}/${parte3}`;
    }
    data.value = textoAjustado;
}

function mascaraDeTelefone(telefone){
    const textoAtual = telefone.value;
    const isCelular = textoAtual.length === 9;
    let textoAjustado;
    if(isCelular) {
        const parte1 = textoAtual.slice(0,5);
        const parte2 = textoAtual.slice(5,9);
        textoAjustado = `${parte1}-${parte2}`        
    } else {
        const parte1 = textoAtual.slice(0,4);
        const parte2 = textoAtual.slice(4,8);
        textoAjustado = `${parte1}-${parte2}`
    }
    telefone.value = textoAjustado;
}

function tiraHifen(telefone) {
    const textoAtual = telefone.value;
    const textoAjustado = textoAtual.replace(/\-/g, '');
    telefone.value = textoAjustado;
}
