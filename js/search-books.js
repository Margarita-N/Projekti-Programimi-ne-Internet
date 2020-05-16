function searchBooks(){
    var text=$("#search_input").val();
    $.ajax({
        url:"SearchBooks.php",
        data:{name:text},
        type:"GET",
        async:true,
        success:function(data){
            $("#search-box").html(data);
        }
    })
}