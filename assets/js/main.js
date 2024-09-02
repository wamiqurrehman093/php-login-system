$(document)
.on("submit", "form.js-register", function(event){
        event.preventDefault();
        var _form = $(this);
        var _error = $('.js-error');
        var dataObj = {
            email: $("input[type='email']", _form).val(),
            password: $("input[type='password']", _form).val()
        }
        _error.hide()
        $.ajax({
            type: 'POST',
            url: '/ajax/register.php',
            data: dataObj,
            dataType: 'json',
            async: true
        })
        .done(function ajaxDone(data){
            if (data.redirect !== undefined)
            {
                window.location = data.redirect;
            }
            else if (data.error !== undefined)
            {
                _error.text(data.error).show();
            }
        })
        .fail(function ajaxFailed(e){
        })
        .always(function ajaxAlwaysDoThis(data){
        });
        return false;
    }
)