$(document).ready(function(){
    // For subject-tabs
    $(".subject-tabs .nav-link").click(function(){
        $(".subject-tabs .nav-link").removeClass("active");
        $(this).addClass("active");
    });

    $(".subject-tabs .nav-link").click(function(e){
        e.preventDefault();
        var showIt =  $(this).attr("href");
        $(".subject-tabs .tab-pane").hide();
        $(showIt).show();           
    });




    
    // For communication-tabs
    $(".communication .nav-link").click(function(){
        $(".communication .nav-link").removeClass("active");
        $(this).addClass("active");
    });

    $(".communication .nav-link").click(function(r){
        r.preventDefault();
        var showthis =  $(this).attr("href");
        $(".communication .tab-pane").hide();
        $(showthis).show();           
    });




    // For discussions
    $(".view-discussion").click(function(){
        $(".discussion").addClass("d-none");
        $(".discussion-detail").removeClass("d-none");
    });

    $(".back-to-discussions").click(function(){
        $(".discussion").removeClass("d-none");
        $(".discussion-detail").addClass("d-none");
    });

        // Upload funfions for discussions
        $(".discussion-fileupload").click(function(){
            $("#discussion-fileupload").click();
        });
        $(".discussion-imgupload").click(function(){
            $("#chat-fileupload").click();
        });




    // For Comments
    $(".chat-imgupload").click(function(){
        $("#chat-imgupload").click();
    });
    $(".chat-fileupload").click(function(){
        $("#chat-fileupload").click();
    });
});