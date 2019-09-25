
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
            <p>POUR &nbsp; {{ $devisd->nom}} </p>
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
                                    @if($devisd->elements)
                                    <b>{{ $devisd->elements}}</b>
                                     @else
                                     @endif
                                </td>
                                
                                @if($devisd->qte1)
                                <td>{{ $devisd->qte1}}</td>
                                @else

                                @endif

                                @if($devisd->prix_u)
                                <td>{{ $devisd->prix_u}}</td>
                                @else
                                @endif
                                @if($devisd->montant)
                                <td>{{ $devisd->montant}}</td>
                                @else
                                @endif
                            </tr>
                           
                            <tr>
                                
                                <td>
                                @if($devisd->elements1)
                                    <b>{{ $devisd->elements1}}</b>
                                    @else

                                     @endif
                                    
                                </td>
                                @if($devisd->qte2)
                                <td>{{ $devisd->qte2}}</td>
                                @else
                                @endif
                                @if($devisd->prix_u1)
                                <td>{{ $devisd->prix_u1}}</td>
                                @else
                                @endif
                                @if($devisd->montant1)
                                <td>{{ $devisd->montant1}}</td>
                                @else
                                @endif
                            </tr>
                            <tr>
                               
                                <td>
                                @if($devisd->elements2)
                                    <b>{{ $devisd->elements2}}</b>
                                    @else

                                @endif
                                </td>
                                @if($devisd->qte3)
                                <td>{{ $devisd->qte3}}</td>
                                @else
                                @endif
                                @if($devisd->prix_u2)
                                <td>{{ $devisd->prix_u2}}</td>
                                @else
                                @endif
                                @if($devisd->prix_u2)
                                <td>{{ $devisd->montant2}}</td>
                                @else
                                @endif
                            </tr>
                            <tr>
                               
                                <td>
                                @if($devisd->elements3)
                                    <b>{{ $devisd->elements3}}</b>
                                    @else

                                @endif
                                   
                                </td>
                                @if($devisd->qte4)
                                <td>{{ $devisd->qte4}}</td>
                                @else
                                @endif
                                @if($devisd->prix_u3)
                                <td>{{ $devisd->prix_u3}}</td>
                                @else
                                @endif
                                @if($devisd->montant3)
                                <td>{{ $devisd->montant3}}</td>
                                @else
                                @endif
                            </tr>
                            <tr>
                               
                                <td>
                                @if($devisd->elements4)
                                    <b>{{ $devisd->elements4}}</b>
                                    @else
                                @endif
                                </td>
                                @if($devisd->qte5)
                                <td>{{ $devisd->qte5}}</td>
                                @else
                                @endif
                                @if($devisd->prix_u4)
                                <td>{{ $devisd->prix_u4}}</td>
                                @else
                                @endif
                                @if($devisd->montant4)
                                <td>{{ $devisd->montant4}}</td>
                                @else
                                @endif

                            </tr>

                            <tr>
                               
                               <td>
                               @if($devisd->elements5)
                                   <b>{{ $devisd->elements5}}</b>
                                   @else
                               @endif
                               </td>
                               @if($devisd->qte6)
                               <td>{{ $devisd->qte6}}</td>
                               @else
                               @endif
                               @if($devisd->prix_u5)
                               <td>{{ $devisd->prix_u5}}</td>
                               @else
                               @endif
                               @if($devisd->montant5)
                               <td>{{ $devisd->montant5}}</td>
                               @else
                               @endif

                           </tr>

                           <tr>
                               
                               <td>
                               @if($devisd->elements6)
                                   <b>{{ $devisd->elements6}}</b>
                                   @else
                               @endif
                               </td>
                               @if($devisd->qte7)
                               <td>{{ $devisd->qte7}}</td>
                               @else
                               @endif
                               @if($devisd->prix_u6)
                               <td>{{ $devisd->prix_u6}}</td>
                               @else
                               @endif
                               @if($devisd->montant6)
                               <td>{{ $devisd->montant6}}</td>
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
                                       
                                       <td class="ml-5 border-bottom">{{ $devisd->total1}}</td>
                                   </tr>

                              <tr>
                               
                                <th scope="col"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                   &nbsp; &nbsp; &nbsp; 
                                   HOSPITALISATION 1 JOUR</th>
                                
                             </tr>
                            <tr>
                               
                                <td>
                                @if($devisd->elements7)
                                    <b>{{ $devisd->elements7}})</b>
                                    @else
                                @endif   
                                </td>
                                @if($devisd->qte8)
                                <td>{{ $devisd->qte8}}</td>
                                @else
                                @endif
                                @if($devisd->prix_u7)
                                <td>{{ $devisd->prix_u7}}</td>
                                @else
                                @endif
                                @if($devisd->montant7)
                                <td>{{ $devisd->montant7}}</td>
                                @else
                                @endif
                            </tr>
                            <tr>
                               
                                <td>
                                @if($devisd->elements8)
                                    <b>{{ $devisd->elements8}}(750x12</b>
                                    @else
                                @endif
                                   
                                </td>
                                @if($devisd->qte9)
                                <td>{{ $devisd->qte9}}</td>
                                @else
                                @endif
                                @if($devisd->prix_u8)
                                <td>{{ $devisd->prix_u8}}</td>
                                @else
                                @endif
                                @if($devisd->montant8)
                                <td>{{ $devisd->montant8}}</td>
                                @else
                                @endif
                            </tr>
                            <tr>
                               
                                <td>
                                @if($devisd->elements9)
                                    <b>{{ $devisd->elements9}}</b>
                                    @else
                                @endif   
                                </td>
                                @if($devisd->qte10)
                                <td>{{ $devisd->qte10}}</td>
                                @else
                                @endif
                                @if($devisd->prix_u9)
                                <td>{{ $devisd->prix_u9}}</td>
                                @else
                                @endif
                                @if($devisd->montant9)
                                <td>{{ $devisd->montant9}}</td>
                                @else
                                @endif
                            </tr>
                            <tr>
                               
                               <td>
                               @if($devisd->elements10)
                                   <b>{{ $devisd->elements10}}</b>
                                   @else
                               @endif   
                               </td>
                               @if($devisd->qte11)
                               <td>{{ $devisd->qte11}}</td>
                               @else
                               @endif
                               @if($devisd->prix_u10)
                               <td>{{ $devisd->prix_u10}}</td>
                               @else
                               @endif
                               @if($devisd->montant10)
                               <td>{{ $devisd->montant10}}</td>
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
                                    
                                    <td>{{ $devisd->total2}}</td>
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
                                        
                                    <td  class="ml-5 border-bottom">{{ $devisd->total3}}</td>
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
                        
                    Arrêté le présent devis à la somme de : {{ $devisd->arreter}}
                     
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