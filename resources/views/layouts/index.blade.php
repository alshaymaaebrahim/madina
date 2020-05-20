<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content= "width=device-width , initial-scale=1 , shrink-to-fit=no">


      <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <link rel="stylesheet"href="{{asset('css/main.css')}}">


    <title> الرئيسية</title>


    </head>
    <body>
<!--  start first nav     -->
  <nav class="navbar navbar-expand-sm bg-light">
      <div class="container-fluid">
           <div class="one">
               <p >جامعة الأزهر</p>
               <img src="image/download.jpg" alt="الازهر">
           </div>
           
             <p class="b"> التحويل الرقمي </p>
             
           <div class=" two">
               <p class="i">المدينة الجامعية بنات</p>
               <p class="o">بالقاهرة</p>
           </div>
           
          <form class="example" action="action_page.php">
              
              
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></span></button>
                  <input type="text" placeholder="  بحث..." name="search">
            
             
              
         </form>
          
         <form  action="/action_page.php">
            
          <select name="cars">
                <option value="Arabic">العربية</option>
                <option value="English">الإنجليزية</option>
                      
                      
              </select>
         </form>
         
     </div>
</nav>



<!--end first nav-->
<!-- start second  nav-->
     <nav class="navbar navbar-expand-sm bg-light " >
        <div class="container-fluid first">
            
            <ul class="navbar-nav">
                 
                 
                
                 <!--      <button type="submit" class="btn btn-warning"><a class="nav-link" href="#">Link 1</a></button> -->
               
                 
                 <li class="item1">
                         <a class="nav-link" href="index.html">
                             <i class="fa fa-home" style="font-size:24px" aria-hidden="true"> <span>الرئيسية &raquo;</span></i>
                           
                          
                         </a>
                         
                         
                 </li>
                   
                 
        <li class="item1" >
          
           <div class="dropdown" (click)="clickMargine()">
                  <a class="nav-link" href="#" data-toggle="dropdown">عن المدينة &raquo;</a>
                  
                  <ul class="dropdown-menu" >
                      <li class="dropdown-item"> <a  href="shurutaltaqdim">شروط التقديم</a>    </li> 
                      <li class="dropdown-item"> <a  href="khatawataleltahaq">خطوات الإلتحاق</a>  </li>
                   
                      <li class="dropdown-item"> <a  href="froaokhara">فروع أخرى</>      </li>

                      <li class="dropdown-item"> <a  href="nategataltansek">نتيجة التنسيق</a>     </li>
                      <li class="dropdown-item"> <a  href="buldinghome">المباني السكنية</a>    </li>
                  </ul>
           </div>
        </li>
            </ul>   
                 
              <ul class="navbar-nav"> 
                <li class="item2">
                      
                       <div class="dropdown">
                  <a class="nav-link" href="#" data-toggle="dropdown">تقديم طلب الالتحاق &raquo;</a>
                  
                  <ul class="dropdown-menu">
                      <li class="dropdown-item"> <a  href="طلاب قدامى.html">طلاب قدامى</a>    </li> 
                      <li class="dropdown-item"> <a  href="طلاب مستجدين.html">طلاب مستجدين</a>  </li>
                      
                  </ul>
           </div>
                </li>
                
               <li class="item2">
                       <a class="nav-link" href="دفع المصروفات.html">دفع المصروفات &raquo;</a>
               </li>
               
               <li class="item2">
                       <a class="nav-link" href="اخترمكانك.html">اختر مكانك &raquo;</a>
                 </li>
               <li class="item2">
                       <a class="nav-link" href="نتيجة القبول.html">نتيجة القبول &raquo;</a>
                 </li>
            </ul>
        </div>
            
     </nav>
<!--end second nav-->

   
@yield('content')


<div class="container">
<p > جميع الحقوق محفوظه &copy;لجامعه الازهر </p>
    </div>

<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>

    </body>
