function enviar() {

    let envolvido = document.getElementsByName('flexRadioDefault').value;
    let nome = document.getElementById('nameEnvolv').value;
    let opcoes = document.getElementById('opcoes').value;
    let masc = document.getElementById('masc').value;
    let fem = document.getElementById('fem').value;
    let dataNasc = document.getElementById('dataNascimento').value;
    let endereco = document.getElementById('endereco').value;
    let numeroCasa = document.getElementById('numeroResid').value;
    let mae = document.getElementById('mae').value;
    let municipio = document.getElementById('municipioResid').value;

    let listar = document.getElementById('lista').innerHTML;
    //var resul = document.getElementById('resultado');



    if (envolvido[0].checked) {
        envolv = 'Masculino';
    } else if (envolvido[1].checked) {
        envolv = 'Femenino';
    }

    listar += "<li>"
    "<div class='col-md-4 shadow-sm mx-1'>"


    "<div class='mb-3'>"
    "<label for='recipient-name' class='col-form-label'>" + envolv + "</label>"
    "</div>"

    "<div class='mb-3'>"
    "<label for='recipient-name' class='col-form-label'>" + nome + "</label>"
    "</div>"

    "<div class='mb-3'>"
    "<label for='recipient-name' class='col-form-label'>" + opcoes + "</label>"
    "</div>"

    "<div class='form-group'>"
    "<label for='dataNascimento' class='control-label'>" + dataNasc + "</label>"
    "</div>"

    "<div class='mb-3'>"
    " <label for='recipient-name' class='col-form-label'>" + endereco + "</label>"
    "</div>"

    "<div class='mb-2'>"
    "<label for='numeroResid' class='col-form-label'>" + numeroCasa + "</label>"
    "</div>"

    "<div class='mb-3'>"
    "<label for='mae' class='col-form-label'>" + mae + "</label>"
    "</div>"

    "<div class='mb-3'>"
    "<label for='municipioResid' class='col-form-label'>" + municipio + "</label>"
    "</div>"

    "</div>"
    "</li>";




}