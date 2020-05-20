@extends('layouts.user')
@section('title','تقديم طلب الالتحاق')
@section('content')
<div class="tolap">
             
                  
            <!-- start card -->
            
        <div class="card2 border-secondary mb-3">
         <div class="card-header">
            <p>البيانات المطلوبه</p>
         </div>
         <div class="card-body text-secondary" >
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


            <form  method="post" action="/takdimTalapAlelthak">
              @csrf
                        <div class="row"> 
                         <div class="col-3">
                          <input type="radio" name="gender" checked value="{{old('gender')}}" required>مصري<br>
                        </div>

                         <div class="col-3">
                          <input type="radio" name="gender" value="{{old('gender')}}" required> وافد<br>
                        </div>
                         </div>
                    
                    <div class="row">
                          <div class="col-3">
                        <label > اسم الطالب <bdi>:</bdi> </label>
                          </div>
                          <div class="col-3">
                        <input type="text"  name="name" value="{{old('name')}}" required class="form-control"  placeholder="الإسم رباعي باللغة العربية">
                  </div>
                   </div>
                  
                 <div class="row">
                      <div class="col-3">
                  <label> الرقم القومى<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <input type="text" name="ssn" class="form-control" value="{{old('ssn')}}" required >
              </div>
                 </div>
                 
                  
                   <div class="row">
                     <div class="col-3">
                  <label> كود الطالب <bdi>:</bdi> </label>
                     </div>
                      <div class="col-3">
                  <input type="text" name="code" class="form-control" value="{{old('code')}}" required  >
                        </div>
                   </div>
                   
                   <div class="row">
                      <div class="col-3">
                  <label> تاريخ الميلاد<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <input type="text" name="birthday" class="form-control" value="{{old('birthday')}}" required  >
                   </div>
                   </div>
                  
                  <div class="row">
                      <div class="col-3">
                  <label> محل الاقامه<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <select name="residance"  class="form-control" >
                    <option  value="" disabled>----</option>
                    <option value="امتياز">وجه بحري</option>
                    <option value="جيدجدا">وجه قبلي</option>
                    <option value="جيد">سيناء</option>
                    
                  </select>
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                  <label> العنوان بالتفصيل <bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <input type="text" name="address" class="form-control" value="{{old('address')}}" required >
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                  <label> البريد الالكتروني<bdi>:</bdi>  </label>
                      </div>
                    <div class="col-3">
                  <input type="email" name="email" class="form-control" value="{{old('email')}}" required >
                  </div>
                  </div>
                
                       
                 <!-- </div>-->
                  
                  <div class="row">
                    <div class="col-3">
                        <label> رقم الموبيل<bdi>:</bdi> </label>
                         </div>
                    <div class="col-3">
                        <input type="text" name="mobile" class="form-control" value="{{old('mobile')}}" required >
                    </div>
                  
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                  <label> السنه الدراسيه<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <input type="text" name="study_year" value="{{old('study_year')}}" class="form-control" required >
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                  <label> الكليه <bdi>:</bdi> </label>
                  </div>
                    <div class="col-3">
                  <input type="text" name="college" class="form-control" value="{{old('college')}}" required >
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                        
                        <label> الفرقه <bdi>:</bdi> </label>
                        </div>
                        <div class="col-3">
    <select name="grade" class="form-control">
      
       <option value="الفرقه الثانيه<">الفرقه الثانيه</option>
       <option value="لفرقه الثالثه<">الفرقه الثالثه</option>
       <option value="لفرقه الرابعه<">الفرقه الرابعه</option>
       <option value="لفرقه الخامسه ">الفرقه الخامسه </option>
       <option value="الفرقه السادسه<">الفرقه السادسه</option>
  
</select>
                        </div>
                  </div>
                     
        
                    <div class="row">

                      <div class="col-6">
                         <label> ارفق  صوره البطاقه  : </label>
                       <input  type="file" name="upload_Card_image" value="{{old('upload_Card_image')}}" required  >
                      </div>
                    <div class="col-6">
                       <label> ارفق الصوره الشخصيه :</label>
                       <input  type="file" name="upload_Photograph" value="{{old('upload_Photograph')}}" required >
                      </div>
                
                      </div>
                    <div class="row">
                      <div class="co-l-3">
                        <label> كلمة المرور<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="password" name="input_Password" value="{{old('input_Password')}}" class="form-control" required >
                  </div>
                    </div>
                    
                  <div class="row">
                      <div class="col-3">
                        <label> تأكيد كلمة المرور<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="password" name="confirm_password" value="{{old('confirm_password')}}" class="form-control" required >
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                        <label>  اسم ولي الأمر<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="text"  name="father_name" class="form-control" value="{{old('father_name')}}" required >
                  </div>
                  </div>
                  
                     <div class="row">
                      <div class="col-3">
                        <label>صلة ولي الأمر<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="text" name="father_relationship" class="form-control" value="{{old('father_relationship')}}"required >
                  </div>
                     </div>
                     
                  <div class="row">
                      <div class="col-3">
                        <label> الرقم القومي<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="text" name="father_ssn" class="form-control" value="{{old('father_ssn')}}" required  >
                  </div>
                  </div>
                  <div class="row">
                      <div class="col-3">
                        <label> وظيفة ولي الأمر<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="text" name="father_job" class="form-control" value="{{old('father_job')}}" required >
                     </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                        <label> رقم الموبايل<bdi>:</bdi> </label>
                        </div>
                       <div class="col-3">
                        <input type="text" name="father_phone" class="form-control" value="{{old('father_phone')}}" required >
                        </div>
                  </div>
                   <div class="row">
                  <div class="col-12">
                        <label> صوره بطاقة ولى الأمر : </label>
                       <input  type="file" name="upload_father_Card_image" value="{{old('upload_father_Card_image')}}" required >
                      </div>
                   </div>
              <div class="row">
                  <div class="col-3">
                          <input type="radio" name="gender2" value="{{old('gender2')}}" checked required> ساكن عادي<br>
            
                        </div>
                             <div class="col-3">
                          <input type="radio" name="gender2" value="{{old('gender2')}}" required > كوارث<br>
                  
                        </div>
                        
                          <div class="col-4">
                          <input type="radio" name="gender2" value="{{old('gender2')}}" required> ذوي الإحتياجات الخاصة<br>
                     </div>
              </div>
               
                 
         <div class="card-header">
            <p>خاص بالطلاب قدامى </p>
         </div>
                  
         <div class="card-body text-secondary" >
                    <div class="row">
                      <div class="col-3">
                     <label> تقدير العام الماضى<bdi>:</bdi> </label>
                      </div>
                       <div class="col-3">
                  <select nama="degree" class="form-control">
                    <option  value="" disabled >----</option>
                    <option value="امتياز">امتياز</option>
                    <option value="جيدجدا">جيدجدا</option>
                    <option value="جيد">جيد</option>
                    <option value="مقبول">مقبول</option>
                  </select>
                  </div>
                  </div>
                  <div class="row">
                      <div class="col-3">
                         <label> نسبة  التقدير<bdi>:</bdi> </label>
                      </div>
                      <div class="col-3">
                     <input type="text" name="rate" class="form-control" value="{{old('rate')}}" required>
                      </div>
                      
                      </div>
               
           
                
                  <div class="card-header">
            <p>خاص بالطلاب المستجدين </p>
         </div> 
         <div class="card-body text-secondary" >
                   <div class="row">
                      <div class="col-3">
                         <label>شعبه الثانويه الازهريه<bdi>:</bdi> </label>
                      </div>
                       <div class="col-3">
                              <select name="division" class="test">
                            <option  value="" disabled >----</option>
                            <option value="ادبي">ادبي</option>
                            <option value="علمي">علمي</option>
                            
                          </select>
                       </div>
                    </div>
                  <div class="row">
                      <div class="col-3">
                         <label> مجموع الثانويه الازهريه<bdi>:</bdi> </label>
                      </div>
                      <div class="col-3">
                     <input type="text" name="secondary_aggregate" class="form-control" value="{{old('secondary_aggregate')}}" required >
                      </div>
                  </div>
         </div>
                   <!-- start card two -->
           <div class="card-header">
              <p>الجزء الخاص بالضامن</p>
           </div>
                 <div class="card-body text-secondary" >
                       <div class="container">
                            <div class="row">
                                  <div class="col-3">
                                <label > اسم الضامن <bdi>:</bdi> </label>
                                  </div>
                                  <div class="col-3">
                                    <input type="text" name="guarantor_name" class="form-control" placeholder="الإسم رباعي باللغة العربية" value="{{old('guarantor_name')}}" required>
                                 </div>
                            </div>
                          
                         <div class="row">
                              <div class="col-3">
                                 <label> رقم البطاقه<bdi>:</bdi> </label>
                               </div>
                               <div class="col-3">
                                 <input type="text" name="guarantor_ssn" class="form-control" value="{{old('guarantor_ssn')}}" required >
                               
                               </div>
                         </div>
                 
                  
                            <div class="row">
                              <div class="col-3">
                                 <label> رقم الموبيل <bdi>:</bdi> </label>
                              </div>
                               <div class="col-3">
                                 <input type="text" name="guarantor_phone" value="{{old('guarantor_phone')}}"  class="form-control" required >
                                 </div>
                            </div>
                            
                            <div class="row">
                                 <div class="col-3">
                                     <label> الوظيفه<bdi>:</bdi> </label>
                                 </div>
                                 <div class="col-3">
                                    <input type="text" name="guarantor_job" class="form-control" value="{{old('guarantor_job')}}" required>
                                 </div>
                            </div>
                   <div class="row">
                      <div class="col-6">
                        <label> ارفق صوره بطاقه الضامن : </label>
                       <input  type="file" name="upload_guarantor_card_photo" value="{{old('upload_guarantor_card_photo')}}" required  >
                      </div>
                    </div>
               
            
            </div>
         
         </div>
       
           <!-- end card two -->
          <!-- start card three -->
    <div class="card-header">
            <p>الجزء الخاص بالحاله الإجتماعيه</p>
             </div>
         <div class="card-body text-secondary" >
    
               
                 <div class="container">
                    
                      
                    <div class="row">
                          <div class="col-3">
                        <label > اسم ولي الأمر <bdi>:</bdi> </label>
                          </div>
                          <div class="col-3">
                        <input type="text"  name="father_name" class="form-control" value="{{old('father_name')}}" required placeholder="الإسم رباعي باللغة العربية">
                  </div>
                    </div>
                  
                 <div class="row">
                      <div class="col-3">
                  <label> الرقم القومى<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <input type="text" name="father_ssn" class="form-control" value="{{old('father_ssn')}}" required>
              </div>
                 </div>
                 
                  
                   <div class="row">
                     <div class="col-3">
                  <label> الوظيفه <bdi>:</bdi> </label>
                     </div>
                      <div class="col-3">
                  <input type="text" name="father_job" class="form-control" value="{{old('father_job')}}" required>
                        </div>
                   </div>
                   
                   <div class="row">
                      <div class="col-3">
                  <label> الدخل<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <input type="text" name="father_Monthly_income" class="form-control" value="{{old('father_Monthly_income')}}" required>
                   </div>
                   </div>
                   
                    <div class="row">
                      <div class="col-3">
                  <label>عدد أفراد الأسره<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <input type="text" name="family_number" class="form-control" value="{{old('family_number')}}" required >
                   </div>
                  
                       
                    </div>
                 </div>
          
            </div>
                   <!-- end card three -->

                <!-- start card four -->
             <div class="card-header">
            <p> الإقامه السابقه للطلاب القدامي</p>
         </div>
         <div class="card-body text-secondary" >
    
      
               
                 <div class="container">
                    
                      
                    <div class="row">
                          <div class="col-3">
                        <label > اسم المبنى <bdi>:</bdi> </label></div>
                          <div class="col-3">
                        <input type="text" name="buliding_name" class="form-control" value="{{old('buliding_name')}}" required  placeholder="5الإسم رباعي باللغة العربية">
                  </div> </div>
                  
                 <div class="row">
                      <div class="col-3">
                  <label>رقم الغرفه<bdi>:</bdi> </label></div>
                <div class="col-3">
                  <input type="text" name="room_number" value="{{old('room_number')}}" required >
              </div>
                 </div>
                 
                  <div class="row">
                       <div class="col-12">
                        <textarea name="message" placeholder="مخالفات قانونيه"></textarea>
                      </div>
                   </div>
                  <div class="col-12">
                        <input type="radio" name="gender3" required value="{{old('gender3')}}" > أقر بأن البيانات(محل الإقامه-التقدير-الفرقه/الكليه)صحيحه طبقا للأوراق الرسميه على أن أقدم هذه الأوراق اذا ثبت أى خطأ في البيانات يتم تحويلي للشئون القانونيه وفصلي
                                          نهائيا من المدينه <br>
                  </div> 
                
                  <div class="card1  mb-3">
                        
                            
                           <p>ملاحظات هامه</p>
                                 
                            <ul>
                                <li>
                                    مع ملاحظه ان الطلاب المستجدين هم طلاب الفرق الاولي او الاعداديه ،  الطلاب القدامي هم طلاب ما بعد الفرق الاولي
                                </li>
                                <li>
                                   التقدم للمدينه الجامعيه من خلال استماره التقديم الالكترونى مجانى بالكامل 
                                </li>
                                <li>
                                   يجب الاحتفاظ بكلمة المرور لأهميتها فى تعديل بياناتك كما سيتم استخدمها لاحقا عند اقامتك بالمدينه 
                                </li>
                                <li>
                                    ذوى الإحتياجات الخاصه لايدخل ف التنسيق
                                </li>
                                <li>
                                   التأكد من البيانات جيدا قبل ارسالها 
                                </li>
                                
                            </ul>
                        
                  
                        
                    </div>
                     
                     <button type="submit" class="btn btn-primary mb-2"> <span class="mdi mdi-login-variant"> تسجيل طلب الإلتحاق </span></button>
                
                 </div>
                
                 </div>
           <!-- end card four -->
         </form>
             </div>
           <!-- end card -->
              
         </div>
         
        </div>
@endsection