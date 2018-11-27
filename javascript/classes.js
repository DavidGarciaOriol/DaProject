class User{

    constructor(id, username, email){

        this.id = id;
        this.username = username;
        this.email = email;

    }

    get username(){
        return this._username;
    }

    set username(username){
        this._username = username;
    }

    get email(){
        return this._email;
    }

    set email(email){
        this._email = email;
    }

    get id(){
        return this._id;
    }

    set id(id){
        this._id = id;
    }
}

class Song{

    constructor(id, link){

        this.id = id;
        this.link = link;

    }

    get link(){
        return this._link;
    }

    set link(link){
        this._link = link;
    }

    get id(){
        return this._id;
    }

    set id(id){
        this._id = id;
    }

}

class Genre{

    constructor(name){
        this.name = name;
    }

    get name(){
        return this._name;
    }

    set name(name){
        this._name = name;
    }
}

class Room{

    constructor(maxUsers, numUsers, Genre){

        this.maxUsers = maxUsers;
        this.numUsers = numUsers;
        this.Genre = Genre;

    }

    isFull(maxUsers, numUsers){
        return (numUsers === maxUsers);
    }

    isEmpty(numUsers){
        return (numUsers === 0);
    }
}

/*class roomManager{

    constructor(room){
        this.room = room;
    }

    roomClosed(){

    }

    checkTimeOut(room){

    }

    closeRoom(room){
        if (room.isFull()){
            this.roomClosed();
        }
    }

}*/