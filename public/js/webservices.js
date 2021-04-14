var baseUrl = "http://localhost:8080";

//Ajax Detail App
$('.proyek').each(function () {
    var appID = $(this).attr("data-id");
    var url = '/webservice/ajax_edit'; //adjust according to your site/setup
    $.post(url, {
            id: appID,
        },
        function (data, status) {
            if (status == 'success') {
                data = $.parseJSON(data);
                if (data.token == null) data.token = "-";
                $('#token_app' + appID).text(data.token);

                $('#req_date' + appID).text(data.req_date);

                if (data.req_acc == null) data.req_acc = "-";
                $('#req_acc' + appID).text(data.req_acc);

                $('#deskripsi' + appID).text(data.deskripsi);
                var string = "";
                data.scope.map((item, index) => {
                    string = string + item.scope_dev + " [" + item.scope + "]<br>"
                });
                $('#scope' + appID).html(string);


            } else {
                alert('No message available');
            }
        },
    );
});

/*$(".proyek").click(function () {
    if (!$(this).hasClass('border-primary')) {
        $(this).addClass('border-primary')
        $(this).css("border-width", "2px")
        $(this).after(`
        <div class="w-11/12 mx-auto mb-4 rounded-b-xl hidden opacity-0 duration-500 transition-all" style="box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.1), 0 0px 3px 3px rgba(0, 0, 0, 0.06);;">
    <div class="flex justify-between text-sm">
        <div class="flex">
            <div class="text-white py-1 w-20 text-center mr-1 cursor-pointer transform hover:scale-105 outline-none choosed">TOKEN</div>
            <div class="text-white py-1 w-20 text-center mr-1 cursor-pointer outline-none transform hover:scale-105 notchoose">DETAIL</div>
        </div>
        <div class="mr-3 flex items-center">
            <input type="button" value="HAPUS" class="text-red-500 font-semibold transition-all cursor-pointer outline-none border-none bg-transparent hover:text-red-700">
        </div>
    </div>
    <div id="isiToken" class="sm:mx-3 mx-2">
        <div class="flex mt-3 mb-2">
            <p class="w-1/4 text-primary text-sm font-bold">Token Pengguna</p>
            <p class="w-3/4 text-primary text-sm break-all">fafdsfsgdfgdfhgfhs24235gh43y@4gfdhdshgshshsggrgrgrg4y4456547fefgfeggfgf</p>
        </div>
        <div class="flex mb-2">
            <p class="w-1/4 text-primary text-sm font-bold">Tanggal Disetujui</p>
            <p class="w-3/4 text-primary text-sm">30 Feruari 2021 - 21.00</p>
        </div>
        <div class="flex pb-4">
            <p class="w-1/4 text-primary text-sm font-bold">Masa Berlaku</p>
            <p class="w-3/4 text-primary text-sm">2 Bulan</p>
        </div>
    </div>
    <div class="hidden" id="isiDetail">
        <div class="flex mx-3 mt-3 mb-2">
            <p class="w-1/4 text-primary text-sm font-bold">Deskripsi</p>
            <p class="w-3/4 text-justify text-primary text-sm">Berisikan Data yang diisikan saat membuat proyek. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, iusto id? Natus officiis nemo laborum similique molestiae in labore tenetur nihil. Cum temporibus alias modi ratione est assumenda, commodi possimus?</p>
        </div>
        <div class="flex mx-3 pb-4">
            <p class="w-1/4 text-primary text-sm font-bold">Cakupan Data</p>
            <p class="w-3/4 text-justify text-primary text-sm">Menggunakan informasi pribadi</p>
        </div>
    </div>
</div>
    `)
        $(this).next().children().first().children().first().hover(function () {
            $(this).next().children().first().children().first().children().eq(0).removeAttr('style')
            $(this).next().children().first().children().first().children().eq(1).removeAttr('style')
        })
        var $this = $(this);
        $(this).next().removeClass('hidden')
        setTimeout(function () {
            $this.next().removeClass('opacity-0');
        }, 30);


        $(this).next().children().first().children().first().children().eq(1).click(function () {
            $(this).removeClass('notchoose').addClass('choosed')
            $(this).prev().removeClass('choosed').addClass('notchoose')

            $(this).parent().parent().next().next().removeClass('hidden')
            $(this).parent().parent().next().addClass('hidden')
        })

        $(this).next().children().first().children().first().children().eq(0).click(function () {
            $(this).removeClass('notchoose').addClass('choosed')
            $(this).next().removeClass('choosed').addClass('notchoose')

            $(this).parent().parent().next().next().addClass('hidden')
            $(this).parent().parent().next().removeClass('hidden')
        })

    } else {
        $(this).removeClass('border-primary')
        $(this).css("border-width", "1px")

        $(this).next().addClass('opacity-0')
        $(this).next().addClass('hidden')
    }
})*/

$(".proyek").click(function() {
    if (!$(this).hasClass('border-primary')) {
        $(this).addClass('border-primary')
        $(this).css("border-width", "2px")
       
        var $this = $(this);
        $(this).next().removeClass('hidden')
        setTimeout(function() {
            $this.next().removeClass('opacity-0');
        }, 30);


        $(this).next().children().first().children().eq(1).click(function() {
            $(this).removeClass('notchoose').addClass('choosed')
            $(this).prev().removeClass('choosed').addClass('notchoose')

            $(this).parent().next().next().removeClass('hidden')
            $(this).parent().next().addClass('hidden')
        })

        $(this).next().children().first().children().eq(0).click(function() {
            $(this).removeClass('notchoose').addClass('choosed')
            $(this).next().removeClass('choosed').addClass('notchoose')

            $(this).parent().next().next().addClass('hidden')
            $(this).parent().next().removeClass('hidden')
        })

    } else {
        $(this).removeClass('border-primary')
        $(this).css("border-width", "1px")
        // $(this).next().addClass('hidden')

        $(this).next().addClass('opacity-0')
        $(this).next().addClass('hidden')
    }
})

$(".delete-project").click(function() {
    var appID = $(this).attr("data-id");
    var r = confirm("Delete Project?");
    if (r == true) {
        $.post( baseUrl+'/webservice/delete', { id_app: appID }, function(){
            var url=baseUrl+'/webservice/proyek';
            window.location = url;
        });
        
      } 

})