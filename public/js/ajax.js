function addGood(id){

    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: {
            id: id,
            action: 'add'
        },
        success: function (){
            document.getElementById('circle').style.display = 'block';
        }
    });
};

function delGood(id) {

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

function clearCart() {
    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: {
            action: 'clear'
        },
        success: function (){
            location.reload();
        }
    })

}

function moreQuantity(id) {
    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: {
            id: id,
            action: 'count+'
        },
        success: function () {
            location.reload();
        }
    })
}

function lessQuantity(id) {
    $.ajax({
        type: 'POST',
        url: '../controllers/Cart.php',
        data: {
            id: id,
            action: 'count-'
        },
        success: function () {
            location.reload();
        }
    })
}