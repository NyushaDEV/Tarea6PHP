"use strict";

$(function() {

    login();
});

function login() {
    $('#login').on('click', function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: $('#login').attr('action'),
            data: $('#login').serialize()
        })
        .done(function(data){
            let json = JSON.parse(data);
            $('#ajax').html(json['mensaje']);
        })
        .fail(function(data, status, error){
            console.log(status);
        })
    });
}