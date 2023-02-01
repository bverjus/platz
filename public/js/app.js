$(function(){

    $('#contact').submit(function(e){
        e.preventDefault();
        
        $.ajax({
            url:"http://localhost/platz/public/ajax/insert",
            data:{
                pseudo: $('#pseudo').val(),
                text: $('#message').val(),
                id: $('#id').val(),
            },
            method:'get',
            success: function(reponsePHP){
                if(reponsePHP == 1){
                    let code = `<div>
                                    <div class="name-reply-post">`+$('#pseudo').val()+`</div>
                                    <div class="text-reply-post">`+$('#message').val()+`</div>
                                </div>`;
                    $('.post-reply-comments').prepend(code).find('div:first').hide().slideDown();
                    $('#pseudo').val('');
                    $('#message').val('');
                
                }else{
                    alert("Problème durant l'ajout de votre commentaire");
                }
            },
            error: function(){
                alert('Problème durant la transaction !');
            }      
        });

    });

});