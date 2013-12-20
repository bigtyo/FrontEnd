var begin = 0;
var offset = 10;
var maxdata = Number($("#count").val());

$("#btnCari").click(function(){
    begin = 0;
    
    search(begin,offset);
});

function search()
{
    $.get('listingsearch',{
        tipepropid :$("#tipepropertiid").val(),

        propinsi : $("#propinsi").val(),
        kota : $("#kota").val(),
        area :$("#area").val(),
        lokasi : $("#lokasi").val(),
        harga_awal : $("#harga").val().split(';')[0],
        harga_akhir : $("#harga").val().split(';')[1],
        luas_bangunan : $('#luas_bangunan').val(),
        kamar_tidur : $('#kamar_tidur').val(),
        kamar_mandi : $('#kamar_mandi').val(),
        garasi : $('#garasi').val(),
        begin : begin,
        end : offset
    },function(res){
        
        $("#listings").fadeOut(500,function(){
            $("#listings").remove();
            $("#listingcontainer").append(res.html);
            //$("#listingcontainer").trigger('create');
            $("#listings").fadeIn(500);
            maxdata = res.count;
            //window.location.href = "#listings";
        });
        
        
        
    });
}

function firstpage()
{
    begin = 0;
    //offset = 10;
    
    search();
}

function lastpage()
{
   begin = maxdata - offset;
   //offset = 10;
    
    search();
}

function next()
{
    begin += offset;
    search();
}

function prev()
{
    begin -= offset;
    search();
}