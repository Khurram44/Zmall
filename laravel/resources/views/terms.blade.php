 <!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Multi Step Form | CodingNepal</title> -->
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/venderforms.css')}}">
<style>
  
  .print-store{
  position: absolute;
  top: 15%;
  width: 50%;
  right: 25%;
  background: #fff;
  padding: 30px;
-webkit-box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.1); 
  box-shadow: 0px 0px 0px 1px rgba(0,0,0,0.1);

}
@media screen and (width: 1080px) {
.showpdf{
    margin-left:70px;
}
    
}
    @media only screen and (max-width: 600px) {
        body{
            background: rgb(255,255,255,0.9);
        }
        .print-store{
            position:static;
            top: 20%;
    width: 100%;
    right: 25%;
    background: #fff;
    padding: 30px;
    -webkit-box-shadow: 0px 0px 0px 1px rgb(0 0 0 / 10%);
    box-shadow: 0px 0px 0px 1px rgb(0 0 0 / 10%);
}
.showpdf{
    position:static;
    width:100%;
}
.showpdf embed {
    position: relative;
    right: 0%;
    margin-left: auto;
    margin-right: auto;
}
        
}
    </style>

  </head>
  <body>
    <div class="container-fluid" style="width: 100%; margin: 0px; padding: 0px;">
      <div class="row header">
         <div class="col-sm-4">
           <h3>Zmall</h3>
         </div>
         <div class="col-sm-4">
              <div class="progress-bar">
                 <div class="step ">
                  
                    <div class="bullet active">
                      <span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                    </div>
                  <div class="check fas fa-check">
                  </div>
                   <p>Store Type</p>
                  </div>


                  <div class="step">
                      
                    <div class="bullet active">
                       <span><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                    </div>
                    <div class="check fas fa-check">
                    </div>
                    <p> Store Details</p>
                    </div>


                    <div class="step lastone" >
                      
                    <div class="bullet active">

                        <span><i class="fa fa-address-book" aria-hidden="true"></i></span>
                    </div>
                    <div class="check fas fa-check">
                      
                    </div>
                    <p>Terms</p>
                    </div>
                
               </div>
         </div>
         <div class="col-sm-4"></div>
      
      </div>
      <div class="row">
        <div class="print-store">
          <div class="p1-top-title">
            <center>
              <h4>Terms and Conditions</h4>
              <small>Our policies for sales, refunds and returns</small>
            </center>
          </div>
          <div class="formall-print">
                
                <center><a href="/terms.pdf"> <i class="fa fa-external-link" aria-hidden="true"></i> View in new window </a></center>  
              
             
               <div class="showpdf" style="margin-left:5px;">
                    <embed type="application/pdf" src="/public/terms.pdf" style="height: 300px; width: 600px;">
                     
                 
               </div>
          </div>
          <form action="/flayers">
          <div class="chk-frm">
            <center>
               <input type="checkbox" name="" id="termi" required> <label for="termi"> I confirm I have read the Terms and Conditions</label>
               </center>
          </div>
           
           
          <div class="sm-dec-btn">
            <button type="submit">Decline</button> 
            <button type="submit">Accept</button>
          
          </div>
         </form>
        </div>
      </div>
</div>
  </body>
</html>