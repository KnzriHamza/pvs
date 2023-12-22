<x-guest-layout>
    <x-authentication-card>
      <div class="container container-tight py-4">
        
        <form class="card card-md"  method="POST" action="{{ route('register') }}" autocomplete="off" novalidate="">
            @csrf
    
            <div class="card-body">
            <h2 class="card-title text-center mb-4">Create new account</h2>
            <x-validation-errors class="mb-4" />
            <div class="mb-3">
              <label class="form-label">Name</label>
              <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <div class="input-group input-group-flat">
              <x-input class="form-control" id="password"  type="password" name="password" required autocomplete="new-password" />
                <span class="input-group-text">
                  <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg>
                  </a>
                </span>
              </div>
              
            </div>
            
            <div class="mb-3">
              <label class="form-label">Password Confirmation</label>
              <div class="input-group input-group-flat">
              <x-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                <span class="input-group-text">
                  <a href="#" class="link-secondary" data-bs-toggle="tooltip" aria-label="Show password" data-bs-original-title="Show password"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6"></path></svg>
                  </a>
                </span>
              </div>
              
            </div>
            



            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Create new account</button>
            
            </div>
          </div>
        </form>
        <div class="text-center text-secondary mt-3">
          Already have account? <a href="./sign-in.html" tabindex="-1">Sign in</a>
        </div>
      </div>
    
    
    
    

        

        
    </x-authentication-card>
</x-guest-layout>
