
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
                    <h4>DEVIS N°28092015MSJJ</h4>
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
                                    <b>{{ $devis->elements}}</b>
                                   
                                </td>
                                
                                <td>{{ $devis->qte1}}</td>
                                <td>{{ $devis->prix_u}}</td>
                                <td>{{ $devis->montant}}</td>
                            </tr>
                           
                            <tr>
                                
                                <td>
                                    <b>{{ $devis->elements1}}</b>
                                    
                                </td>
                               
                                <td>{{ $devis->qte2}}</td>
                                <td>{{ $devis->prix_u1}}</td>
                                <td>{{ $devis->montant1}}</td>
                            </tr>
                            <tr>
                               
                                <td>
                                    <b>{{ $devis->elements2}}</b>
                                   
                                </td>
                               
                                <td>{{ $devis->qte3}}</td>
                                <td>{{ $devis->prix_u2}}</td>
                                <td>{{ $devis->montant2}}</td>
                            </tr>
                            <tr>
                               
                                <td>
                                    <b>{{ $devis->elements3}}</b>
                                   
                                </td>
                                <td>{{ $devis->qte4}}</td>
                               
                                <td>{{ $devis->prix_u3}}</td>
                                <td>{{ $devis->montant3}}</td>
                            </tr>
                            <tr>
                               
                                <td>
                                    <b>{{ $devis->elements4}}</b>
                                   
                                </td>
                               
                                <td>{{ $devis->qte5}}</td>
                                <td>{{ $devis->prix_u4}}</td>
                                <td>{{ $devis->montant4}}</td>

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
                                       
                                       <td class="ml-5 border-bottom">{{ $devis->montant5}}</td>
                                   </tr>

                              <tr>
                               
                                <th scope="col"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                   &nbsp; &nbsp; &nbsp; 
                                   HOSPITALISATION 1 JOUR</th>
                                
                             </tr>
                            <tr>
                               
                                <td>
                                    <b>{{ $devis->elements5}}</b>
                                   
                                </td>
                               
                                <td>{{ $devis->qte6}}</td>
                                <td>{{ $devis->prix_u5}}</td>
                                <td>{{ $devis->montant6}}</td>
                            </tr>
                            <tr>
                               
                                <td>
                                    <b>{{ $devis->elements6}}</b>
                                   
                                </td>
                                
                                <td>{{ $devis->qte7}}</td>
                                <td>{{ $devis->prix_u6}}</td>
                                <td>{{ $devis->montant7}}</td>
                            </tr>
                            <tr>
                               
                                <td>
                                    <b>{{ $devis->elements7}}</b>
                                   
                                </td>
                                
                                <td>{{ $devis->qte7}}</td>
                                <td>{{ $devis->prix_u7}}</td>
                                <td>{{ $devis->montant8}}</td>
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
                                    
                                    <td>{{ $devis->montant9}}</td>
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
                                        
                                    <td  class="ml-5 border-bottom">{{ $devis->montant10}}</td>
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