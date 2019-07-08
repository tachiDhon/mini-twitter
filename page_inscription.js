/* ------------------------------------ Click on login and Sign Up to  changue and view the effect ---------------------------------------*/
    function cambiar_login() {
        document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";  
        document.querySelector('.cont_form_login').style.display = "block";
        document.querySelector('.cont_form_sign_up').style.opacity = "0";               
        setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },400);  
        setTimeout(function(){    
        document.querySelector('.cont_form_sign_up').style.display = "none";
        },200);  
    }

    function cambiar_sign_up(at) {
        document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
        document.querySelector('.cont_form_sign_up').style.display = "block";
        document.querySelector('.cont_form_login').style.opacity = "0";
        setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
        },100);  
        setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
        },400);  
    }

$(document).ready(function(){

    $("#inscription").submit(function(event){
            event.preventDefault();
        	$.post(
                'inscription.php',
                {
                nom : $('#nom').val(),
                prenom : $('#prenom').val(),
                pseudo : $('#pseudo').val(),
                birthdate : $('#birthdate').val(),
                pays : $('#pays').val(),
                email : $('#email').val(),
                mdp : $('#mdp').val()
            },
            mon_callback,
            'text',
        );

        function mon_callback(data){
            alert(data)
        }    
    });

    $("#connexion").submit(function(event){
                event.preventDefault();
                $.post(
                    'connexion.php',
                {
                    email : $('#email_co').val(),
                    mdp : $('#mdp_co').val()
                },
                mon_callback,
                'text',
            );

        function mon_callback(data){
            if (data == "Adresse mail incorrecte") 
            {
                alert(data)
            }

            if (data == "Mot de passe incorrect")
            {
                alert(data)
            }

            if (data == "Bienvenue sur Tweet Academie!")
            {
                document.location.href="tweetlist.php"
            }
        }    
    });

});