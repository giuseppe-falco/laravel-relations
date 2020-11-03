require('./bootstrap');
const $ = require('jquery');
const hbs = require('handlebars');

$(()=>{
     
    $.ajax({
        'url' : 'http://localhost:8000/api/comics',
        'method' : 'GET',
        'success' : function(data){
            renderComics(data);
        },
        'error' : function(err){
            alert('errore');
        },
    })

});
   
    function renderComics(data){

        var source = document.getElementById("entry-template").innerHTML;
        var template = hbs.compile(source);
        
        for(var i=0; i < data.length; i++){

            var html = template(data[i]);
            
            $('.container').append(html);
        }
    }

