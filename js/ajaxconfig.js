/**
 * Created by Administrador on 01/09/2018.
 */
$.ajaxSetup({
    beforeSend: function () {
        $('#id-loading').addClass('.loader-small');
        $('#load-content').fadeIn('fat');
    },
    complete: function (jqXHR, textStatus) {
        $('#id-loading').removeClass('.loader-small');
        $('#load-content').fadeOut('fat');
    },
    error: function (jqXHR, textStatus, error) {
        console.log('Error:Problemas de conexion con el servidordfdfdfddf');
    }
});