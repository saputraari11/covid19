var nilai;
var slider = document.getElementById("range");
slider.oninput = function() {
    nilai = this.value;
    document.getElementById("nilai").innerHTML = nilai + "°C";
}

$("#prov").change(function() {
    $("#city").remove();
    $(".o").addClass("focus");
    var prov = $("#prov option:selected").val();
    if (prov != "Province") {
        $.get("../task/city.php", { id: prov }).done(function(data) {
            $("#prov").after(data);
        });
    }

});

$("#task").click(function() {
    $("#modul").css("display", "block");
    var lokasi = $("#lokasi").val();
    $("#range2").attr("value", nilai);
    $("#lokasi2").attr("value", lokasi);
    if (nilai > 38) {
        $("#argumenmodal").text("and");
    }

});
$(".clos").click(function() {
    $("#modul").css("display", "none");

});

$(".mod1 #mod1 .clos").click(function() {
    $(".mod2").css("display", "block");
    $(".mod2 #mod2 .clos").click(function() {
        $(".mod2").css("display", "none");
        $(".mod3").css("display", "block");
        $(".mod3 #mod3 .clos").click(function() {
            $(".mod3").css("display", "none");
            $(".mod4").css("display", "block");
            $(".mod4 #mod4 .clos").click(function() {
                $(".mod4").css("display", "none");
                $(".mod5").css("display", "block");
                $(".mod5 #mod5 .clos").click(function() {
                    $(".mod5").css("display", "none");
                    $(".mod6").css("display", "block");
                    $(".mod6 #mod6 .clos").click(function() {
                        $(".mod6").css("display", "none");
                    });
                    $(".mod6 #mod6 .acc").click(function() {
                        $(".mod6").css("display", "none");
                    });
                });
                $(".mod5 #mod5 .acc").click(function() {
                    $(".mod5").css("display", "none");
                });
            });
        });
    });
});