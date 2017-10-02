<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="<?php echo base_url(); ?>js/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>Jquery/jquery-3.1.1.js"></script>
        <script type="text/javascript">
            $(
                    function(){
                        $('#lstAct').change(
                                function(){
                                    AfficherFormation($(this).val());
                                }) ;                       
   
//                        $('#divForm').change(
//                             function(){
//                                  var rdo = document.getElementsByName('rdoFrom');
//                                     if(rdo[0].checked){
//                                        AfficherActions(rdo[0].value);
//                                      }
//                                      if(rdo[1].checked){
//                                        AfficherActions(rdo[1].value);
//                                      }
//                                      if(rdo[2].checked){
//                                        AfficherActions(rdo[2].value);
//                                      }
//                                      if(rdo[3].checked){
//                                        AfficherActions(rdo[3].value);
//                                      }
//                                   
//                             });
                                
            }
            );
            
        </script>
        
    </head>
    <body>
        <h3>Choisissez l'activité</h3>
        <select value="Inf" id="lstAct">
       <?php foreach($lesActivites as $act){
               echo"<option value='".$act->numero."'>".$act->libelle."</option>";
       }
       
       ?>   
        </select>
        <br>
        <br>
        <div id="divForm"></div>
        <div id="divAgents"></div>
    </body>
</html>
