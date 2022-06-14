<div class="w-full {{$full}} mb-5">
  <label class="font-bold mb-1 text-gray-700 block">{{$name}} @error($binding)<span class="text-white text-xs font-normal rounded bg-red-600 p-[.125rem] px-[.2rem] inline-block">{{$message}}</span> @enderror</label>
  <textarea cols="30" rows="4" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error($binding)ring ring-red-600/50 ring-1 @enderror" placeholder="{{$placeholder}}" wire:model.lazy="{{$binding}}"></textarea>
</div>
