function change() {
    var status = document.getElementById('pswShow').checked;

    if (status == true) {
        document.getElementById('psw').type = 'index';
        document.getElementById('pswConf').type = 'index';
    } else {
        document.getElementById('psw').type = 'password';
        document.getElementById('pswConf').type = 'password';
    }

}

function createUser(){
    var lname=document.getElementById('lname').value.toLowerCase(),
        fname=document.getElementById('fname').value.toLowerCase(),
        user=document.getElementById('username');
    if(lname!=""&&fname!=""){
        user.value=lname+"."+fname;
    }else if(lname=="" || fname==""){
        document.getElementById('userW').innerHTML="";
    }else{
        document.getElementById('userW').innerHTML="Introduceti un nume si un prenume";
    }
    if(user.length>2){
        document.getElementById('userW').innerHTML="";
    }

}

