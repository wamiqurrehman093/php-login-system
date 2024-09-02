$(document)
.on("submit", "form.js-register", function(event){
        event.preventDefault();
        var _form = $(this);
        var dataObj = {
            email: $("input[type='email']", _form).val(),
            password: $("input[type='password']", _form).val()
        }
        $.ajax({
            type: 'POST',
            url: '/ajax/register.php',
            data: dataObj,
            dataType: 'json',
            async: true
        })
        .done(function ajaxDone(data){
            console.log(data);
            if (data.redirect !== undefined)
            {
                window.location = data.redirect;
            }
            alert(data.name);
        })
        .fail(function ajaxFailed(e){
            console.log(e);
        })
        .always(function ajaxAlwaysDoThis(data){
            console.log('Always');
        });
        return false;
    }
)