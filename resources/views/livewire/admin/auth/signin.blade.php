<form wire:submit.prevent="submit" class="flex flex-col gap-3 w-full max-w-sm">
  <h1 class="text-2xl text-center mb-6">Sign in to Admin Panel</h1>
  <div class="relative">
    <input type="text" wire:model="username" id="username" class="bg-gray-200 rounded-xl outline-0 p-3 pl-[7rem] w-full border border-transparent {{($errors->has('username') || $errors->has('failed')) ? 'border-red-600 text-red-600 pr-12':''}}">
    <label for="username" class="absolute top-1/2 -translate-y-1/2 left-4 {{ ($errors->has('username') || $errors->has('failed')) ? 'text-red-600' : ''}}">Username</label>
    {!!($errors->has('username') || $errors->has('failed')) ? '<span class="material-symbols-outlined text-red-600 absolute right-4 top-1/2 -translate-y-1/2">error</span>':''!!}
  </div>
  <div class="relative">
    <input type="password" wire:model="password" id="password" class="bg-gray-200 rounded-xl outline-0 p-3 pl-[7rem] w-full border border-transparent {{($errors->has('password') || $errors->has('failed')) ? 'border-red-600 text-red-600 pr-12':''}}">
    <label for="password" class="absolute top-1/2 -translate-y-1/2 left-4 {{ ($errors->has('password') || $errors->has('failed')) ? 'text-red-600' : ''}}">Password</label>
    {!!($errors->has('password') || $errors->has('failed')) ? '<span class="material-symbols-outlined text-red-600 absolute right-4 top-1/2 -translate-y-1/2">error</span>':''!!}
  </div>
  @php
    if($errors->all()) {
      echo '<p class="text-red-600 text-sm text-center">Username or Password is incorrect.</p>';
    }
  @endphp
  <button type="submit" wire:loading.attr="disabled" class="p-3 bg-blue-600 hover:bg-blue-500 transition-all duration-300 rounded-xl text-white mt-3">Sing in</button>
</form>
