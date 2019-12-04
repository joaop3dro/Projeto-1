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
                $('#divTipoDocumento input').val("");
                $('#divTipoDocumento label').text('CPF');
                $('#divTipoDocumento label').prop('for', 'cpf');
                $('#divTipoDocumento input').prop('name', 'cpf')
                                            .prop('id', 'cpf')
                                            .mask('000.000.000-00');
                                            
                tipoDocumento.show();
                $('#divNomeRazaoSocial input').val("");
                $('#divNomeRazaoSocial label').text('Nome')
                                              .prop('for', 'nome');
                $('#divNomeRazaoSocial input').prop('name', 'nome')
                                              .prop('id', 'nome');
                                                                          
                nomeRazaoSocial.show();
                nomeFantasia.hide();
                inscricaoEstadual.hide();
                break;
            case 'pj':
                $('#divTipoDocumento input').val("");
                $('#divTipoDocumento label').text('CNPJ');
                $('#divTipoDocumento input').prop('name', 'cnpj');
                $('#divTipoDocumento input').prop('id', 'cnpj')
                                            .mask('00.000.000/0000-00');
                tipoDocumento.show();
                $('#divNomeRazaoSocial input').val("");
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
                $('#divInscricaoEstadual input').prop('id', 'incricaoEstadual')
                                                .mask('000000000000');
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