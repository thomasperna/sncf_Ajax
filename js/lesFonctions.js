function AfficherFormation(numero){
    $.ajax
    (
      {
         type:'get',
         url:"index.php/Ctrl_sncf/afficherFormation",
         data:"numero="+numero,
        success:function(data)
                {
                    $('#divForm').empty();
                    $('#divForm').append(data);
                },
                error:function()
                {
                   alert("Impossiblie de recuperer");
                }
  
            }        
    );
}
function AfficherAgent(numeroFormation){
    $.ajax
    (
            {
                type:'get',
                url:"index.php/Ctrl_sncf/afficherAgent",
                data:"numeroFormation="+numeroFormation,
                succes:function(data)
                {
                    $('#divAgents').empty();
                    $('#divAgents').append(data);
                },
                error:function(){
                    alert("impossible de récupérer");
                }
            }
    );
}

   
    



