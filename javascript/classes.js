class User{

    constructor(id, name, email, verified){

        this.id = id;
        this.name = name;
        this.email = email;
        this.verified = verified;

    }

    get name(){
        return this._name;
    }

    set name(name){
        this._name = name;
    }

    get email(){
        return this._email;
    }

    set email(email){
        this._email = email;
    }

    get verified(){
        return this._verified;
    }

    set verified(verified){
        this._verified = verified;
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