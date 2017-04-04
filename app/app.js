console.log("JS loaded");

$("#nbProducts").on("change", function() {
    // console.log($(this).val());

    $.ajax({
        url: "pages/productList.php?nbProducts="+$(this).val(),
        type: "GET"
    }).done(function(page) {
        // Change select default value
        $("#nbProducts option:disabled").html($("#nbProducts").val());
        // Refresh list
        $("#productList").html(page);
    });
});


// On stock le prix de base
var originPrice = parseFloat($("#resultPrice").text());

$("#quantity").on("change", function() {
    // Changement du prix affiché
    $("#resultPrice").html($(this).val()*originPrice + " €");
});


// Add products to DB
// var img = "http://placehold.it/150/24f355";
// $.ajax("https://jsonplaceholder.typicode.com/posts").done(function (json) {
//     console.log(json);
//     for (var variable in json) {
//         console.log(json[variable].id);
//         console.log(json[variable].title);
//         console.log(json[variable].body);
//         console.log(img);
//         $.ajax({
//             url: "addProduct.php",
//             type: "POST",
//             data: {
//                 name: json[variable].title,
//                 description: json[variable].body,
//                 img: img
//             }
//         }).done(function (retour) {
//             console.log(retour);
//         })
//     }
// });
