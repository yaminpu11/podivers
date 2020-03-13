
function getdataProdiTexting(Type, element) {

    var url = base_url_js_server_ws+'api-prodi/__getDataProdiTexting';

    var data = {
        LangCode : current_language,
        ProdiID : GlobalProdiID,
        Type : Type
    };
    var token = jwt_encode(data,'UAP)(*');
    $.post(url,{token:token},function (jsonResult) {
        // console.log(jsonResult);
        if(jsonResult.length>0){
            var d = jsonResult[0];
            $(element).html(d.Description);
        }
    });

}

