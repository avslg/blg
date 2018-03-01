$(document).ready(function () {

    var count = 0;
    var first = 0;
    var last = 4;
    var perPage = 5;
    var remove ="";
    var url ="";
    var id = 0;
    var lastpost = "";
    var posts;
    var container = $("div.main");

    $.ajax({
        url: "/?controller=post&action=count",
        dataType: 'json',
        async: false,
        type:'get',
        success: function(data) {
            $.each(data,function (key,val) {
                count = parseInt(val.count);
            });
        }
    });


    $.ajax({
        url: "/?controller=post&action=get&json=true&id=1&lastid="+count,
        dataType: 'json',
        type:'get',
        success: function(data) {
            posts = data;
            lastpost = data[count-1];

            loadPosts(posts,first,last);
        }
    });



    function loadPosts(posts,first,last){
        var array = posts.slice(first,last+1);
        container.empty();
        $.each(array, function (key, value) {
            container.append('<article>' +
                '<h1>' + value.title + '</h1>' + '<p>' + value.content + '</p>' +
                '</article>');
            container.append('<a href="/?controller=post&action=view' +
                "&id=" + value.postid  + '&json=false"'+'>читать</a>');
        });


        $(".main a").click(
            function (event) {
                event.preventDefault();

                href = $(this).attr("href");
                id = getURLParameter(href,"id");

                loadOnePost(id);

            }
        );

    }


    function loadOnePost(singleid) {
        var post;
        for(i=0;i<=posts.length;i++){
            if(posts[i].postid == singleid){
                post = posts[i];
                break;
            }
        }

        container.empty();
        var date = largestDate([post.date,post.dateupdate]);
        container.append('<article>' +
                    '<h1>' + post.title + '</h1>' + '<p>' + post.content + '</p>' +
                    '<p><span>'+ date +'</span></p>' +
                    '</article>');

            $("a.nav-link").remove();
    }



    function largestDate(dates) {
        var secondDate;
        var max;
        if(dates) {
            var largest = new Date(dates[0]).getTime();

        } else return false;

        for(i=0; i < dates.length; i++){
            secondDate = new Date(dates[1]).getTime();
            if(largest < secondDate){
                max = i;
            }
        }
        return dates[max];
    }

    function getURLParameter(link, name) {

        return (RegExp(name + '=' + '(.+?)(&|$)').exec(link)||[,null])[1];
    }




   loadlink =  $("a.rb").click(function (e) {
       e.preventDefault();

       if((last + perPage) < parseInt(lastpost["postid"])) {
           first = first + perPage;
           last = last + perPage;
           loadPosts(posts,first,last);
           //   loadlink.css('visibility', 'hidden');
       }

       if((last + perPage) >= parseInt(lastpost["postid"])) {
           loadlink.css('visibility', 'hidden');
       }

       if(first >= perPage){
           loadleftlink.css('visibility', 'visible');
       }

    });

    loadleftlink =  $("a.lb").click(function (e) {

        e.preventDefault();
        first = first - perPage;
        last = last - perPage;

        loadPosts(posts,first,last);
        loadlink.css('visibility', 'visible');

        if(last <= perPage) {
            loadleftlink.css('visibility', 'hidden');
         }

    });






});