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

    //Request ajax por POST
    /* $("#registrar").click(function () {


         var name = $('#firstName').val()
         var lastname = $('#lastName').val()
         var email = $('#email').val()
         var password = $('#password').val()


         //Request por el método Post

         $.post(`/datadog/register2.php`, {

             nombre: name,
             apellido: lastname,
             correo: email,
             contrasena: password

         })

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

     })*/

//Registro
    $("#formupload").on('submit', function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            type: 'post',
            url: $(this).attr('action'),
            data: formData,
            cache: false,
            contentType: false,
            processData: false,

        })
            .done(function (data) {

                $("#modalCompra").modal("hide")

                if (data == 1) {

                    $.notify("El correo ya existe")

                } else {
                    if (data == 2) {

                        $.notify("Tu registro ha sido exitoso")
                        $.notify("Revisa la confirmación del registro en tu correo")
                    }
                }

            });

    })

})

//Actualizar datos
/*$("#formUpdate").on('submit', function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        type: 'post',
        url: $(this).attr('action'),
        data: formData,
        cache: false,
        contentType: false,
        processData: false,

    }).then(function () {

        $('#modalUpdate').modal('hide')
    })

});*/

$('.btn-modify').click(function () {
    var user = $(this).data('user')
    var userName = $(this).data('username')
    var userLast = $(this).data('userlast')
    var userEmail = $(this).data('useremail')
    var userPw = $(this).data('userpw')

    $('#input-user').val(user)
    $('#modalUpdate').modal('show')
    $('#firstName').val(userName)
    $('#lastName').val(userLast)
    $('#email').val(userEmail)
    $('#password').val(userPw)


})

//Enviar Email

$('.btn-Email').click(function () {

    var sendEmail =$(this).data('useremail')
    $('#modalEmail').modal('show')
    $('#destinatario').val(sendEmail)
})





