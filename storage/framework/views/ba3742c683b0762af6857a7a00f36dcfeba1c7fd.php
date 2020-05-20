<?php $__env->startSection('title','تقديم طلب الالتحاق'); ?>
<?php $__env->startSection('content'); ?>
<div class="tolap">
             
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
            <!-- end card one -->
            <!-- start card two -->
        <div class="card2 border-secondary mb-3">
         <div class="card-header">
            <p>البيانات المطلوبه</p>
         </div>
         <div class="card-body text-secondary" >
            <form >
               <div class="container">
                    <div class="row">
                        <div class="col-3">
                          <input type="radio" name="gender" value="male" checked> مصري<br>
                        </div>
                        
                        <div class="col-3">
                          <input type="radio" name="gender" value="female"> وافد<br>
                        </div>
                    </div>
                    
                    <div class="row">
                          <div class="col-3">
                        <label > اسم الطالب <bdi>:</bdi> </label>
                          </div>
                          <div class="col-3">
                        <input type="text"  name="name" class="form-control" id="inputPassword2" placeholder="الإسم رباعي باللغة العربية">
                  </div>
                    </div>
                  
                 <div class="row">
                      <div class="col-3">
                  <label> الرقم القومى<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <input type="text" name="ssn" class="form-control"  >
              </div>
                 </div>
                 
                  
                   <div class="row">
                     <div class="col-3">
                  <label> كود الطالب <bdi>:</bdi> </label>
                     </div>
                      <div class="col-3">
                  <input type="text" name="code" class="form-control"  >
                        </div>
                   </div>
                   
                   <div class="row">
                      <div class="col-3">
                  <label> تاريخ الميلاد<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <input type="text" name="birthday" class="form-control"  >
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
                  <input type="text" name="address" class="form-control"  >
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                  <label> البريد الالكتروني<bdi>:</bdi>  </label>
                      </div>
                    <div class="col-3">
                  <input type="email" name="email" class="form-control"  >
                  </div>
                  </div>
                
                       
                 <!-- </div>-->
                  
                  <div class="row">
                    <div class="col-3">
                        <label> رقم الموبيل<bdi>:</bdi> </label>
                         </div>
                    <div class="col-3">
                        <input type="text" name="mobile" class="form-control" >
                    </div>
                  
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                  <label> السنه الدراسيه<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <input type="text" name="study-year" class="form-control"  >
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                  <label> الكليه <bdi>:</bdi> </label>
                  </div>
                    <div class="col-3">
                  <input type="text" name="college" class="form-control"  >
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                        
                        <label> الفرقه <bdi>:</bdi> </label>
                        </div>
                        <div class="col-3">
    <select name="grade" class="form-control">
      
       <option value="grade2">الفرقه الثانيه</option>
       <option value="grade3">الفرقه الثالثه</option>
       <option value="grade4">الفرقه الرابعه</option>
       <option value="grade5">الفرقه الخامسه </option>
       <option value="grade6">الفرقه السادسه</option>
  
</select>
                        </div>
                  </div>
                     
        
                    <div class="row">

                      <div class="col-6">
                         <label> ارفق  صوره البطاقه  : </label>
                       <input  type="file" name="upload-ssn"  >
                      </div>
                    <div class="col-6">
                       <label> ارفق الصوره الشخصيه :</label>
                       <input  type="file" name="upload-Photograph"  >
                      </div>
                
                      </div>
                    <div class="row">
                      <div class="co-l-3">
                        <label> كلمة المرور<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="password" name="input-Password" class="form-control" >
                  </div>
                    </div>
                    
                  <div class="row">
                      <div class="col-3">
                        <label> تأكيد كلمة المرور<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="password" name="confirm-password" class="form-control"  >
                  </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                        <label>  اسم ولي الأمر<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="text"  name="father's-name" class="form-control"  >
                  </div>
                  </div>
                  
                     <div class="row">
                      <div class="col-3">
                        <label>صلة ولي الأمر<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="text" name="father's-relationship" class="form-control" >
                  </div>
                     </div>
                     
                  <div class="row">
                      <div class="col-3">
                        <label> الرقم القومي<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="text" name="father's-ssn" class="form-control"  >
                  </div>
                  </div>
                  <div class="row">
                      <div class="col-3">
                        <label> وظيفة ولي الأمر<bdi>:</bdi> </label>
                        </div>
                    <div class="col-3">
                        <input type="text" name="father's-job" class="form-control"  >
                     </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-3">
                        <label> رقم الموبايل<bdi>:</bdi> </label>
                        </div>
                       <div class="col-3">
                        <input type="text" name="father's-phone" class="form-control" >
                        </div>
                  </div>
                   <div class="row">
                  <div class="col-12">
                        <label> صوره بطاقة ولى الأمر : </label>
                       <input  type="file" name="upload-father's-ssn"  >
                      </div>
                   </div>
              <div class="row">
                  <div class="col-3">
                          <input type="radio" name="gender" value="" checked> ساكن عادي<br>
            
                        </div>
                             <div class="col-3">
                          <input type="radio" name="gender" value="" checked> كوارث<br>
                  
                        </div>
                        
                          <div class="col-4">
                          <input type="radio" name="gender" value="" checked> ذوي الإحتياجات الخاصة<br>
                     </div>
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
                     <input type="text" name="rate" class="form-control" >
                      </div>
                      
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
                     <input type="text" name="secondary-aggregate" class="form-control"  >
                      </div>
                      
                      
                       
                  </div>
                  </div>
         </form>
             </div>
           <!-- end card one -->
             <!-- start card two -->
           <div class="card-header">
                    <p>الجزء الخاص بالضامن</p>
                 </div>
                 <div class="card-body text-secondary" >
                  <form >
                       <div class="container">
                            <div class="row">
                                  <div class="col-3">
                                <label > اسم الضامن <bdi>:</bdi> </label></div>
                                  <div class="col-3">
                                    <input type="text" name="guarantor's-name" class="form-control" placeholder="الإسم رباعي باللغة العربية">
                                 </div>
                            </div>
                          
                         <div class="row">
                              <div class="col-3">
                                 <label> رقم البطاقه<bdi>:</bdi> </label>
                               </div>
                               <div class="col-3">
                                 <input type="text" name="guarantor's-ssn" class="form-control"  >
                               
                               </div>
                         </div>
                 
                  
                            <div class="row">
                              <div class="col-3">
                                 <label> رقم الموبيل <bdi>:</bdi> </label>
                              </div>
                               <div class="col-3">
                                 <input type="text" name="guarantor's-phone" class="form-control" >
                                 </div>
                            </div>
                            
                            <div class="row">
                                 <div class="col-3">
                                     <label> الوظيفه<bdi>:</bdi> </label>
                                 </div>
                                 <div class="col-3">
                                    <input type="text" name="guarantor's-job" class="form-control" >
                                 </div>
                            </div>
                   <div class="row">
                      <div class="col-6">
                        <label> ارفق صوره بطاقه الضامن : </label>
                       <input  type="file" name="upload-guarantor's-card-photo"  >
                      </div>
                    </div>
               
            
            </div>
         </form>
         </div>
       
           <!-- end card two -->
           <!-- start card three -->
    <div class="card-header">
            <p>الجزء الخاص بالحاله الإجتماعيه</p>
             </div>
         <div class="card-body text-secondary" >
    
            <form >
               
                 <div class="container">
                    
                      
                    <div class="row">
                          <div class="col-3">
                        <label > اسم ولي الأمر <bdi>:</bdi> </label>
                          </div>
                          <div class="col-3">
                        <input type="text"  name="father's-name" class="form-control"  placeholder="الإسم رباعي باللغة العربية">
                  </div>
                    </div>
                  
                 <div class="row">
                      <div class="col-3">
                  <label> الرقم القومى<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <input type="text" name="father's-ssn" class="form-control">
              </div>
                 </div>
                 
                  
                   <div class="row">
                     <div class="col-3">
                  <label> الوظيفه <bdi>:</bdi> </label>
                     </div>
                      <div class="col-3">
                  <input type="text" name="father's-job" class="form-control">
                        </div>
                   </div>
                   
                   <div class="row">
                      <div class="col-3">
                  <label> الدخل<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <input type="text" name="father's-Monthly-income" class="form-control" >
                   </div>
                   </div>
                   
                    <div class="row">
                      <div class="col-3">
                  <label>عدد أفراد الأسره<bdi>:</bdi> </label>
                      </div>
                    <div class="col-3">
                  <input type="text" name="family-number" class="form-control"  >
                   </div>
                  
                       
                    </div>
                 </div>
            </form>
            </div>
                   <!-- end card three -->
                    <!-- start card four -->
             <div class="card-header">
            <p> الإقامه السابقه للطلاب القدامي</p>
         </div>
         <div class="card-body text-secondary" >
    
            <form >
               
                 <div class="container">
                    
                      
                    <div class="row">
                          <div class="col-3">
                        <label > اسم المبنى <bdi>:</bdi> </label></div>
                          <div class="col-3">
                        <input type="text" name="buliding-name" class="form-control"  placeholder="5الإسم رباعي باللغة العربية">
                  </div> </div>
                  
                 <div class="row">
                      <div class="col-3">
                  <label>رقم الغرفه<bdi>:</bdi> </label></div>
                <div class="col-3">
                  <input type="text" name="room's-number" class="form-control"  >
              </div>
                 </div>
                 
                  <div class="row">
                       <div class="col-12">
                        <textarea name="message" placeholder="مخالفات قانونيه"></textarea>
                      </div>
                   </div>
                  <div class="col-12">
                        <input type="radio" name="gender" value="male" > أقر بأن البيانات(محل الإقامه-التقدير-الفرقه/الكليه)صحيحه طبقا للأوراق الرسميه على أن أقدم هذه الأوراق اذا ثبت أى خطأ في البيانات يتم تحويلي للشئون القانونيه وفصلي
                                          نهائيا من المدينه <br>
                  </div>
                     
                     <button type="submit" class="btn btn-primary mb-2"> <span class="mdi mdi-login-variant"> تسجيل طلب الإلتحاق </span></button>
                
                 </div>
                 </form>
                 </div>
           <!-- end card four -->
           
               
         </div>
         
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/user/studentRegister.blade.php ENDPATH**/ ?>