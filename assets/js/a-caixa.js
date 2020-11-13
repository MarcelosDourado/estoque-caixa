   cbadd = document.createElement("button");
   cbadd.setAttribute("id", "add");
   cbadd.setAttribute("class", "btn btn-success btn-sm add");
   cbadd.setAttribute("name", "add");
 
   var tadd = document.createTextNode("Adcionar");
  
   pqtd = document.createElement("input");
   pqtd.setAttribute("type","number")
   pqtd.setAttribute("id", "pqtd");
   pqtd.setAttribute("class", "pqtd");
   pqtd.setAttribute("name", "pqtd");
   cbadd.appendChild(tadd);
  
   var pre = document.getElementsByTagName("pre");
  let c =[];
   let d = 0;
   let guard = [];
   let num = [];
   let cont = 0;
  
   var bpesquisar = document.getElementById("pesquisar");
    bpesquisar.addEventListener("click", function(){
    
        var formulario = document.getElementById("enviar");
        var bpesquisa = document.getElementById("pesquisa").value;
       
        
            console.log(d);
           
          
        event.preventDefault();
    
    var form = { pesquisa : bpesquisa };
    var json_stri = JSON.stringify(form);
    
    var ajax = new XMLHttpRequest();
    
    ajax.open("POST", "../estoque-caixa/produto/buscarnome", true);
    ajax.setRequestHeader("Content-type", "x-www-form-urlencoded");
    ajax.setRequestHeader("Content-type", "application/json");

    //ajax.responseType = "json";
     ajax.send(json_stri);
     
    ajax.addEventListener("readystatechange", function(){
    if(ajax.readyState === 4 && ajax.status === 200){
        var resposta =  JSON.parse(ajax.responseText);
        var produto = document.querySelector(".lista");
        var separador = document.createElement("div");
       // separador.setAttribute("class", "separador"+d)
           // produto.appendChild(separador);
          //  pegue = document.querySelector(".separador"+d);
          //  separador.setAttribute("id", "separador"+d);
       
       // var ult = c[c.length - 1];
       //console.log (ult);
      
    
      // var liresp = document.createElement("li");
      // liresp.setAttribute("id", "lisresp");
      
      // liresp.setAttribute("name", "lisresp");
if(resposta>1){
    cont++;
}

                   for (let i = 0; i < resposta.length; ++i) {
                        guard.push(resposta[i]);
                    console.log(guard);
                    cbadd.setAttribute("id", "add"+[cont]);
                    pqtd.setAttribute("id", "pqtd"+[cont]);
                    
                 produto.innerHTML +=  `<li class = 'col col-md-12  list-group-flush result${[cont]}'>`+"<pre>"
                                                      +"<strong>"+ guard[cont].codigo +"</strong>"
                                                      +"<strong>" + guard[cont].nome   +"</strong>"
                                                      +"<strong>" +guard[cont].valor  +"</strong>"
                                                      +"<strong>" +pqtd.outerHTML  +"</strong>"
                                                      +"<strong>" +guard[cont].qtd    +"</strong>"
                                                      +"<strong>" +cbadd.outerHTML +"</strong>"+"</pre>" +"</li>";
                                                    let res = document.querySelector(`.result${[i]}`);
                                                    num.push(cont);
                                                    cont++;
                                                    console.log(num);
                    }
             
                                     
                     
      for (let k =0 ; k < num.length; k++) {
          
         
      
          var press = document.getElementById("add"+[k]);
         press.addEventListener("click",function(){
            var car = document.querySelector(".pcarrinho");
          
            tqtd = document.getElementById("pqtd"+[k]);

                                    
                                               
               car.innerHTML +=  `<li class = 'col col-md-12  list-group-flush result${[k]}'>`+"<pre>"+"<strong>"+ guard[k].codigo +"</strong>"
               +"<strong>" + guard[k].nome   +"</strong>"
               +"<strong>" +guard[k].valor  +"</strong>"
               +"<strong>" +tqtd.value  +"</strong>" +"</li>";
       
             console.log(num);
             console.log(k);
           
         }); 
      
        }   
                 
  
    let soma = 0;
     for (let m = 0; m < num.length; m++) {
        var finalizar = document.getElementById("finalizar");
        finalizar.addEventListener("click", function(){
            var total = document.querySelector(".total");
            tqtd = document.getElementById("pqtd"+[m]).value;
           
             soma +=   guard[m].valor * tqtd ;

            total.innerHTML ="R$ "+ soma.toFixed(2);
      
        
        })
    
         
     }
     
     pagamento = 0;

     for (let n = 0; n < num.length; n++) {
        let receber = document.getElementById("receber");
        receber.addEventListener("click", function(){
            event.preventDefault();
        let dinheiro = document.getElementById("dinheiro").value;
        
        let pagamento = dinheiro - soma;
        let troco = document.querySelector(".troco");
        troco.innerHTML = "R$ " + pagamento.toFixed(2);
   
     

        guard[n].id;
        tqtd = document.getElementById("pqtd"+[n]).value;
        guard[n].qtd;
        subestoque =  guard[n].qtd - tqtd;
        atualização = {id : guard[n].id, qtd : subestoque };
        console.log(atualização);
        var up_estoque = JSON.stringify(atualização);
        var xhr = new XMLHttpRequest();
    
        xhr.open("POST", "../estoque-caixa/produto/saida", true);
        xhr.setRequestHeader("Content-type", "x-www-form-urlencoded");
        xhr.setRequestHeader("Content-type", "application/json");
    
        //ajax.responseType = "json";
         xhr.send(up_estoque);
         
                })  
            }
         }

    });
});

      
