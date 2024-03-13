  {{-- login start --}}

  <div class="hero min-h-screen bg-base-200">
    <div class="hero-content flex-col lg:flex-row-reverse">
     
      <div class="card shrink-0 w-full px-14 max-w-sm shadow-2xl bg-base-100 mb-24">
        <form class="card-body " action="/home">
            <h1 class="flex justify-center font-bold text-[1.5rem]">Login Here !!!</h1>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Email</span>
            </label>
            <input type="email" placeholder="email" class="input input-bordered" required />
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Password</span>
            </label>
            <input type="password" placeholder="password" class="input input-bordered" required />
            <label class="label">
              <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
            </label>
          </div>
          <div class="form-control mt-6">
            <button class="btn btn-outline btn-success"> <a href="/home">Login Here</a></button>
          </div>
        </form>
      </div>
    </div>
  </div>

{{-- login end --}}
