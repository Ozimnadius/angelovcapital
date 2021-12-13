$(function () {

    $(".jsAdd").on("click", function (e){
        e.preventDefault();

        $.ajax({
            dataType: "json",
            type: "POST",
            url: '/add.php',
            data: {},
            success: function (result) {
                if (result.status) {
                    $.fancybox.open(result.html);
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });

    });

    $(".account__edit").on("click", function (e){
        e.preventDefault();

        $.ajax({
            dataType: "json",
            type: "POST",
            url: '/edit.php',
            data: {
                id:this.dataset.id
            },
            success: function (result) {
                if (result.status) {
                    $.fancybox.open(result.html);
                } else {
                    alert('Что-то пошло не так, попробуйте еще раз!!!');
                }
            },
            error: function (result) {
                alert('Что-то пошло не так, попробуйте еще раз!!!');
            }
        });

    });
});

