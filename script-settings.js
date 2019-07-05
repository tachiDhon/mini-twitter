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
});

$(document).ready(function(){

    $("#compte").submit(function(event){
        event.preventDefault();
        $.post(
            'maj-settings1.php',
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
});