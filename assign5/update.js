var gatsbyuser = "gatsbyuser";

$("#gatsbyuser").keyup(function() {
    var gatsbyuser = $(this).val();
    jQuery.ajax({
        url: 'inventory.php?price=' + price
    }).done(function( data ){
        $(this).val(data);
    });

});

