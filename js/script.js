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
            console.log(data);
        })
        .fail(function(data, status, error){
            console.log(status);
        })
    });
}