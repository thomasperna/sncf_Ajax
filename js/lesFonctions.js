function AfficherFromation(numero){
    $.ajax
    (
      {
         type:'get',
         url:"index.php/Ctrl_Demo/afficherFormation",
         data:"numero="+numero,
        success:function(data)
                {
                    $('#divForm').empty();
                    $('#divFrom').append(data);
                },
                error:function()
                {
                   alert("Impossiblie de recuperer");
                }
  
            }        
    );
}