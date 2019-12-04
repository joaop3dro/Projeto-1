$(function(){
    'use strict';
$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#uf").val("");
        $("#ibge").val("");
    }
    
    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {
                var efeitoLoad = 'progress-bar progress-bar-striped progress-bar-animated';
                //Preenche os campos com "..." enquanto consulta webservice.
                $("#logradouro").prop("disabled", true).addClass(efeitoLoad);
                $("#bairro").prop("disabled", true).addClass(efeitoLoad);
                $("#cidade").prop("disabled", true).addClass(efeitoLoad);
                $("#uf").prop("disabled", true).addClass(efeitoLoad);
                $("#ibge").prop("disabled", true).addClass(efeitoLoad);

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#logradouro").val(dados.logradouro).removeClass(efeitoLoad);
                        $("#bairro").val(dados.bairro).removeClass(efeitoLoad);
                        $("#cidade").val(dados.localidade).removeClass(efeitoLoad);
                        $("#uf").val(dados.uf).removeClass(efeitoLoad);
                        $("#ibge").val(dados.ibge).removeClass(efeitoLoad);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});
});