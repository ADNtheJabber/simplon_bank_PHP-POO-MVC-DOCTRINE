window.onload = function(){
    document.getElementById('info').style.display = "none";
}
function searchValid() {

    var requete = new XMLHttpRequest();

    var url = "controller.php";

    var search = document.getElementById('search').value;

    var arg = "seachPersonne="+search;

    requete.open("POST",url,true);

    requete.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    requete.onreadystatechange = function(){

        if(requete.readyState == 4 && requete.status == 200){
            var donne = requete.responseText;
            ok = document.getElementById("trouve");
            ok.innerHTML = donne;

            const element = ok.children;
            for(var i = 0; i < element.length ; i++){
                if(search == element[i].value){
                    document.getElementById('info').style.display = "block";

                }else{
                    document.getElementById('info').style.display = "none";
                }
             }
        }
    };
    requete.send(arg);
    document.getElementById("trouve").innerHTML = "processing..";
}
