$(document).ready(function () {


    var count = 0;
    var url ="";
    var id = 0;
    var table =  $("tbody");
    var titleEdit = $("#editeform #title");
    var titleCreate = $("#createform #title");
    var contentEdit = $("#editeform #content");
    var contentCreate = $("#createform #content");
    editbtn = $('#editbtn');
    createbtn = $('#createbtn');


    function getCount() {
        $.ajax({
            url: "/?controller=post&action=count",
            dataType: 'json',
            async: false,
            type:'get',
            success: function(data) {
                $.each(data,function (key,val) {
                    count = parseInt(val.count);
                    console.log("console "+ count);
                });
            }
        });
        return count;
    }


    loadTable(getCount());

        function loadTable(count) {
            $.ajax({
                url: "/?controller=post&action=get&id=1" + "&lastid="+count + "&json=true",
                dataType: 'json',
                async: false,
                type:'get',
                success: function(data) {
                    table.empty();
                    $.each(data,function (key,val) {

                        table.append("<tr>");
                        table.append("<td>" + val.postid + "</td>");
                        table.append("<td>" + val.title + "</td>");
                        table.append("<td>");
                        table.append('<a class="edit"'+'href="/?controller=post&action=update&json=true&id=' +val.postid  + '"' +'><i class="fas fa-edit"></i></a>');
                        table.append('<a class="remove"'+'href="/?controller=post&action=remove&json=true&id=' +val.postid  + '"' +'><i class="fas fa-trash"></i></a>');
                        table.append("</td>");
                        table.append("</tr>");
                    });

                }});

    }



            editbtn.on('click',function (e) {
                e.preventDefault();
                id = parseInt(id);
                $.ajax({
                    type: "post",
                    url: "/?controller=post&action=update",
                    data:{json:"true", content:contentEdit.val(), title:titleEdit.val(),'id':id},
                    success: function() {
                         loadTable(getCount());
                         console.log("успех");

                    }
                });

                setTimeout(function () {
                    $('#editModal').modal('hide');

                },1000);


            });




            createbtn.on('click',function (e) {
                e.preventDefault();

                //url = $(this).attr("href");
                $.ajax({
                    type: "post",
                    url: "/?controller=post&action=create",
                    data:{json:"true", content:contentCreate.val(), title:titleCreate.val()},
                    success: function() {
                        console.log("успех");
                        loadTable(getCount());
                    }
                });

                setTimeout(function () {
                    $('#createModal').modal('hide');
                },1000);


            });

    $(document).on("click","a.edit",function(e) {
                e.preventDefault();
                $("#editeform #title").val("");
				$("#editeform #content").val("");
				$('#editModal').modal('show');/////
                url = $(this).attr("href");
                id = getURLParameter(url,"id");
                console.log(id);
                console.log(url);
                loadAjaxPost(id);

            });

    $(document).on("click",'a.remove',function(e){
                e.preventDefault();
                url = $(this).attr("href");
                id = getURLParameter(url,"id");
                removeAjax(url,id);
                loadTable(getCount());
            });



    function loadAjaxPost(singleid) {
        connectionUrl = "/?controller=post&action=view" +
            "&id=" + singleid  + "&json=true";

            $.getJSON(connectionUrl, function (data) {
                console.log(data.postid);
                console.log(data.title);
                console.log(data.content);
                contentEdit.val(data.content);
                titleEdit.val(data.title);
            });

        }




    function editAjax(url) {
        id = getURLParameter()
    }



    function removeAjax(url,id) {
        $.ajax({
            type: "POST",
            url: url,
            data: id,
            success: function(data){
                console.log("remove " + data);
            }
        });
    }


        function getURLParameter(url, name) {
            return (RegExp(name + '=' + '(.+?)(&|$)').exec(url)||[,null])[1];
        }

});