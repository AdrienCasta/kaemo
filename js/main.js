window.onload = function(){
var cards = document.getElementsByClassName('card');
var order = [];
dragula([document.getElementById('container')])
.on('drop', function (el, container) {
    for(var i = 0; i < cards.length; i++ ){
        cards[i].setAttribute('data-position',i+1);
    }
    for (var j = 0 ; j < cards.length-1; j++ ){;
        order[j] = {id:cards[j].getAttribute('data-id'),position:cards[j].getAttribute('data-position')};
    }
    sendAjaxRequest(order);
  });

    function sendAjaxRequest(order){
       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            }
        });
        $.ajax({
            method: "POST",
            data: {order}, 
            dataType: "json",
            url: "http://localhost/kaemo/"
        });
    }
}

           