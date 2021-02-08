$(document).ready(function(){
    $("#btnverificar").click(function(){
        var teste=document.getElementsByName("sintomas[]");
        var oi=0;
        var comum=0;
        var m_comum=0;
        var grave=0;

        for(var i=0; i<teste.length;i++){
            if(teste[i].checked==true){
                oi=teste[i].value;
                if(oi=="comum"){
                    comum+=oi.length;
                }else if(oi=="menos_comum"){
                    m_comum+=oi.length;
                }else if(oi=="grave"){
                    grave+=oi.length;
                }
            }
        }

        var php=document.getElementById("comum");
        php.value=comum/5;

        var php=document.getElementById("m_comum");
        php.value=m_comum/11;

        var php=document.getElementById("grave");
        php.value=grave/5;

        // alert("comum = "+comum/5);
        // alert("menos comum = "+m_comum/11);
        // alert("grave = "+grave/5);
    });
});
