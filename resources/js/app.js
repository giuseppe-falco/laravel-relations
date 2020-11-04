import './bootstrap';
import $, { ajax } from 'jquery';
import { compile } from 'handlebars';

$(()=>{
     
    ajax({
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
        var template = compile(source);
        
        for(var i=0; i < data.length; i++){

            var html = template(data[i]);
            
            $('.container').append(html);
        }
    }

