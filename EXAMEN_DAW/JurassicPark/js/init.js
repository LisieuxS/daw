$(document).ready(function(){
    M.AutoInit();
});

$(document).ready(function(){
    $.ajax({
        type: 'POST',
        url:'../php/controlo.php',
        data:{'solo':'paraquenovayavacio'}
    })
    .done(function(locaciones){
        $('#lugar').html(locaciones)
    })
    .fail(function(){
        alert('ERROR KARNAL! :(');
    })
})