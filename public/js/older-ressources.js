$(function(){

    let incrementOffset = 10;

    $('#oldnew-prev').click(function(e){
        e.preventDefault();
        $.ajax({
            url:"http://localhost/platz/public/ajax/older-ressources/",
            data:{
                offset: incrementOffset
            },
            method:'get',
            success: function(reponsePHP){
                $('.work').append(reponsePHP).find('.white:nth-last-of-type(-n+20)').hide().fadeIn();
                incrementOffset += 10;
            },
            error: function(){
                alert('Problème durant la transaction !');
            }      
        });

    });


    $('#bouton-ai').click(function(e){
        e.preventDefault();
        $.ajax({
            url:"http://localhost/platz/public/ajax/ai-ressources/",

            method:'get',
            success: function(reponsePHP){
                $('#content').replaceWith(reponsePHP);
            },
            error: function(){
                alert('Problème durant la transaction !');
            }      
        });

    });

    $('#bouton-psd').click(function(e){
        e.preventDefault();
        $.ajax({
            url:"http://localhost/platz/public/ajax/psd-ressources/",

            method:'get',
            success: function(reponsePHP){
                $('#content').replaceWith(reponsePHP);
            },
            error: function(){
                alert('Problème durant la transaction !');
            }      
        });

    });

    $('#bouton-theme').click(function(e){
        e.preventDefault();
        $.ajax({
            url:"http://localhost/platz/public/ajax/theme-ressources/",

            method:'get',
            success: function(reponsePHP){
                $('#content').replaceWith(reponsePHP);
            },
            error: function(){
                alert('Problème durant la transaction !');
            }      
        });

    });

    $('#bouton-font').click(function(e){
        e.preventDefault();
        $.ajax({
            url:"http://localhost/platz/public/ajax/font-ressources/",

            method:'get',
            success: function(reponsePHP){
                $('#content').replaceWith(reponsePHP);
            },
            error: function(){
                alert('Problème durant la transaction !');
            }      
        });

    });

    $('#bouton-photo').click(function(e){
        e.preventDefault();
        $.ajax({
            url:"http://localhost/platz/public/ajax/photo-ressources/",

            method:'get',
            success: function(reponsePHP){
                $('#content').replaceWith(reponsePHP);
            },
            error: function(){
                alert('Problème durant la transaction !');
            }      
        });

    });


    $('#bouton-premium').click(function(e){
        e.preventDefault();
        $.ajax({
            url:"http://localhost/platz/public/ajax/premium-ressources/",

            method:'get',
            success: function(reponsePHP){
                $('#content').replaceWith(reponsePHP);
            },
            error: function(){
                alert('Problème durant la transaction !');
            }      
        });

    });

});