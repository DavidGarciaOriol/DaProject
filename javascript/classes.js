class User{

    constructor(name, email, verified){

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
}

class Song{

    constructor(link){

        this.link = link;
        
    }

}