function ScroolTop() {
    $("html, body").stop().animate({ scrollTop: 0 }, 500, 'swing', function() {});
}
$(document).ready(function() {
    $('#data').mask('00/00/0000');
    $('#telefone').mask('(00) 00000-0000');

    $('.button-0').click(function(e) {
        e.preventDefault();
        $('#step-0').hide();
        $('#step-1').fadeIn();
        ScroolTop()
    });

    // BUTTONS EXIT
    $('.e-button-1').click(function(e) {
        e.preventDefault();
        $('#step-0').fadeIn();
        $('#step-1').hide();
        ScroolTop()
    });
    $('.e-button-2').click(function(e) {
        e.preventDefault();
        $('#step-1').fadeIn();
        $('#step-2').hide();
        ScroolTop()
    });
    $('.e-button-3').click(function(e) {
        e.preventDefault();
        $('#step-2').fadeIn();
        $('#step-3').hide();
        ScroolTop()
    });
    $('.e-button-4').click(function(e) {
        e.preventDefault();
        $('#step-3').fadeIn();
        $('#step-4').hide();
        ScroolTop()
    });

    //  BOTÃO FOTO
    $('.button-fotos-1').click(function(e) {
        e.preventDefault();
        $('#fotos-1').click();
    });
    $('.button-fotos-2').click(function(e) {
        e.preventDefault();
        $('#fotos-2').click();
    });
    $('.button-fotos-3').click(function(e) {
        e.preventDefault();
        $('#fotos-3').click();
    });

    //FORMULÁRIOS VALIDAÇÕES
    var formStep1 = $("#form-step-1").validate({
        rules: {
            nome: {
                required: true,
                minlength: 3
            },
            data: {
                required: true,
            },
            estado: {
                required: true,
                minlength: 2
            },
            cidade: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            telefone: {
                required: true,
                minlength: 9
            }
        },
        messages: {
            nome: {
                required: 'Preencha esse campo.',
                minlength: 'Insira 3 caracteres ou mais.'
            },
            data: {
                required: 'Preencha esse campo.',
            },
            estado: {
                required: 'Preencha esse campo.',
            },
            cidade: {
                required: 'Preencha esse campo.',
                minlength: 'Insira 3 caracteres ou mais.'
            },
            email: {
                required: 'Preencha esse campo.',
                email: 'Esse formato de e-mail não existe.'
            },
            telefone: {
                required: 'Preencha esse campo.',
                minlength: 'Esse formato de telefone não existe.'
            }

        }
    });

    var formStep2 = $("#form-step-2").validate({
        rules: {
            pele: {
                required: true,
            },
            problema: {
                required: true,
                minlength: 3
            },
            submetido: {
                required: true,
                minlength: 3
            },
            descpele: {
                required: true,
                minlength: 3
            }
        },
        messages: {
            pele: {
                required: 'Preencha esse campo.',
            },
            problema: {
                required: 'Preencha esse campo.',
                minlength: 'Insira 3 caracteres ou mais.'
            },
            submetido: {
                required: 'Preencha esse campo.',
                minlength: 'Insira 3 caracteres ou mais.'
            },
            descpele: {
                required: 'Preencha esse campo.',
                minlength: 'Insira 3 caracteres ou mais.'
            }
        }
    });
    var formStep3 = $("#form-step-3").validate({
        rules: {
            problemasaude: {
                required: true,
                minlength: 3
            },
            alergia: {
                required: true,
                minlength: 3
            },
            alergiamedicamento: {
                required: true,
                minlength: 3
            },
            medicamentorotina: {
                required: true,
                minlength: 3
            },
            fumante: {
                required: true,
                minlength: 3
            },
            expossol: {
                required: true,
                minlength: 3
            },
            tumor: {
                required: true,
                minlength: 3
            }
        },
        messages: {
            problemasaude: {
                required: 'Preencha esse campo.',
                minlength: 'Insira 3 caracteres ou mais.'
            },
            alergia: {
                required: 'Preencha esse campo.',
                minlength: 'Insira 3 caracteres ou mais.'
            },
            alergiamedicamento: {
                required: 'Preencha esse campo.',
                minlength: 'Insira 3 caracteres ou mais.'
            },
            medicamentorotina: {
                required: 'Preencha esse campo.',
                minlength: 'Insira 3 caracteres ou mais.'
            },
            fumante: {
                required: 'Preencha esse campo.',
                minlength: 'Insira 3 caracteres ou mais.'
            },
            expossol: {
                required: 'Preencha esse campo.',
                minlength: 'Insira 3 caracteres ou mais.'
            },
            tumor: {
                required: 'Preencha esse campo.',
                minlength: 'Insira 3 caracteres ou mais.'
            }
        }
    });
    var formStep4 = $("#form-step-4").validate({
        rules: {
            fotosUm: {
                required: true,
            },
            fotosDois: {
                required: true,
            },
            fotosUm: {
                required: true,
            }
        },
        messages: {
            fotosUm: {
                required: 'Preencha esse campo.',
            },
            fotosDois: {
                required: 'Preencha esse campo.',
            },
            fotosUm: {
                required: 'Preencha esse campo.',
            }
        }
    });

    $('#form-step-1').submit(function(e) {
        e.preventDefault();
        if (formStep1.errorList.length <= 0) {
            $('#step-1').hide();
            $('#step-2').fadeIn();
            ScroolTop()
        }
    });
    $('#form-step-2').submit(function(e) {
        e.preventDefault();
        if (formStep2.errorList.length <= 0) {
            $('#step-2').hide();
            $('#step-3').fadeIn();
            ScroolTop()
        }
    });
    $('#form-step-3').submit(function(e) {
        e.preventDefault();
        if (formStep3.errorList.length <= 0) {
            $('#step-3').hide();
            $('#step-4').fadeIn();
            ScroolTop()
        }
    });
    $('#form-step-4').submit(function(e) {
        e.preventDefault();
        if (formStep4.errorList.length <= 0) {
            $('#step-4').hide();
            $('#obrigado').fadeIn();
            ScroolTop()
        }
    });

});