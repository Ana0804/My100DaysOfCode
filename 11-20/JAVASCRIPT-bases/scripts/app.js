document.getElementById("btn1").addEventListener("click", changeFunction, {once:true});

function changeFunction(){
    document.getElementById("title").innerHTML = "On avance bien !";
    document.getElementById("btn1").style.display = "none";

    const btn = document.createElement("button");
    btn.innerHTML = "clique ici maintenant";
    document.body.appendChild(btn);
    btn.setAttribute("id", "btn2");
}





