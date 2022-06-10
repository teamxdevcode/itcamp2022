<div class="flex justify-center h-4/5 items-center space-x-8">
  <div class="container px-6 py-8 mx-auto">
      <h1 class="mt-4 text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">
          เลือกค่ายย่อย
      </h1>

      <div class="mt-6 space-y-4 xl:mt-12">
          <div wire:click="$set('regis.subcamp', 'Webtopia')"
              @class([
                'flex items-center justify-between max-w-2xl px-16 py-6 mx-auto border cursor-pointer rounded-xl',
                'border-green-500' => ($regis->subcamp === 'Webtopia'),
                'border-gray-400' => ($regis->subcamp !== 'Webtopia'),
                ])>
              <div class="flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" @class([
                    "w-5 h-5 sm:h-9 sm:w-9",
                    "text-green-600" => ($regis->subcamp === 'Webtopia'),
                    "text-gray-400" => ($regis->subcamp !== 'Webtopia'),
                    ])
                      viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                          clip-rule="evenodd" />
                  </svg>

                  <div class="flex flex-col items-center mx-5 space-y-1">
                      <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">
                          Webtopia
                      </h2>
                  </div>
              </div>
          </div>

          <div wire:click="$set('regis.subcamp', 'Datavergent')"
          @class([
            'flex items-center justify-between max-w-2xl px-16 py-6 mx-auto border cursor-pointer rounded-xl',
            'border-green-500' => ($regis->subcamp === 'Datavergent'),
            'border-gray-400' => ($regis->subcamp !== 'Datavergent'),
            ])>
              <div class="flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" @class([
                    "w-5 h-5 sm:h-9 sm:w-9",
                    "text-green-600" => ($regis->subcamp === 'Datavergent'),
                    "text-gray-400" => ($regis->subcamp !== 'Datavergent'),
                    ])
                      viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                          clip-rule="evenodd" />
                  </svg>
                  <div class="flex flex-col items-center mx-5 space-y-1">
                      <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">
                          Datavergent
                      </h2>
                  </div>
              </div>
          </div>

          <div wire:click="$set('regis.subcamp', 'Game runner')"
          @class([
            'flex items-center justify-between max-w-2xl px-16 py-6 mx-auto border cursor-pointer rounded-xl',
            'border-green-500' => ($regis->subcamp === 'Game runner'),
            'border-gray-400' => ($regis->subcamp !== 'Game runner'),
            ])>
              <div class="flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" @class([
                    "w-5 h-5 sm:h-9 sm:w-9",
                    "text-green-600" => ($regis->subcamp === 'Game runner'),
                    "text-gray-400" => ($regis->subcamp !== 'Game runner'),
                    ])
                      viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                          clip-rule="evenodd" />
                  </svg>
                  <div class="flex flex-col items-center mx-5 space-y-1">
                      <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">
                          Game runner
                      </h2>
                  </div>
              </div>
          </div>

          <div wire:click="$set('regis.subcamp', 'Nettapunk')"
          @class([
            'flex items-center justify-between max-w-2xl px-16 py-6 mx-auto border cursor-pointer rounded-xl',
            'border-green-500' => ($regis->subcamp === 'Nettapunk'),
            'border-gray-400' => ($regis->subcamp !== 'Nettapunk'),
            ])>
              <div class="flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" @class([
                    "w-5 h-5 sm:h-9 sm:w-9",
                    "text-green-600" => ($regis->subcamp === 'Nettapunk'),
                    "text-gray-400" => ($regis->subcamp !== 'Nettapunk'),
                    ])
                      viewBox="0 0 20 20" fill="currentColor">

                      <path fill-rule="evenodd"
                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                          clip-rule="evenodd" />
                  </svg>

                  <div class="flex flex-col items-center mx-5 space-y-1">
                      <h2 class="text-lg font-medium text-gray-700 sm:text-2xl dark:text-gray-200">
                          Nettapunk
                      </h2>
                  </div>
              </div>
          </div>
          @error('regis.subcamp')<span class="text-red-500 -translate-y-2 text-sm mt-3 block">{{$message}}</span>@enderror

          <div class="w-full flex items-center justify-center px-5 md:px-20 lg:px-0 rounded-md pb-10">
              <button wire:click="save"
                  class="text-center text-white p-4 mt-5 bg-[#2FB02C] w-full rounded-md font-bold ring-4 ring-[#18FF22] ring-opacity-30">
                  บันทึกค่ายย่อย
              </button>
          </div>
      </div>
  </div>
</div>
