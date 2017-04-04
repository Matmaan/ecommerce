console.log("JS loaded");

// Utilisation de la global $_GET en JS
function $_GET(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace(
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;
	}
	return vars;
}

$("#nbProducts").on("change", function() {
    if(!$_GET("category")){
        // Si aucune categorie n'est appliqué
        console.log($(this).val());
        $.ajax({
            url: "pages/productList.php?nbProducts="+$(this).val(),
            type: "GET"
        }).done(function(page) {
            // Change select default value
            $("#nbProducts option:disabled").html($("#nbProducts").val());
            // Refresh list
            $("#productList").html(page);
            console.log("refreshed");
        });
    } else {
        $.ajax({
            url: "pages/productList.php?nbProducts="+$(this).val() + "&category="+$_GET("category"),
            type: "GET"
        }).done(function(page) {
            // Change select default value
            $("#nbProducts option:disabled").html($("#nbProducts").val());
            // Refresh list
            $("#productList").html(page);
            console.log("refreshed");
        });
    }
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
