function AffichageResultat()
{ var id=$(this).attr(id);
    $.ajax({
        url : 'display.php',
        data:{"id":id},
        type: 'GET',

        success: function(data){
            $('#resultat').html(data);
        }
    });
}/**
 * Created by BettyFlop on 03/04/2015.
 */