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

    constructor(link){

        this.link = link;

    }

    get link(){
        return this._link;
    }

    set link(link){
        this._link = link;
    }

}

class Room{

    constructor(maxUsers, numUsers, Genre){

        this.maxUsers = maxUsers;
        this.numUsers = numUsers;
        this.Genre = Genre;

    }
    
    get numUsers(){
        return this._numUsers;
    }

    set numUsers(numUsers){
        this._numUsers = numUsers;
    }

    get maxUsers(){
        return this._maxUsers;
    }

    set maxUsers(maxUsers){
        this._maxUsers = maxUsers;
    }

    get genre(){
        return this._Genre;
    }

    set genre(Genre){
        this._Genre = Genre;
    }

    isFull(maxUsers, numUsers){
        return (numUsers === maxUsers);
    }

    isEmpty(numUsers){
        return (numUsers === 0);
    }
}


class Community{

    constructor(name, description, creatorUser, numMembers){

        this.name = name;
        this.description = description;
        this.creatorUser = creatorUser;
        this.numMembers = numMembers;

    }

    get name(){
        return this._name;
    }

    get description(){
        return this._description;
    }

    get creatorUser(){
        return this._creatorUser;
    }

    get numMembers(){
        return this._numMembers;
    }

    set name(name){
        this._name = name
    }

    set description(description){
        this._description = description;
    }

    set creatorUser(creatorUser){
        this._creatorUser = creatorUser;
    }

    set numMembers(numMembers){
        this._numMembers = numMembers;
    }

}