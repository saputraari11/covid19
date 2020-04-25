const inputs = document.querySelectorAll(".input");


function addcl() {
    let parent = this.parentNode.parentNode;
    parent.classList.add("focus");
}

function remcl() {
    let parent = this.parentNode.parentNode;
    if (this.value == "") {
        parent.classList.remove("focus");
    }
}


inputs.forEach(input => {
    input.addEventListener("focus", addcl);
    input.addEventListener("blur", remcl);
});
$("#telp").keyup(function() {
    $(this).val($(this).val().replace(/^(\d{3})(\d{3})(\d{3})(\d)+$/, "$1-$2-$3-$4"));
});
$("#prov").change(function() {
    $("#city").remove();
    $(".o").addClass("focus");
    var prov = $("#prov option:selected").val();
    if (prov != "Province") {
        $.get("../asset/city.php", { id: prov }).done(function(data) {
            $("#prov").after(data);
        });
    }

});