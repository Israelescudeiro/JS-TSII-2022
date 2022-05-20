$(document).ready(function(){

    console.log($('#num1').val());
    $('p').text('Mussum Ipsum, cacilds vidis litro abertis. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.Paisis, filhis, espiritis santis.Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.Cevadis im ampola pa arma uma pindureta.')
    
    $('#calc').click(function(){
        $('p').css('border', '3px dashed red');
    });


    $.ajax({
        type: "GET",
        url: "https://www.boredapi.com/api/activity",
        dataType: "json",
        success: function (result, status, xhr){
            console.log(status);
            console.log(result);
            console.log(xhr);

            $('p').text(result.activity);
        },
        error: function (xhr, status, error) {
            alert("Result: " + status + " " + error + " " + xhr.statusText)
        }
    });
});