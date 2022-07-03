<div class="flex flex-col justify-start w-full">
  <label for="{{$id}}" class="flex text-start items-center gap-1 mb-1">@if($icon != null)<span class="material-symbols-outlined text-[1.25rem]">{{$icon}}</span>@endif{{$label}}
  @error($id)
    <span class="text-xs text-red-600">{{$message}}</span>
  @enderror
  </label>
  {{$slot}}
  <input type="{{$type}}" wire:model.defer="{{$id}}" id="{{$id}}" class="block bg-zinc-800 border border-zinc-700 p-2 px-4 rounded-lg outline-none @if($type == 'file') cursor-pointer @endif">
</div>
