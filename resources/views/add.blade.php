@include('partials.navbar')
   {{-- form start --}}

   <form method="POST" action="/store">
@csrf
    
          <div class="ml-80  ">
           <div class="mt-10">
    <label for="nama" class="block text-sm font-medium text-gray-900 dark:text-white">Nama</label>
    <input type="name" id="nama" name="nama" aria-describedby="helper-text-explanation" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-9/12 p-5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Name" required/>
    </div>
    
     <div class="mt-10">
    <label for="kesalahan" class="block  text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
    <input type="name" id="jabatan" name="jabatan" aria-describedby="helper-text-explanation" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-9/12 p-5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Position" required/>
    </div>
    
     <div class="mt-10">
    <label for="hukuman" class="block  text-sm font-medium text-gray-900 dark:text-white">Gaji</label>
    <input type="name" id="gaji" name="gaji"  aria-describedby="helper-text-explanation" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-9/12 p-5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Sallary" required/>
    </div>
    <button type="submit" class="btn btn-success mt-4">submit</button>
    </div>
    </form>