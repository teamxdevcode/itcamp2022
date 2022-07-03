<div class="fixed w-screen h-screen bg-zinc-900/80 top-0 left-0 z-40" x-show="$wire.{{$bind}}" style="display: none">
  <div class="absolute z-50 flex flex-col gap-2 justify-center items-center h-full w-full p-6">
    <button type="button" class="material-symbols-outlined absolute right-3 top-3 text-3xl" x-on:click="$wire.set('{{$bind}}', false)">close</button>
    {{$slot}}
  </div>
  <div class="absolute h-full w-full backdrop-blur-md"></div>
</div>
