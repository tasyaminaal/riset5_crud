
$(".rekomendasi").slice(0,12).show();
$(".showMore").on("click", function(){
    $(".rekomendasi:hidden").slice(0,12).show(); //Setiap klik button, rekomendasi nambah 12

    if($(".rekomendasi:hidden").length == 0){
        $(".showMore").fadeOut();
    }
})