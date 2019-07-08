$(document).ready(function()
{
    var navItems = $('.admin-menu li > a');
    var navListItems = $('.admin-menu li');
    var allWells = $('.admin-content');
    var allWellsExceptFirst = $('.admin-content:not(:first)');
    allWellsExceptFirst.hide();
    navItems.click(function(e)
    {
        e.preventDefault();
        navListItems.removeClass('active');
        $(this).closest('li').addClass('active');
        allWells.hide();
        var target = $(this).attr('data-target-id');
        $('#' + target).show();
    });
<<<<<<< HEAD
=======
});

$(document).ready(function(){

    $("#compte").submit(function(event){
        event.preventDefault();
        $.post(
            'maj-settings.php',
            {
                pseudo : $('#pseudo').val(),
                email : $('#email').val(),
                new_mdp : $('#new_mdp').val(),
                mdp_confirmation : $('#mdp_confirmation').val() 
            },
            callback,
            'text',
            );

        function callback(data){
            alert(data)
        }
    });
>>>>>>> 9d9ea75e916ac5a1b897639f085480baf0653915
});