$(document).ready(function(){
setInterval(function(){
    let conv=document.getElementById("conv").value;
    let pseudo=document.getElementById("pseudo").value;
    $("#discussionMessage").load("./fonction/recuperer.php",{conv:conv,pseudo:pseudo});
},2000);
$("#messageF").submit(function(e){
    e.preventDefault(); //empêcher une action par défaut
    let form_url = "./fonction/enregistrer.php"; //récupérer l'URL du formulaire
    let form_method = $(this).attr("method"); //récupérer la méthode GET/POST du formulaire
    let form_data = $(this).serialize(); //Encoder les éléments du formulaire pour la soumission
    $.ajax({
        url : form_url,
        type: form_method,
        data : form_data
    }).done(function(){ 
        document.getElementById("message").value = "";
    });
})
});