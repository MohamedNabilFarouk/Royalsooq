
@extends('layouts.app')
<style>
    .note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
</style>
@section('content')
<div class="container register-form" style='margin-top:50px;'>
            <div class="form">
                <div class="note">
                    <p>Register As Seller</p>
                </div>
<form action='{{route("seller.add")}}' method='post' enctype="multipart/form-data">
    @csrf
                <div class="form-content" style="background:white">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Name *</label>
                            <input type="text" class="form-control {{ $errors->has('name')?'is-invalid':'' }}" name="name" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif    
                            </div>
                          
                            <div class="form-group">
                            <label>Email *</label>
                            <input type="email" class="form-control {{ $errors->has('email')?'is-invalid':'' }}" name="email" value="{{ old('email') }}"  required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            </div>

                             
                            <div class="form-group">
                            <label>password *</label>
                            <input type="password" class="form-control {{ $errors->has('password')?'is-invalid':''}}" name="password"  required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            </div>
                           
                            <div class="form-group">
                            <label>Password Confirmation *</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                   required>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                               </span>
                            @endif
                            </div>
                          
                            <div class="form-group">
                            <label>Phone *</label>
                            <input type="text" class="form-control {{ $errors->has('name')?'is-invalid':'' }}" name="phone" value="{{ old('phone') }}" required>
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif    
                            </div>


                            <div class="form-group">
                            <label>Company Name </label>
                            <input type="text" class="form-control {{ $errors->has('name')?'is-invalid':'' }}" name="company_name" value="{{ old('company_name') }}">
                            @if ($errors->has('company_name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('company_name') }}</strong>
                                </span>
                            @endif    
                            </div>


                            <div class="form-group">
                            <label>Type *</label>
                                <select name="type" class="form-control">
                                    <option value="Individual">Individual</option>
                                    <option value="Company">Company</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label>National Number *</label>
                                <input type="file" name="national_number" class="form-control" required/>
                            </div>

                            <div class="form-group">
                            <label>Tax Card</label>
                                <input type="file" name="tax_card" class="form-control"  value=""/>
                            </div>

                            <div class="form-group">
                                <label>Commercial Register</label>
                                <input type="file" name="commercial_register" class="form-control" value=""/>
                            </div>
                            <div class="form-group">
                            <label>Link</label>
                                <input type="text" name="link" class="form-control" placeholder="Link" value=""/>
                            </div>
                            <button type="submit" class="btnSubmit">Submit</button>
                        </div>
                        
                        </div>

                       
                    </div>      
                      

                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Your Password *" value=""/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password *" value=""/>
                            </div>
                        </div> -->
                            <!-- <div class="form-group">
                                <select name="type" class="form-control">
                                    <option value="Individual">Individual</option>
                                    <option value="Company">Company</option>
                                </select>
                            </div> -->
                            <!-- <div class="form-group">
                                <input type="text" name="company_name" class="form-control" placeholder="Company Name" value=""/>
                            </div> -->
                            <!-- <div class="form-group">
                                <input type="text" name="company_name" class="form-control" placeholder="Company Name" value=""/>
                            </div> -->
                        
                    
                   
                </div>
</form>
            </div>
        </div>
        @stop