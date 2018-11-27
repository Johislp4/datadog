/*$(function () {
    $('[data-toggle="tooltip"]').tooltip()

})*/

$(document).ready(function () {

    $("#verificar").click(function () {

        var nombre = $('#nombre').val()
        var apellido = $('#apellido').val()

        $.get(`/datadog/select.php?nombre=${nombre}&apellido=${apellido}`)
            .then(function (data) {

                $("#verificar_voluntario").modal("hide")

                if (data == 1) {

                    $.notify("Eres Voluntario")

                } else {
                    $.notify("No eres voluntario. Registrate ya!")
                }

            })

    })

    $("#registrar").click(function () {


        var name = $('#firstName').val()
        var lastname = $('#lastName').val()
        var email = $('#email').val()
        var password = $('#password').val()

        var x = $("#register-form").serialize();

        //TODO:Hacer el request por post

        $.post(`/datadog/register2.php`, {

            nombre: name,
            apellido: lastname,
            correo: email,
            contrasena: password

        })
        // $.post(`/datadog/register2.php?name=${name}&lastname=${lastname}&email=${email}&password=${password}`)
            .then(function (data) {

                $("#modalCompra").modal("hide")

                if (data == 1) {

                    $.notify("El correo ya existe")

                } else {
                    if (data == 2) {

                        $.notify("Tu registro ha sido exitoso")
                        $.notify("Revisa la confirmación del registro en tu correo")
                    }
                }

            })

    })

})