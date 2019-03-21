<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CSS - Marisa</title>
    </head>
    <body>
        <div id="Lista">
            <button class="botao1" >Meus Pedidos</button>
            <button class="botao1" >Nossas Lojas</button>
            <button class="botao1" >Cartões Marisa</button>
            <button class="botao1" >Prazo de Entrega</button>
            <button class="botao1" >Lista de Dezejos</button>

            <div id="dropdown">
                <button id="btn-drop" >Atendimento</button>
                <div id="itens">
                    <a href="https://www.marisa.com.br/como-comprar-marisa">Como comprar</a>
                    <a href="https://www.marisa.com.br/faq">Fale conosco</a>



                </div>


            </div>

        </div>

        <h1 id="título">Marisa</h1>
    

        <input type="text" id="pesquisa" placeholder="Digite sua pesquisa" >

        <hr>
         

        <div id="Marisa">
            <button id="botao" >Feminino</button>
            <button id="botao" >Calçados</button>
            <button id="botao" >Lingerie</button>
            <button id="botao" >Jeans</button>
            <button id="botao" >Plus Size</button>
            <button id="botao" >Acessórios</button>
            <button id="botao" >Beleza</button>
            <button id="botao" >Infantil</button>
            <button id="botao" >Masculino</button>
            <button id="botao" >Ofertas</button>
            <div id="itens">
                <a href="https://www.marisa.com.br/">Marisa</a>
            </div>

            <div id="foto1">
                <a target="_blank" href="imagens/img1.png">
                    <img src="imagens/img1.png" />  
                </a> 


            </div>

        </div>


        <!-- ---------------------------------- -->


        <div id="divcalcados">

            <div id="calcados">
                <a target="_blank" href="imagens/BANNER CALCADOS.jpg">
                    <img src="imagens/BANNER CALCADOS.jpg" />  
                </a> 

            </div>

        </div>





        <div class="quatrofotos" >

            <div>
                <div id="foto2"style="margin-bottom: 20px;">
                    <a target="_blank" href="imagens/BANNER BLUSAS.jpg"><img src="imagens/BANNER BLUSAS.jpg" /></a> 
                </div>


                <div id="foto3" >
                    <a target="_blank" href="imagens/BANNER VESTIDOS.jpg"><img src="imagens/BANNER VESTIDOS.jpg" /></a> 
                </div>


            </div>
        </div>

        <div class="quatrofotos" >



            <div >
                <div id="foto4"style="margin-bottom: 20px;" ><a target="_blank" href="imagens/BANNER  SAIAS.jpg"><img src="imagens/BANNER  SAIAS.jpg" /></a> 
                </div>

                <div id="foto5">
                    <a target="_blank" href="imagens/BANNER PLUS-SIZE.jpg"><img src="imagens/BANNER PLUS-SIZE.jpg" /></a>
                </div> 
            </div>



        </div>

       <div id="rodape">
         <hr>
            Receba ofertas com preços exclusivos
           <input type="text" id="nome" placeholder="Digite seu nome" >
            <input type="text" id="email" placeholder="Digite seu email" >
            <hr>
            <div > Aproveite e compartilhe a Marisa nas Redes Sociais <img src="imagens/redes.png" width="100px" height="25px"></div>
         
         
         </div>
 





        <style>

            #itens:hover{
                background-color: white;

            }
            #itens{
                display: none;  
                position: absolute;
                background-color: white;
                min-width: 160px;
                box-shadow: 0px  8px  16px  0px;    
            }
            .botao1{
                background-color: black;
                height: 30px;
                color: deeppink;
                padding: 10px;
                border: none;
                cursor: pointer;     
            }
            #btn-drop{
                background-color: black;
                color: deeppink;
                padding: 10px;
                border: none;
                cursor: pointer; 
            }
            #botao{
                background-color: black;
                color: deeppink;
                padding: 10px;
                border: none;
                cursor: pointer;        
            }
            #Marisa{
                background-color: black;
                height: 50px;
                
            }

            #Marisa button{
                background-color: black;
                color: deeppink;

            }
            #foto1{
                border: 1px solid black;
            }
            #foto1 img{
                width: 100%;
                height: auto;
            }
            #título{
                color: deeppink;
            }
            #pesquisa{
                background-image: url('imagens/pesquisador.png');
                background-repeat: no-repeat;
                padding: 3px  3px 3px 20px;
                background-position: left center;
            }

            #botao{
                background-color: deeppink;
                color: white;
                padding: 10px;
                border: none;
                cursor: pointer;        
            }
            #dropdown{
                position: relative;
                display: inline-block;     
            }
            #itens{
                display: none;  
                position: absolute;
                background-color: deppink;
                min-width: 160px;
                box-shadow: 0px  8px  16px  0px;    
            }
            #itens a{
                color: black;
                padding: 12px  16px;
                text-decoration: none;
                display: block;
            }
            #itens a:hover{
                background-color: deppink;
            }
            #dropdown:hover #botao{
                background-color: deppink;
            }
            #dropdown:hover #itens{
                display: block;      
            }
            .quatrofotos{

                float: left;
                margin-top: 21%;
                margin-right: 20px;
                margin-bottom:  20px;

            }
            #divcalcados{
                margin-left: 10%;
                margin-top: 21%;
                margin-right: 20px;
                margin-bottom:  5%;
                float: left;
                height: 650px;
            }
            #rodape{
                width: 100%;
                height:100px;
                background-color: dimgrey;
                clear: both;
                margin-top: 800px;
            }
            
            #email{
                background-image: url('imagens/email.png');
                background-repeat: no-repeat;
                padding: 3px  3px 3px 20px;
                background-position: left center;
            }
            
            #nome{
                background-image: url('imagens/mulher.png');
                background-repeat: no-repeat;
                padding: 3px  3px 3px 20px;
                background-position: left center;
            }
               

        </style>
    </body>
</html>
