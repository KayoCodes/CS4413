function getDataFromForm() {
    var first = document.getElementsByName("fname")[0].value;
    var second = document.getElementsByName("lname")[0].value;

    alert(first.value );
}


function runAjax(fname, lname){
    var xhr = new XMLHttpRequest;
    xhr.onload = function(){
        if (xhr.status === 200){
            this.response = fname+lname;
            document.getElementById("responseString").innerHTML = this.response
        }
    }
    xhr.open('GET','ajax.php',true)
    xhr.send()
}