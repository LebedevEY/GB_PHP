function item(id){

    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: 'id='+id,
        success: function(data){
            document.getElementById('circle').style.display = 'block';
            $(".basket-items").html(data);
        }
    });
}