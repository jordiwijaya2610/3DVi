@extends('layout.navbar')
@section('content')

{{-- @if (session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif --}}
<div class="backgroundLogin" style="background-color: white; height: 800px;">
    <div class="all_triangles_container">
        <div style="display: flex;justify-content: center;align-items: center;color:black;height:100%;">
            <div class="card text-white" style="border-radius: 1rem; background-color:#71C9CE;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
                    <form action="/login" method="POST">
                      @csrf
        
                      <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                      <p class="text-white-50 mb-5">Please enter your login and password!</p>
        
                      <div class="form-outline form-white mb-4">
                        <input type="email" id="email" name="email" class="form-control form-control-lg" 
                        
                        @if (Cookie::has('email'))
                          value={{Cookie::get('email')}}  
                        @endif  
              
                        autofocus required value="{{ old ('email') }}"/>
                        <label class="form-label" for="email">Email</label>
                      </div>
        
                      <div class="form-outline form-white mb-4">
                        <input type="password" id="password" name="password" class="form-control form-control-lg" 
                        
                        @if (Cookie::has('password'))
                          value={{Cookie::get('password')}}   
                        @endif  
                        />
                        <label class="form-label" for="password">Password</label>
                      </div>
    
                      <div class="checkbox mb-3">
                        <label>
                          <input type="checkbox" 
                
                          @if (Cookie::has('password'))
                            checked
                          @endif 
                
                        value="1" name="remember"> Remember me
                        </label>
                      </div>
        
                      <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                    </form>
      
                  </div>
      
                </div>
              </div>
    
        </div>
        <div class="triangle triangle_tl"></div>
        <div class="triangle triangle_tr"></div>
        <div class="triangle triangle_br"></div>
        <div class="triangle triangle_bl"></div>
      </div>
</div>

@endsection