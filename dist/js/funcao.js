function Status() {
    var status = 7;

    if (status == "ATIVO") {
        return "<span class='badge badge-success'>ATIVO</span>";
    } else {
        return "<span class='badge badge-danger'>INATIVO</span>";
    }
}

function adicionaStatus() {
    var tabela = document.querySelector("table");
    var tr = tabela.insertRow();
}