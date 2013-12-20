/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var begin = 0;
var offset = 10;
var maxdata = Number($("#count").val());

$(".date").datepicker();

$("#btnCari").bind("click touchstart",function(){
    begin = 0;
    
    search(begin,offset);
});


function search()
{
    $.get('eventsearch',{
        tanggal_awal :$("#tanggal_awal").val(),

        tanggal_akhir : $("#tanggal_akhir").val(),
        lokasi : $("#lokasi").val(),
        officeid :$("#officeid").val(),
        
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

