let i = 0;
function add() {
    let todo = prompt('Please enter your ToDo');
    if (todo !== "" && todo != null) {
        let node = document.createElement('div');
        let textnode = document.createTextNode(todo);
        node.appendChild(textnode);
        node.id = i;
        
        
        let elem = document.getElementById('ft_list');
        if (i !== 0) {
            let child = document.getElementById(i - 1);
            elem.insertBefore(node, child);
        } else
            elem.appendChild(node);
        
        setCookie(i, todo, "expires: 360, path=/");
        node.setAttribute("onclick", "del(this)");
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
    var d = new Date;
    d.setTime(d.getTime() + 24*60*60*1000*days);
    document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
}

window.onload = function() {
    let cookies = document.cookie.split(';');
    if (cookies[0]) {
        for (let i = 0; i < cookies.length; i++) {
            let arr = cookies[i].split('=');
            ft_list.innerHTML += '<div name="' + arr[0].trim() + '" id ="i" onclick="del(this)">' + decodeURIComponent(arr[1]) + '</div>';
        }
    }
};
