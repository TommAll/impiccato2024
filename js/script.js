
let parole=caricaParoleDB();
let as=" ";
let parola=" ";
let vchar=[];
let indErr=1;
caricaParola();
function caricaParola(){
    let ind=0; 
    ind=Math.round(Math.random()*20);
    parola=parole[ind];
    console.log(parola); 
    for(let i=0;i<parola.length;i++){
        if(i==0){
            as+=parola[0]
            vchar[i]=parola[0]
        }else if(i==parola.length-1){
            as+=parola[parola.length-1];
            vchar[i]=parola[parola.length-1];
        }else{
            as+="*";
            vchar[i]='*';
        }
    }
    console.log(vchar);
    document.getElementById("parola").innerHTML=as;
}
function controllaLettera()
{
    let lettera=document.getElementById("txt").value;
    let aus=document.getElementById("parola").innerText;
    as=" ";
    if(lettera.length>1){
        alert("DEVI INSERIRE UNA LETTERA!!!");
    }else
    { 
        if(parola.includes(lettera)){
            for(let i=0;i<parola.length;i++){
                if(parola[i]==lettera){
                    vchar[i]=lettera
                }else if(vchar[i]=="*"){
                    vchar[i]='*';
                }
                as+=vchar[i];
            }
            console.log(vchar);
            document.getElementById("parola").innerHTML=as;
        }else{
            indErr++; 
            let str="<img src="+"img/Fig"+indErr+".png"+">";
            document.getElementById("imag").innerHTML=str;
            as=aus;
        }
        controllaVittoria();
    }
}

function controllaVittoria(){
    console.log("qwededasdasdasdasd");
    if(indErr==5){
        setTimeout("alert('HAI PERSO!!!');", 1);
        window.location.reload();
    }
    if(controllaParola()){
        setTimeout("alert('COMPLIMENTI HAI VINTO!!!');", 1);
       window.location.reload();
    }
}

function controllaParola(){
    let vinto=true; 
    for(let i=0;i<as.length;i++){
        if(as[i]=="*"){
            vinto=false;
            break;
        }
    }
    return vinto;
}