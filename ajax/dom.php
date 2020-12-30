<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <style>
        .header {
            background-color: yellowgreen;
            text-align: center;
        }
        .close {
            fload: right;
        }
        #myUl {
            text-align: center;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div id="myList" class="header">
    <h1 class="list">My To Do List</h1>
    <input type="text" id="myInput" placeholder="Title...">
    <span class="btn btn-success" onclick="newElement()">Add</span>
</div>
<ul id="myUl" class="list-group">
    <li class="list-group-item">Hit the gym</li>
    <li class="list-group-item">Pay bills</li>
    <li class="list-group-item">Meet George</li>
    <li class="list-group-item">Buy eggs</li>
    <li class="list-group-item">Read a book</li>
    <li class="list-group-item">Organize office</li>
</ul>
</div>
<script>
    var myNodelist = document.getElementsByTagName("LI");

    for(let i=0;i<myNodelist.length; i++) {
        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        myNodelist[i].appendChild(span);
    };

    var close = document.getElementsByClassName("close");
    closeElement();
    function closeElement(){
        var i;
        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.display = "none";
            }
        }
    };

    function newElement() {
        var li = document.createElement("LI");
        var inputValue = document.getElementById("myInput").value;
        var t = document.createTextNode(inputValue);
        li.appendChild(t);
        if(inputValue == '') {
            alert("You must write something!");
        } else {
            document.getElementById("myUl").appendChild(li);
            li.className = "list-group-item";
        }
        document.getElementById("myInput").value = "";
        var span = document.createElement("SPAN");
        var txt = document.createTextNode("\u00D7");
        span.className = "close";
        span.appendChild(txt);
        li.appendChild(span);
        closeElement();
    }
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
