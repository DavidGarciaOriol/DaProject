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

    new Room(20, 1, jazz);

}
