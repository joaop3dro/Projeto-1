$(function(){
    'use strict';

    var tipoDocumento = $("#divTipoDocumento");
    var nomeRazaoSocial = $("#divNomeRazaoSocial");
    var nomeFantasia = $("#divNomeFantasia");
    var inscricaoEstadual = $('#divInscricaoEstadual');

    tipoDocumento.hide();
    nomeRazaoSocial.hide();
    nomeFantasia.hide();
    inscricaoEstadual.hide();

    function mostrarInput(id){
        switch (id) {
            case 'pf':
                $('#divTipoDocumento label').text('CPF');
                $('#divTipoDocumento input').prop('name', 'cpf');
                $('#divTipoDocumento input').prop('id', 'cpf');
                tipoDocumento.show();
                $('#divNomeRazaoSocial label').text('Nome');
                $('#divNomeRazaoSocial input').prop('name', 'nome');
                $('#divNomeRazaoSocial input').prop('id', 'nome');
                nomeRazaoSocial.show();
                nomeFantasia.hide();
                inscricaoEstadual.hide();
                break;
            case 'pj':
                $('#divTipoDocumento label').text('CNPJ');
                $('#divTipoDocumento input').prop('name', 'cnpj');
                $('#divTipoDocumento input').prop('id', 'cnpj');
                tipoDocumento.show();

                $('#divNomeRazaoSocial label').text('Razão Social');
                $('#divNomeRazaoSocial label').prop('for', 'razaoSocial');
                $('#divNomeRazaoSocial input').prop('name', 'razaoSocial');
                $('#divNomeRazaoSocial input').prop('id', 'razaoSocial');
                nomeRazaoSocial.show();

                $('#divNomeFantasia label').text('Nome Fantasia');
                $('#divNomeFantasia label').prop('for', 'nomeFantasia');
                $('#divNomeFantasia input').prop('name', 'nomeFantasia');
                $('#divNomeFantasia input').prop('id', 'nomeFantasia');
                nomeFantasia.show();

                $('#divInscricaoEstadual label').text('Inscrição Estadual');
                $('#divInscricaoEstadual label').prop('for', 'incricaoEstadual');
                $('#divInscricaoEstadual input').prop('name', 'incricaoEstadual');
                $('#divInscricaoEstadual input').prop('id', 'incricaoEstadual');
                inscricaoEstadual.show();
                break;
                default:
        }
    }

    $(document).on('click', 'input[type=radio]', function (){
        var id = $(this).prop('id');
        mostrarInput(id);
    });
});