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
