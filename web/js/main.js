/**
 * Created by thien_000 on 6/12/2015.
 */
$(document).ready(function(){
    var selectedElement = $("input[name=dropdownSelectedId]");

    if(selectedElement.val() != undefined || selectedElement.val() != null)
        $("select#"+selectedElement.attr("elementid")).find('option[value='+selectedElement.val()+']').attr('selected','selected');

    $(".deleteObject").click(function(){
       var url = $(this).attr("href");
       var rs = bootbox.confirm("Bạn Chắc Xóa Chứ ?", function(result) {
           if (result) {
               window.location = url;
           } else {
               alert("Bạn Đã Từ Chối Xóa !");
           }
       });
       return false;
    });
});