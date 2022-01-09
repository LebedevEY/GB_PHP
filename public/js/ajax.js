function item(id){

    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: 'id='+id,
        success: function (){
            document.getElementById('circle').style.display = 'block';
        }
    });
};

function del(id) {

    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: {
            id: id,
            action: 'delete'
        },
        success: function (){
            location.reload();
        }
    })
}