function SALUT(){
    alert("SALUT !");
}
function TEST(){
    try{
        let Datas = new FormData(); //Initialise l'objet FormData dans la variable Datas de portée limitée à la fonction Set_Form.

            //Assigniation des différents types de données
            Datas.append("pseudo", "test"); 
            Datas.append("message", "je suis un test");
            Datas.append("conv", 1);
        let Request =
            $.ajax({
                type: "POST",          //La méthode cible (POST ou GET)
                url : "enregistrer.php", //Script Cible
                data : Datas
            });
            request.done(function (output_success) {
                //Code à jouer en cas d'éxécution sans erreur du script du PHP
                alert("AAAAAAH");
            });
            request.fail(function (http_error) {
                //Code à jouer en cas d'éxécution en erreur du script du PHP
        
                let server_msg = http_error.responseText;
                let code = http_error.status;
                let code_label = http_error.statusText;
                alert("c caca !");
            });
    }
    catch(e){
        alert(e);
    }  
}