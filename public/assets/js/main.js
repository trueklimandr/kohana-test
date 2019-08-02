$(document).ready(function () {
    var ageSelect = "#NamesSelectAge",
        letterSelect = "#NamesSelectLetter";

    $(ageSelect).change(function () {
        window.location.href="/user/names" + getParams();
    });
    $(letterSelect).change(function () {
        window.location.href="/user/names" + getParams();
    });

    function getParams() {
        var params = "?maxAge=" + $(ageSelect).val(),
            letter = $(letterSelect).val();

        if (letter !== "") {
            params += "&firstLetter=" + letter;
        }

        return  params;
    }
});