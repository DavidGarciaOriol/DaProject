$(document).ready(function(){

    $(".indexgriditem").click(function(){

        let idname = $(this).attr('id');

        //let maindiv = document.getElementById('roombody');
        
        window.location = "../html/room.php";

        let thisRoom = new Room(10, 1, idname);

    });

    $("#watchUrl").bind("enterKey", function(event){

        event.preventDefault();

        let musicUrl = $(this).val();

        $("#videosrc").attr('src', musicUrl);
        $("#videosrc2").attr('src', musicUrl);

    });
});
