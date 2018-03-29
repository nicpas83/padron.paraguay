$(function () {
    $("#UserLoginForm").parents("#container")
            .css("background-image", "url(https://i.pinimg.com/originals/58/26/b9/5826b95d3b626a222bf59cab9f42e6ff.jpg)", "important")
            .css("background-size", "100%");
});

function dashboardDinero(dinero, showSigno) {
    showSigno = (typeof showSigno == "boolean") ? showSigno : true;
    unidades = [
        {unit: "MM", value: Math.pow(1000, 3)},
        {unit: "M", value: Math.pow(1000, 2)},
        {unit: "K", value: Math.pow(1000, 1)},
        {unit: "", value: Math.pow(1000, 0)},
    ];
    for (var i in unidades) {
        var unidad = unidades[i];
        var result = number_format(dinero, 0, ",", ".");
        if (dinero >= unidad.value) {
            if (dinero >= 100000) {
                result = number_format(dinero / unidad.value, 2, ",", ".").toString() + unidad.unit;
                break;
            }
        }
    }
    return (showSigno ? "$ " : "") + result;
}
