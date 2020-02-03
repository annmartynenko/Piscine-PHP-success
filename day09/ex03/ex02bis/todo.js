let i = 0;
function add() {
    let todo = prompt('Please enter your ToDo');
    if (todo != null) {
        let node = $("<div></div>").text(decodeURIComponent(todo));
        node.click(function(){'del(this)'});
        $('#ft_list').prepend(node);
        node.attr("id" , i);


        if (i !== 0) {
            $(i - 1).prepend(node);
        } else
            $('#ft_list').prepend(node);
        setCookie(i, encodeURIComponent(todo), "expires: 360, path=/");
        i++;
    }
}

function del(nod) {
    let agree = confirm('Do you want to remove that TO DO?');
    if (agree === true){
        nod.remove();
        setCookie(nod.getAttribute("name").trim(), '', " -1");
    }
}

function setCookie(name, value, days) {
    var d = new Date();
    d.setTime(d.getTime() + 24*60*60*1000*days);
    document.cookie = name + "=" + value + ";path=/;expires=" + d.toUTCString();
}

window.onload = function() {
    let cookies = document.cookie.split(';');
    if (cookies[0]) {
        for (let i = cookies.length - 1; i >= 0; i--) {
            let arr = cookies[i].split('=');
            ft_list.innerHTML +='<div name="' + arr[0].trim() + '" id ="i" onclick="del(this)">' + decodeURIComponent(arr[1]) + '</div>';
        }
    }
};
