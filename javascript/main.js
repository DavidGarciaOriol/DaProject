function createGenres(){
    
    var pop = new Genre("Pop");
    var rock = new Genre("Rock");
    var jazz = new Genre("Jazz");
    var electronic = new Genre("Electronic");
    var metal = new Genre("Metal");
    var drumBass = new Genre("Drum & Bass");
    var classic = new Genre("Classic");

}

function createRoom(){

    createGenres();

    function generateRoom(Genre){

        let maindiv = document.getElementById('roombody');
            
        for(let i = 1; 1>=15; i++){
            if (i === 8){
                let titlediv = $(`<div> <h2> SALA DE ${Genre.name()}  </h2></div>`)

            } else{
                let voiddiv = $('<div> </div>');
                $(maindiv).append(voiddiv);
            }
        }
    }
}