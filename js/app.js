$(function () {
    var baseURL = 'http://127.0.0.1/ajax/05-checkpseudo/';

    $('#pseudo').keyup(function(){
        $pseudo = $(this).val();
        console.log($pseudo);
            $.ajax(baseURL+'adduser.php').done(function(response){
            //$('span').html("L'utilisateur <strong>"+$pseudo+"</strong> a bien été ajouté à la base de données");
        });
    })

    $('i').click(function () {
        $(this).parent().remove();
         $deleteuser = $(this).parent().attr('id');
         console.log($deleteuser);
         $.ajax(baseURL+'deleteuser.php?user='+$deleteuser).done(function(response){
             $('span').html("L'utilisateur <strong>"+$deleteuser+"</strong> a bien été supprimé de la base de données");
         });
    });

    // $('.btn').click(function () {
    //     $pseudonew = $('input').val();
    //     $.ajax(baseURL+'adduser.php').done(function(response){
    //         if ($pseudonew !== "") {
    //             alert("L'utilisateur "+$pseudonew+" a bien été ajouté à la base de données");
    //         }
    //
    //     });
    // });
});
