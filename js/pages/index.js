//index.js
$(function () {
    let mmenu = new Mmenu();

    $(".tg__copy").on("click", function (e){
        e.preventDefault();

        let token = document.querySelector('.tg__data');
        let range = document.createRange();
        range.selectNode(token);
        window.getSelection().addRange(range);

        try {
            document.execCommand('copy');
            toastr.success('Токен скопирован!');
        } catch(err) {
            toastr.error('Невозможно скопировать!')
        }

        window.getSelection().removeAllRanges();
    });

});