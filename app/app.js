console.log("JS loaded");

$("#nbProducts").on("change", function() {
    // console.log($(this).val());

    $.ajax({
        url: "pages/productList.php?nbProducts="+$(this).val(),
        type: "GET"
    }).done(function(page) {
        $("#productList").html(page);
        // console.log(page);
    });
});


// On stock le prix de base
var originPrice = parseFloat($("#resultPrice").text());

$("#quantity").on("change", function() {
    // Changement du prix affiché
    $("#resultPrice").html($(this).val()*originPrice + " €");
});
