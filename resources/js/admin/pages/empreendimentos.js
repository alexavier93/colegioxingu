//getGaleria();
//getPlantas();
//getStatus();

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Buscando as Imagens do imóvel
function getGaleria() {

    var empreendimento_id = $("#empreendimento_id").val();
    var url = $("#getGaleria").val();

    $.ajax({
        url: url,
        method: "POST",
        data: {
            empreendimento_id: empreendimento_id
        },
        dataType: "json",
        success: function(data) {
            $('#galeriaEmpreendimento').html(data);
        }
    });

    return false;
};

// Upload Galeria
$(document).on('click', '#uploadGaleria', function() {

    var formData = new FormData();

    var url = $("#urlUploadGaleria").val();

    var empreendimento_id = $("#empreendimento_id").val();
    let TotalFiles = $('#images')[0].files.length; //Total files
    let files = $('#images')[0];

    for (let i = 0; i < TotalFiles; i++) {
        formData.append('images' + i, files.files[i]);
    }

    formData.append('TotalFiles', TotalFiles);
    formData.append('empreendimento_id', empreendimento_id);

    $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        beforeSend: function() {
            $('#galeriaEmpreendimento').html(
                '<h5 class="text-center my-4 w-100">Carregando...</h5>');
        },
        success: function(response) {

            getGaleria();

            setTimeout(function() {
                $('.alert').html(response.success);
                $('.alert').addClass('alert-success').fadeIn("slow");
            }, 200);

            setTimeout(function() {
                $('.alert').hide(400);
            }, 2000);

        },
        error: function(response) {
            setTimeout(function() {
                $('.alert').html(response.erro);
                $('.alert').addClass('alert-danger').fadeOut("slow");
            }, 200);

            setTimeout(function() {
                $('.alert').hide(400);
            }, 2000);
        }
    });

});

// Excluindo Imagens
$(document).on('click', '.delete_image', function() {
    var id = $(this).data('id');
    var url = $(this).data('url');

    $('.delete').attr('data-id', id);
    $('.delete').attr('data-url', url);
    
    $('.delete').addClass('deleteImage');
    $('.deleteImage').removeClass('delete');
});

$(document).on('click', '.deleteImage', function() {

    var id = $(this).data('id');
    var url = $(this).data('url');

    $.ajax({
        url: url,
        method: "POST",
        data: {
            id: id
        },
        dataType: "json",
        cache: false,
        success: function(response) {
            $('#modalDelete').modal('toggle');

            $('.deleteImage').addClass('delete');
            $('.deleteImage').removeData('id');
            $('.delete').removeClass('deleteImage');

            getGaleria();

            setTimeout(function() {
                $('.alert').html(response.success);
                $('.alert').addClass('alert-success').fadeIn("slow");
            }, 200);

            setTimeout(function() {
                $('.alert').hide(400);
            }, 2000);

        },
        error: function(response) {

            setTimeout(function() {
                $('.alert').html(response.erro);
                $('.alert').addClass('alert-danger').fadeOut("slow");
            }, 200);

            setTimeout(function() {
                $('.alert').hide(400);
            }, 2000);

        }
    });

});



// Buscando as Plantas do imóvel
function getPlantas() {

    var empreendimento_id = $("#empreendimento_id").val();
    var url = $("#getPlantas").val();

    $.ajax({
        url: url,
        method: "POST",
        data: {
            empreendimento_id: empreendimento_id
        },
        dataType: "json",
        success: function(data) {
            $('#plantasEmpreendimento').html(data);
        }
    });

    return false;
};

// Upload Plantans
$(document).on('click', '#uploadPlantas', function() {

    var formData = new FormData();

    var url = $("#urlUploadPlantas").val();

    var empreendimento_id = $("#empreendimento_id").val();
    let TotalFiles = $('#plantas')[0].files.length; //Total files
    let files = $('#plantas')[0];

    for (let i = 0; i < TotalFiles; i++) {
        formData.append('plantas' + i, files.files[i]);
    }

    formData.append('TotalFiles', TotalFiles);
    formData.append('empreendimento_id', empreendimento_id);

    $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        beforeSend: function() {
            $('#galeriaEmpreendimento').html(
                '<h5 class="text-center my-4 w-100">Carregando...</h5>');
        },
        success: function(response) {

            getPlantas();

            setTimeout(function() {
                $('.alert').html(response.success);
                $('.alert').addClass('alert-success').fadeIn("slow");
            }, 200);

            setTimeout(function() {
                $('.alert').hide(400);
            }, 2000);

        },
        error: function(response) {
            setTimeout(function() {
                $('.alert').html(response.erro);
                $('.alert').addClass('alert-danger').fadeOut("slow");
            }, 200);

            setTimeout(function() {
                $('.alert').hide(400);
            }, 2000);
        }
    });

});

// Excluindo Plantans
$(document).on('click', '.delete_planta', function() {
    var id = $(this).data('id');
    var url = $(this).data('url');

    $('.delete').attr('data-id', id);
    $('.delete').attr('data-url', url);
    
    $('.delete').addClass('deletePlanta');
    $('.deletePlanta').removeClass('delete');
});

$(document).on('click', '.deletePlanta', function() {

    var id = $(this).data('id');
    var url = $(this).data('url');

    $.ajax({
        url: url,
        method: "POST",
        data: {
            id: id
        },
        dataType: "json",
        cache: false,
        success: function(response) {
            $('#modalDelete').modal('toggle');

            $('.deletePlanta').addClass('delete');
            $('.deletePlanta').removeData('id');
            $('.delete').removeClass('deletePlanta');

            getPlantas();

            setTimeout(function() {
                $('.alert').html(response.success);
                $('.alert').addClass('alert-success').fadeIn("slow");
            }, 200);

            setTimeout(function() {
                $('.alert').hide(400);
            }, 2000);

        },
        error: function(response) {

            setTimeout(function() {
                $('.alert').html(response.erro);
                $('.alert').addClass('alert-danger').fadeOut("slow");
            }, 200);

            setTimeout(function() {
                $('.alert').hide(400);
            }, 2000);

        }
    });

});

