function getDataFromForm() {
    var first = document.getElementsByName("fname")[0].value;
    var second = document.getElementsByName("lname")[0].value;

    runAjax(first.value, second.value);
}


function runAjax(fname, lname){
    var xhr = new XMLHttpRequest;
    xhr.onload = function(){
        if (xhr.status === 200){
            
            document.getElementById("responseString").innerHTML = this.responseText
        }
    }
    xhr.open('GET','ajax.php?fname=${fname}&lname',true)
    xhr.send()
}