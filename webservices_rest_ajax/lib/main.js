$("button").click(function(){
   $.getJSON("API/cursos/cursos")
    .done(function(data){
          $.each(data, function(index, value){
            $("#Cursos ul").append("<li>"+value+"</li>");
          })
    })
})
