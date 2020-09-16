$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        error: function(xhr) {
            alert('Request Status: ' + xhr.status + ' Status Text: ' + xhr.statusText + ' ' + xhr.responseText);
        }
    });

    $('.stars').each(function(index, rated) {
        var $button = $(this);
        var $sourceItem = $button;

        var currentRating = $sourceItem.data('rating')

        var stars = $button.children('li.star');

        for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
        }

        for (i = 0; i < currentRating; i++) {
            $(stars[i]).addClass('selected');
        }

    });


    $('.like').each(function(index, rated) {
        var $button = $(this);
        var $sourceItem = $button;
        var currentlyLiked = $sourceItem.data('source-liked')

        // console.log(currentlyLiked)

        if (currentlyLiked == true) {
            console.log(currentlyLiked)
            $sourceItem.addClass("text-red-500").children(".fa-heart").addClass("fas");
        } else {
            $sourceItem.addClass("hover:text-red-500").children(".fa-heart").addClass("far");
        }

    });


    /* 1. Visualizing things on Hover - See next part for action on click */
    $('.stars li').on('mouseover', function() {
        var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

        // Now highlight all the stars that's not after the current hovered star
        $(this).parent().children('li.star').each(function(e) {
            if (e < onStar) {
                $(this).addClass('hover');
            } else {
                $(this).removeClass('hover');
            }
        });

    }).on('mouseout', function() {
        $(this).parent().children('li.star').each(function(e) {
            $(this).removeClass('hover');
        });
    });


    /* 2. Action to perform on click */
    $('.rating-stars .stars li').on('click', function() {


        if (window.Kioosk.user != null) {

            var $button = $(this);
            var $sourceItem = $button;

            sourceType = $sourceItem.data('source-type');
            sourceSlug = $sourceItem.data('source-slug');
            sourceValue = $sourceItem.data('value');

            var data = [
                { 'name': 'sourceType', 'value': sourceType },
                { 'name': 'value', 'value': sourceValue }
            ];

            var onStar = parseInt($(this).data('value'), 10); // The star currently selected
            var stars = $(this).parent().children('li.star');
            console.log(stars.length)
            for (i = 0; i < stars.length; i++) {
                $(stars[i]).removeClass('selected');
            }

            for (i = 0; i < onStar; i++) {
                $(stars[i]).addClass('selected');
            }

            // JUST RESPONSE (Not needed)
            var ratingValue = parseInt($('.stars li.selected').last().data('value'), 10);


            $.ajax({
                url: "/book/" + sourceSlug + "/rate",
                type: "POST",
                data: data,
                success: function(response) {
                    console.log(response);
                    if (response) {
                        $('.success').text(response.success);
                    }
                },
            });
        } else {
            alert("not logged in")
        }



        var msg = "";
        if (ratingValue > 1) {
            msg = "Thanks! You rated this " + ratingValue + " stars.";
        } else {
            msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
        }
        responseMessage(msg);

    });




    $('.like').on('click', function(e) {
        e.preventDefault(); /* prevent form submiting here */

        if (window.Kioosk.user != null) {
            var $button = $(this);
            var $sourceItem = $button;
            sourceType = $sourceItem.data('source-type');
            sourceId = $sourceItem.data('source-id');
            sourceValue = $sourceItem.data('value');

            var data = [
                { 'name': 'sourceType', 'value': sourceType },
                { 'name': 'sourceId', 'value': sourceId },
                { 'name': 'value', 'value': sourceValue }
            ];

            $.ajax({
                url: "/" + sourceType + "/" + sourceId + "/like",
                type: "POST",
                data: data,
                success: function(response) {
                    $sourceItem.toggleClass("hover:text-red-500 text-red-500").children(".far, .fas").toggleClass("far fas");
                    console.log(response.success);
                    if (response.success == 'created') {
                        $sourceItem.children("span").html(parseInt($($sourceItem.children("span")).html(), 10) + 1)
                    } else if (response.success == 'deleted') {
                        $sourceItem.children("span").html(parseInt($($sourceItem.children("span")).html(), 10) - 1)
                    } else {
                        responseMessage("error");
                    }
                },
            });


        } else {
            alert("not logged in")
        }



        var msg = "";
        // if (ratingValue > 1) {
        //     msg = "Thanks! You rated this " + ratingValue + " stars.";
        // } else {
        //     msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
        // }
        responseMessage(msg);

    });


});


function responseMessage(msg) {
    $('.success-box').fadeIn(200);
    $('.success-box div.text-message').html("<span>" + msg + "</span>");
}