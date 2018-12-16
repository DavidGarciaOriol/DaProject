$(document).ready(function(){

    $(".indexgriditem").click(function(){

        let idname = $(this).attr('id');
        //let maindiv = document.getElementById('roombody');
        
        window.location = "../html/room.php";

        let thisRoom = new Room(10, 1, idname)

        window.onload = function winLoad(event){
            document.getElementById("roomTitle").innerHTML = `Sala de {$thisRoom.genre}`;
            document.getElementById("roomTitle").setAttribute('background-color', 'blue');
        }

    });

   

});
