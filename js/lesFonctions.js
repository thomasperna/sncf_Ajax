function AfficherFormation(numero){
    $.ajax
    (
      {
         type:'get',
         url:"index.php/Ctrl_sncf/afficherFormation",
         data:"numero="+$('#lstAct').val(),
        success:function(data)
                {
                    $('#divForm').empty();
                    $('#divForm').append(data);
                },
                error:function()
                {
                   alert("Impossiblie de recupérer les formations");
                }
  
            }        
    );
}
function AfficherAgent(numeroFormation)
    {
        $.ajax( 
            {
                type:"get",
                url:"index.php/Ctrl_sncf/AfficherLesAgents",
                data:"numFormation="+numeroFormation,
                success:function(data)
                {
                    $('#divAgents').empty();
                    $('#divAgents').append(data);
                },
                error:function()
                {
                    alert('impossible de recuperer les agents');
                }
                
                
            });
}

   
    



