@extends('layouts.app')
@section('content')

<div class="container">
            <div class="row" id='firstHomeSection'>
                <form>
                    <div class="col-md-12">

                        <div class="row row-wrap" style="display: flex;justify-content: center;">
    
                            <div class="col-md-2  col-12 text-center ">
                                <label>Contact me By</label>
                            </div>
    
                            <div class="col-md-8 col-12">
                                <input type="radio" name="contact" style="margin: 0 5px 0 0;">
                                <label>Both</label>
                                <input type="radio" name="contact" style="margin: 0 5px;">
                                <label>Phone</label>
                            </div>
                            
    
                            
    
                            
    
                            
                        </div>
                        <div class="row row-wrap" style="display: flex;justify-content: center;">
    
                            <div class="col-md-2  col-12 text-center ">
                                <label>Title</label>
                            </div>
    
                            <div class="col-md-8 col-12 text-center ">
                                <input type="text" class="form-control" name="title" placeholder="Title">
                                
                            </div>
                            
    
                            
    
                            
    
                            
                        </div>
                        <div class="row row-wrap" style="display: flex;justify-content: center;">
    
                            <div class="col-md-2  col-12 text-center ">
                                <label>Add Loaction</label>
                            </div>
    
                            <div class="col-md-8 col-12 text-center ">
                                <input type="text" class="form-control" name="loaction" placeholder="Add Location">
                                
                            </div>
                            
    
                            
    
                            
    
                            
                        </div>
                        <div class="row row-wrap" style="display: flex;justify-content: center;">
    
                            <div class="col-md-2  col-12 text-center ">
                                <label>Description</label>
                            </div>
    
                            <div class="col-md-8 col-12 text-center ">
                                <textarea class="form-control"></textarea>
                                
                            </div>
                            
    
                            
    
                            
    
                            
                        </div>
                        <div class="row row-wrap" style="display: flex;justify-content: center;">
    
                            <div class="col-md-2  col-12 text-center ">
                                <label>Name</label>
                            </div>
    
                            <div class="col-md-8 col-12 text-center ">
                                <input type="text" class="form-control" name="title" style="width: 25%;" placeholder="Name">
                                
                            </div>
                            
    
                            
    
                            
    
                            
                        </div>
                        <div class="row row-wrap" style="display: flex;justify-content: center;">
    
                            <div class="col-md-2  col-12 text-center ">
                                <label style="display: block;">Photos</label>
    
                                <small> Ads with photos sell 5x faster</small>
                            </div>
    
                            <div class="col-md-8 col-12 text-center ">
                                <div style="width: 50%;display: flex;justify-content: center;align-items: center;flex-wrap: wrap;">
                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>
                                        <input type="file" name="image" style="display: none;">
                                    </div>
                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>
                                        <input type="file" name="image" style="display: none;">
                                    </div>
                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>
                                        <input type="file" name="image" style="display: none;">
                                    </div>
                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>
                                        <input type="file" name="image" style="display: none;">
                                    </div>
                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>
                                        <input type="file" name="image" style="display: none;">
                                    </div>
                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>
                                        <input type="file" name="image" style="display: none;">
                                    </div>
                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>
                                        <input type="file" name="image" style="display: none;">
                                    </div>
                                    <div style="width: 22%;background-color: white;padding:20px;margin: 5px;border-radius: 10px;">
                                        <i class="fa fa-plus imageInput " aria-hidden="true" style="background-color: #2681aa;border-radius: 50%;color:white;padding: 7px 10px;"></i>
                                        <input type="file" name="image" style="display: none;">
                                    </div>
                                </div>
                            </div>
                            
    
                            
    
                            
    
                            
                        </div>
                        <div class="row row-wrap" style="display: flex;justify-content: center;">
    
                            <div class="col-md-2  col-12 text-center ">
                                <label>Main Category</label>
                            </div>
    
                            <div class="col-md-8 col-12 text-center ">
                                <select id="company" class="form-control" style="width: 50%;">
                                    <option>small</option>
                                    <option>medium</option>
                                    <option>large</option>
                                </select> 
                                
                            </div>
                            
    
                            
    
                            
    
                            
                        </div>
                        <div class="row row-wrap" style="display: flex;justify-content: center;">
    
                            <div class="col-md-4  col-12 text-center " style="border-top: gray 1px solid; padding-top: 10px;width: 100%;">
                                <input type="submit" value="submit" style="background-color: #025D8C;border: 0px;padding: 5px 10px;color: white;border-radius: 5px;">
                            </div>
    
                            
                            
    
                            
    
                            
    
                            
                        </div>
    
                    </div>
                </form>
                
            </div>
            

            

            

            

        
            
        </div>
        @stop

        <script>
            $('.imageInput').click(function(){
    $(this).next().click();
})
        </script>