function add() {
    let todo = prompt('Please enter your ToDo');
    if (todo != null) {
        $.get("insert.php",
            {
                text: todo
            },
            function(data, status){
                $('#ft_list').empty();
                load();
            }
        );
    }
}

function del(nod) {
    let agree = confirm('Do you want to remove that TO DO?');
    console.log(nod.id)
    if (agree === true){
        $.get("delete.php",
            {
                id: nod.id
            },
            function(data, status){
                $('#ft_list').empty();
                load();
            }
        );
    }
}


function load(){
    $.get("select.php",
        {},
        function(data, status){

            let arr = data.split('-');
            arr.pop();
            console.log(arr);
            arr.reverse();
            console.log(arr);
            for (let t = 0; t < arr.length; t++) {
                let n = arr[t].split(';');
                 console.log(n);
                ft_list.innerHTML += '<div id = \"' + n[0] + '\" onclick=\"del(this)\">' + decodeURIComponent(n[1]) + '</div>';
            }
        }
    );
}
window.onload = load();
