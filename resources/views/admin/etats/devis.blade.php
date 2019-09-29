
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


<style>
           body {
                overflow-x: hidden;
                font-family: 'Roboto Slab', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
            }
            .signature{
                font-family: 'Kaushan Script', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
                color: #0099D5;
            }

            .table thead th {
                align: center;
                border-bottom: 2px solid transparent;
                background: #0099D5;
                color: #fff;
            }
            .font-weight-lighter{
                font-weight: 300;
                background: #0099D5;
                color: #fff;
            }
            .inv{
                background: #E6E4E7;
            }

        }
            .text{
                margin:20px 0px;
            }
            .text{
            margin:20px 0px;
             }
            .fa{
                color:#4183D7;
            }
        .cpi-titulo3 {
                font-size: 12px;
            }
            
            .logo {
                width: 100px;
            }
            
            p {
                line-height: 43%;
                align: center;
            }
            
            hr {
                display: block;
                height: 1px;
                border: 0;
                border-top: 1px solid red;
                margin: 1em 0;
                padding: 0;
            }
            
            .footer {
                padding-top: 1px;
                padding-bottom: 15px;
                position: fixed;
                bottom: 5;
                width: 100%;
            }
    
            .my-3 {
                margin-bottom: 1rem !important;
                margin-top: 1rem !important;
            }
            .my-5 {
                margin-bottom: 3rem !important;
                margin-top: 3rem !important;
            }
            .py-5 {
                padding-bottom: 3rem !important;
                padding-top: 3rem !important;
            }
            .px-3 {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }

            .text {
                     margin: 5px 0px;
                  }
            .border-bottom{
                border-bottom: 2px solid #000 !important;
                /*width: 35%;*/
                padding: 0px 0px 5px 0px;
            }

            .text {
                    margin: 5px 0px;
                }
</style>
    <div class="row">
    <div class="col-6 offset-3">
                <div class="text-center">
                    <h4>CENTRE MEDICO CHIRURGICAL D'UROLOGIE</h4>
                    <p class="mt-2"><small>ONMC : N° 5531 007/10/D/ONMC</small></p>
                    <p><small> Arrêté N° 3203/A/MINSANTE/SG/DOSTS/SDOS/SFSP </small></p>
                    <p>VALLEE MANGA BELL DOUALA-BALI</p>
                    <p>Consultation sur RDV </p>
                    <p><small>TEL:(+237) 233 423 389 / 674 068 988 / 698 873 945</small></p>
                    <p>Email : <small> contac@yahoo.fr</small></p>
                    <p>Site internet : <small> www.cmcu-cm.com</small></p>
                </div>
        </div>
        </div>
        <div class="row">
        <hr class="text-success">
        </div>
        <div class="row">
    <div class="col-5 offset-5">
            <p><small><u>Date:</u><b> Douala,&nbsp; {{ $date = \Carbon\Carbon::now()->toFormattedDateString() }}</b></small></p>
        </div>
     </div>
        <div class="container inv  text-center">
            <div class="row">
                <div class="col-lg-6">
             </div>
                <div class="text-center ">
                    <h4>DEVIS N°2019092015MSJJ</h4>
                </div>
            </div>
            <div class="row text-center text-success">
            <p>POUR &nbsp; {{ $devis->nom}} </p>
                <div class="text-center col-lg-6">
                   
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                               
                                <th scope="col">ELEMENTS</th>
                                <th scope="col">QTES</th>
                                <th scope="col">PRIX UNIT.</th>
                                <th scope="col">MONTANT</th>
                                <th scope="col">TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>  
                                    
                            <tr>
                               
                                <td>
                                    @if($devis->elements)
                                    <b>{{ $devis->elements}}</b>
                                     @else
                                     @endif
                                </td>
                                
                                @if($devis->qte1)
                                <td>{{ $devis->qte1}}</td>
                                @else

                                @endif

                                @if($devis->prix_u)
                                <td>{{ $devis->prix_u}}</td>
                                @else
                                @endif
                                @if($devis->montant)
                                <td>{{ $devis->montant}}</td>
                                @else
                                @endif
                            </tr>
                           
                            <tr>
                                
                                <td>
                                @if($devis->elements1)
                                    <b>{{ $devis->elements1}}</b>
                                    @else

                                     @endif
                                    
                                </td>
                                @if($devis->qte2)
                                <td>{{ $devis->qte2}}</td>
                                @else
                                @endif
                                @if($devis->prix_u1)
                                <td>{{ $devis->prix_u1}}</td>
                                @else
                                @endif
                                @if($devis->montant1)
                                <td>{{ $devis->montant1}}</td>
                                @else
                                @endif
                            </tr>
                            <tr>
                               
                                <td>
                                @if($devis->elements2)
                                    <b>{{ $devis->elements2}}</b>
                                    @else

                                @endif
                                </td>
                                @if($devis->qte3)
                                <td>{{ $devis->qte3}}</td>
                                @else
                                @endif
                                @if($devis->prix_u2)
                                <td>{{ $devis->prix_u2}}</td>
                                @else
                                @endif
                                @if($devis->prix_u2)
                                <td>{{ $devis->montant2}}</td>
                                @else
                                @endif
                            </tr>
                            <tr>
                               
                                <td>
                                @if($devis->elements3)
                                    <b>{{ $devis->elements3}}</b>
                                    @else

                                @endif
                                   
                                </td>
                                @if($devis->qte4)
                                <td>{{ $devis->qte4}}</td>
                                @else
                                @endif
                                @if($devis->prix_u3)
                                <td>{{ $devis->prix_u3}}</td>
                                @else
                                @endif
                                @if($devis->montant3)
                                <td>{{ $devis->montant3}}</td>
                                @else
                                @endif
                            </tr>
                            <tr>
                               
                                <td>
                                @if($devis->elements4)
                                    <b>{{ $devis->elements4}}</b>
                                    @else
                                @endif
                                </td>
                                @if($devis->qte5)
                                <td>{{ $devis->qte5}}</td>
                                @else
                                @endif
                                @if($devis->prix_u4)
                                <td>{{ $devis->prix_u4}}</td>
                                @else
                                @endif
                                @if($devis->montant4)
                                <td>{{ $devis->montant4}}</td>
                                @else
                                @endif

                            </tr>

                            <tr>
                               
                               <td>
                               @if($devis->elements5)
                                   <b>{{ $devis->elements5}}</b>
                                   @else
                               @endif
                               </td>
                               @if($devis->qte6)
                               <td>{{ $devis->qte6}}</td>
                               @else
                               @endif
                               @if($devis->prix_u5)
                               <td>{{ $devis->prix_u5}}</td>
                               @else
                               @endif
                               @if($devis->montant5)
                               <td>{{ $devis->montant5}}</td>
                               @else
                               @endif

                           </tr>

                           <tr>
                               
                               <td>
                               @if($devis->elements6)
                                   <b>{{ $devis->elements6}}</b>
                                   @else
                               @endif
                               </td>
                               @if($devis->qte7)
                               <td>{{ $devis->qte7}}</td>
                               @else
                               @endif
                               @if($devis->prix_u6)
                               <td>{{ $devis->prix_u6}}</td>
                               @else
                               @endif
                               @if($devis->montant6)
                               <td>{{ $devis->montant6}}</td>
                               @else 
                               @endif

                           </tr>
                            
                            
                           
                                   <tr>
                                   <td>
                                   <b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                   &nbsp; &nbsp;TOTAL 1</b>
                                   </td>
                                        <td colspan="3"></td>
                                       
                                       <td class="ml-5 border-bottom">{{ $devis->total1}}</td>
                                   </tr>

                              <tr>
                               
                                <th scope="col"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                   &nbsp; &nbsp; &nbsp; 
                                   HOSPITALISATION 1 JOUR</th>
                                
                             </tr>
                            <tr>
                               
                                <td>
                                @if($devis->elements7)
                                    <b>{{ $devis->elements7}})</b>
                                    @else
                                @endif   
                                </td>
                                @if($devis->qte8)
                                <td>{{ $devis->qte8}}</td>
                                @else
                                @endif
                                @if($devis->prix_u7)
                                <td>{{ $devis->prix_u7}}</td>
                                @else
                                @endif
                                @if($devis->montant7)
                                <td>{{ $devis->montant7}}</td>
                                @else
                                @endif
                            </tr>
                            <tr>
                               
                                <td>
                                @if($devis->elements8)
                                    <b>{{ $devis->elements8}}</b>
                                    @else
                                @endif
                                   
                                </td>
                                @if($devis->qte9)
                                <td>{{ $devis->qte9}}</td>
                                @else
                                @endif
                                @if($devis->prix_u8)
                                <td>{{ $devis->prix_u8}}</td>
                                @else
                                @endif
                                @if($devis->montant8)
                                <td>{{ $devis->montant8}}</td>
                                @else
                                @endif
                            </tr>
                            <tr>
                               
                                <td>
                                @if($devis->elements9)
                                    <b>{{ $devis->elements9}}</b>
                                    @else
                                @endif   
                                </td>
                                @if($devis->qte10)
                                <td>{{ $devis->qte10}}</td>
                                @else
                                @endif
                                @if($devis->prix_u9)
                                <td>{{ $devis->prix_u9}}</td>
                                @else
                                @endif
                                @if($devis->montant9)
                                <td>{{ $devis->montant9}}</td>
                                @else
                                @endif
                            </tr>
                            <tr>
                               
                               <td>
                               @if($devis->elements10)
                                   <b>{{ $devis->elements10}}</b>
                                   @else
                               @endif   
                               </td>
                               @if($devis->qte11)
                               <td>{{ $devis->qte11}}</td>
                               @else
                               @endif
                               @if($devis->prix_u10)
                               <td>{{ $devis->prix_u10}}</td>
                               @else
                               @endif
                               @if($devis->montant10)
                               <td>{{ $devis->montant10}}</td>
                               @else
                               @endif
                           </tr>
                          <tr>
                                <td>
                                <b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp;TOTAL 2</b>
                                </td>
                                        <td colspan="3"></td>
                                    
                                    <td>{{ $devis->total2}}</td>
                           </tr>
                           <tr>
                                <td >
                                <b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp;TOTAL </b>
                                </td>
                                        <td colspan="3"></td>
                                        
                                    <td  class="ml-5 border-bottom">{{ $devis->total3}}</td>
                           </tr>
                       
                       
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                   <br>
                   <br>
                   <br>
                    <p class="ml-5 ">
                        
                    Arrêté le présent devis à la somme de : {{ $devis->arreter}}
                     
                    </p>
                </div>
              
            </div>
            <div >
                
                    <h5 class="text-center">
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                LA DIRECTION</h5>
                                <br>
                                <br>
                    <h6 >
                        
                        
                       NB: Il est à noter que ceci n’est que le coût de l’intervention chirurgicale et de l’hospitalisation.
                           Nous ne sommes tenue responsable des imprévus, ni des examens de laboratoires que vous pourriez effectuer éventuellement.
                           
                     </h6>
                 </div>
            
        </div>